<?php

namespace App\Controllers;

use App\Models\Frage;
use App\Models\FragenkatalogModel;
use App\Models\Student;
use phpDocumentor\Reflection\Location;
use function PHPUnit\Framework\returnArgument;

class Singleplayer extends BaseController
{

    public function index()
    {

        $model = new FragenkatalogModel();

        $data ['katalog'] = $model->getKatalog();

        $this->template('Singleplayerauswahl', $data);
    }

    public function getFirstFrage($fragenkatalogbezeichnung)
    {
        $model = new Frage();

        $frage['frage'] = $model->getFirstFrage($fragenkatalogbezeichnung);

        $singleplayerSession = session();
        $data = [
            'fragenkatalogbezeichnung' => $fragenkatalogbezeichnung,

        ];
        $singleplayerSession->set($data);
        session_write_close();
        $this->template('Singleplayer', $frage);
    }

    public function getNextFrage()
    {
        $antwort = $this->request->getVar('antwort');
        $frageId = $this->request->getVar('frageId');
        $score = $this->request->getVar('score');

        $model = new Frage();
        $hasNext = $model->getNextFrage($_SESSION['fragenkatalogbezeichnung'], $frageId);


            if ($model->vergleichLoesung($frageId, $antwort) === true) {
                if ($hasNext !== null) {

                    $data = [
                        'data' => $model->getNextFrage($_SESSION['fragenkatalogbezeichnung'], $frageId),
                        'success' => true,
                        'score' => (int)$score + 1,
                        'token'=> $data['token'] = csrf_hash()

                    ];
                    return $this->response->setJSON($data);
                }
                elseif ($hasNext == null) {
                   $score = (int)$score + 1;

                    return $this->response->setJSON(array('end'=>true,'score'=>$score));

                }
            } else if ($model->vergleichLoesung($frageId, $antwort) === false) {
                if ($hasNext !== null) {

                    $data = [
                    'data' => $model->getNextFrage($_SESSION['fragenkatalogbezeichnung'], $frageId),
                    'success' => true,
                    'score' => (int)$score,
                        'token'=> $data['token'] = csrf_hash()


                    ];

                return $this->response->setJSON($data);}
                else {
                    return $this->response->setJSON(array('end'=>true,'score'=>$score));

                    }
            }
        }

    }
