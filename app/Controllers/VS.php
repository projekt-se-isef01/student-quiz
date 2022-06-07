<?php

namespace App\Controllers;

use App\Models\Frage;
use App\Models\Game;
use App\Models\FragenkatalogModel;
use App\Models\Student;

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
    public function start($gameId) {
         $model = new Game();
         $fmodel= new Frage;
        $prove=$model->getPlayers($gameId);
        $data['frage']=$model->getFragen($gameId);
        if($prove==null) {
            $this->template('VS',$data);
        }
    }
    public function endGame(){
        $frageId=$this->request->getVar('frageId');
        $antwort=$this->request->getVar('antwort');
        $score=0;

        for ($i = 0; $i < count($frageId); $i++) {
                $fId=$frageId[$i];
                $ant=$antwort[$fId];
                $model=new Frage();
                if($model->vergleichLoesung($fId,$ant)===true) {
                    $score=$score+1;

                }
        }
        $s['score']=$score;
        $studmodel= new Student();
        $studmodel->update($_SESSION['id'],$s);

        $this->template('Ergebnis',$s);

    }
}