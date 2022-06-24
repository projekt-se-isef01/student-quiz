<?php

namespace App\Controllers;

use App\Models\Frage;
use App\Models\Game;
use App\Models\FragenkatalogModel;
use App\Models\Student;
use phpDocumentor\Reflection\Types\True_;

class VS extends BaseController
{
    public function index() {
        echo '<script type="text/JavaScript"> 
                localStorage.clear();

     </script>';
        $model = new Game();
        $data=
            ['spiel'=>$model->findAll()
            ];

        $this->template('Spielauswahl',$data);

    }

    public function startWait($gameId) {

        $model = new Game();
        $game=$model->find($gameId);
        $prove = $model->getPlayers($gameId);
        session()->set('gameId',$gameId);

        // Spiel beendet
        if( $game['status'] == 'beendet' ){
            $data=
                ['spiel'=>$model->findAll()
                ];
            $session=session();
            $session->setFlashdata('msg1', 'Spiel bereits zu Ende');
            return $this->template('Spielauswahl',$data);        }

        if($game['gegnerstudentId']==$_SESSION['id'] && $game['gegnerscore']!==null) {
            return redirect()->to('VS/Ergebnis/'.$gameId);

        }
        if($game['studentId']==$_SESSION['id'] && $game['studentscore']!==null) {
            return redirect()->to('VS/Ergebnis/'.$gameId);

        }
        //Prüfen, ob Spiel bereits begonnen hat, wenn ja leite zum Spiel
        if( $game['status'] == 'aktiv' && ($game['gegnerstudentId']==$_SESSION['id'] or($game['studentId']==$_SESSION['id']))){
            $data['frage'] = $model->getFragen($gameId);
            return $this->template('VS', $data);
        }
        // Wenn nein, warte auf Mitspieler
        if( $game['status'] == 'inaktiv' ){
            return $this->template('Warten');
        }

        // Spiel schon gestartet und Benutzer kein Mitspieler
        if($game['gegnerstudentId']!==$_SESSION['id'] ) {
            $data=
                ['spiel'=>$model->findAll()
                ];
            $session=session();
            $session->setFlashdata('msg1', 'Spiel bereits gestartet');
           return $this->template('Spielauswahl',$data);
        }





    }
    public function wait($gameId)
    {
        $model = new Game();
        $game = $model->find($gameId);
        $prove = $model->getPlayers($gameId);
session()->set('gameId',$gameId);
        // Gegenspieler klickt auf den Spielraum, das Spiel startet
        if($game['status'] == 'inaktiv' && $game['studentId']!==$_SESSION['id']) {

                $upgegner = [
                    'gegnerstudentId' => $_SESSION['id'],
                    'status' => 'aktiv',
                ];


                $model->update($gameId, $upgegner);
                $data['frage'] = $model->getFragen($gameId);
              return  $this->template('VS', $data);
            }
        // Falls Spieler Seite verlässt und mit Back Button zurück kommt
        if( $game['status'] == 'aktiv' && ($game['gegnerstudentId']==$_SESSION['id'] or($game['studentId']==$_SESSION['id']))){
           if($game['studentId']==$_SESSION['id'] && $game['studentscore']==null  or $game['gegnerstudentId']==$_SESSION['id'] && $game['gegnerscore']==null) {
            $data['frage'] = $model->getFragen($gameId);
            return $this->template('VS', $data);

           }
           else {
               return redirect()->to('VS/Spielauswahl/'.$gameId);
           }
        }
        else
            return $this->template('Warten');

    }


