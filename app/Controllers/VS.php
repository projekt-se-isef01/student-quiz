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

        $model = new Game();
        $data=
        ['spiel'=>$model->findAll()
        ];

        $this->template('Spielauswahl',$data);

    }
    public function addGame () {
        $modelkatalog = new FragenkatalogModel();
        $data['katalog']=$modelkatalog->getKatalog();
        $this->template('Spielerstellung',$data);

    }
    public function startWait($gameId) {
        $model = new Game();
        $ersteller=$model->find($gameId);
        if($ersteller['studentId']==$_SESSION['id']) {
            $this->template('Warten');

            }
        else {
            $upgegner= [
                'gegnerstudentId' => $_SESSION['id'],
            ];
            $model->update($gameId, $upgegner);
            $data['frage'] = $model->getFragen($gameId);
            $this->template('VS',$data);
        }
}
    public function wait($gameId)
    {
        $model = new Game();
        $status = $model->find($gameId);
        $prove = $model->getPlayers($gameId);
        var_dump($prove);
        if ($prove !== null && $status['status'] == 'inaktiv') {
            $upstatus = [
                'status' => 'aktiv',
            ];
            $model->update($gameId, $upstatus);
            $data['frage'] = $model->getFragen($gameId);
            return $this->template('VS', $data);

        } else {
       $this->template('Warten', );
    }

    }

    public function endGame(){
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
            $s['score'] = $score;

            var_dump($s['score']);
            $studmodel = new Student();
            $getrec = $studmodel->find($_SESSION['id']);
            $getScore = $getrec['score'];

            $scoregesamt = (int)$getScore + (int)$s;
            $data = ['score' => $scoregesamt,
                'vsGamesGesamt' => (int)$getrec['vsGamesGesamt'] + 1
            ];
            $studmodel->update($_SESSION['id'], $data);
            $session=session();
            $session->setFlashdata('message', $score);
            return redirect()->to('/Ergebnis');
        }

    }
}