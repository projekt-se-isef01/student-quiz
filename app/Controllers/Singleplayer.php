<?php

namespace App\Controllers;

use App\Models\Frage;
use App\Models\FragenkatalogModel;
use App\Models\Student;

class Singleplayer extends BaseController
{

    public function index()
    {

        $model = new FragenkatalogModel();

        $data ['katalog'] = $model->getKatalog();

        $this->template('Singleplayerauswahl',$data);
    }
    public function getFirstFrage($fragenkatalogbezeichnung)
    {
        $model= new Frage();

        $frage['frage']=$model->getFirstFrage($fragenkatalogbezeichnung);

        $singleplayerSession = session();
        $data= [
            'fragenkatalogbezeichnung'=> $fragenkatalogbezeichnung,
            'score'=> 0
        ];
        $singleplayerSession->set($data);

        $this->template('Singleplayer',$frage);
    }
    public function getNextFrage()
    {
        $antwort= $this->request->getPost('antwort');
        $frageId= $this->request->getPost('frageId');

        $model= new Frage();

        $singleplayerSession = session();

        if ($model ->vergleichLoesung($frageId,$antwort)===true) {
            $singleplayerSession->set('score',($_SESSION['score']+1));
            $data= [
                'frage'=> $model->getNextFrage($_SESSION['fragenkatalogbezeichnung'],$frageId)
            ];

            $this->template('Singleplayer',$data);
        }
        }

}