    public function endGame($gameId){

        $frageId=$this->request->getVar('frageId');
        $antwort=$this->request->getVar('antwort');
        if ($frageId !==null && $antwort!==null) {
            $score = 0;

            for ($i = 0; $i < count($frageId); $i++) {
                $fId = $frageId[$i];
                $ant = $antwort[$fId];
                $model = new Frage();
                if ($model->vergleichLoesung($fId, $ant) === true) {
                    $score = $score + 1;

                }
            }
            $s= $score;
            $model=new Game();
            $game=$model->find($gameId);
           if($game['studentId']==$_SESSION['id']){
              if ($game['gegnerscore']!==null) {
                  $data1 = ['status' => 'beendet',

                  ];
               $model->update($gameId, $data1);
              }
            $data2 = ['studentscore' => $s,

            ];
               $model->update($gameId, $data2);
               $session=session();
               $session->set('score',$score);
           }
           if($game['gegnerstudentId']==$_SESSION['id']) {
               if ($game['studentscore']!==null) {
                   $data3 = ['status' => 'beendet',

                   ];
                   $model->update($gameId, $data3);
                   $session=session();
                   $session->set('score',$score);
               }
           $data4 = ['gegnerscore' => $s,

               ];
               $model->update($gameId, $data4);
               $session=session();
               $session->set('score',$score);
        }

            $studmodel = new Student();
            $getrec = $studmodel->find($_SESSION['id']);
            $getScore = $getrec['score'];

            $scoregesamt = (int)$getScore + (int)$s;

            $data = ['score' => $scoregesamt,
                'vsGamesGesamt' => (int)$getrec['vsGamesGesamt'] + 1
            ];
            $studmodel->update($_SESSION['id'], $data);
            return redirect()->to('/VS/Ergebnis/'.$gameId);

        }

    }

    public function getErgebnis($gameId) {
        $game= new Game();
        helper('cookie');
        delete_cookie('timer');
        session()->remove('gameId');
        if($game->getErgebnis($gameId)==null) {
            $data=$game->find($gameId);

            if($_SESSION['id']==$data['studentId']) {

            $session=session();
            $session->setFlashdata('score',$data['studentscore']);
            return $this->template('ErgebnisWait');
            }
            elseif ($_SESSION['id']==$data['gegnerstudentId']) {

                $session = session();
                $session->setFlashdata('score', $data['studentscore']);
                return $this->template('ErgebnisWait');
            }
        }
        else
        {
            $data=$game->getErgebnis($gameId);

            if($data['studentscore']>$data['gegnerscore'])   {
                if ($_SESSION['id']===$data['studentId']) {
                    $session=session();
                    $session->setFlashdata('score', 'Gewonnen');
                    $data1['erg']=$game->getErgebnis($gameId);
                    $studmodel = new Student();
                    $win=$studmodel->find($_SESSION['id']);
                    $data = ['vsGamesWin' => 1+$win['vsGamesWin']];
                    $studmodel->update($_SESSION['id'], $data);

                    return  $this->template('Ergebnis',$data1);
                }
                else {
                    $session=session();
                    $data1['erggeg']=$game->getErgebnis($gameId);

                    $session->setFlashdata('score', 'Verloren');
                    $studmodel = new Student();
                    $win=$studmodel->find($_SESSION['id']);
                    $data = ['vsGamesLose' => 1+$win['vsGamesLose']];
                    $studmodel->update($_SESSION['id'], $data);
                    return $this->template('Ergebnis',$data1);
                }

            }
            elseif ($data['studentscore']<$data['gegnerscore']){
                if ($_SESSION['id']===$data['studentId']) {
                    $session=session();
                    $session->setFlashdata('score', 'Verloren');
                    $data1['erg']=$game->getErgebnis($gameId);
                    $studmodel = new Student();
                    $win=$studmodel->find($_SESSION['id']);
                    $data = ['vsGamesLose' => 1+$win['vsGamesLose']];
                    $studmodel->update($_SESSION['id'], $data);
                    $this->template('Ergebnis',$data1);
                }
                else {
                    $session=session();
                    $session->setFlashdata('score', 'Gewonnen');
                    $data1['erggeg']=$game->getErgebnis($gameId);
                    $studmodel = new Student();
                    $win=$studmodel->find($_SESSION['id']);
                    $data = ['vsGamesWin' => 1+$win['vsGamesWin']];
                    $studmodel->update($_SESSION['id'], $data);
                    return $this->template('Ergebnis',$data1);
                }

            }
            elseif($data['studentscore']===$data['gegnerscore']){

                $session=session();
                $session->setFlashdata('score', 'Unentschieden');
                if ($_SESSION['id']===$data['studentId']) {
                    $data1['erg']=$game->getErgebnis($gameId);
                    return $this->template('Ergebnis',$data1);
                }
               elseif ($_SESSION['id']===$data['gegnerstudentId']) {
                   $data1['erggeg']=$game->getErgebnis($gameId);
                   return $this->template('Ergebnis',$data1);
               }

            }

        }


    }

}