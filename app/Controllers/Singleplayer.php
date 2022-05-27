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

        $this->template('Singleplayerauswahl', $data);
    }

    public function getFirstFrage($fragenkatalogbezeichnung)
    {
        $model = new Frage();

        $frage['frage'] = $model->getFirstFrage($fragenkatalogbezeichnung);

        $singleplayerSession = session();
        $data = [
            'fragenkatalogbezeichnung' => $fragenkatalogbezeichnung,
            'score' => 0
        ];
        $singleplayerSession->set($data);

        $this->template('Singleplayer', $frage);
    }

    public function getNextFrage()
    {
        $antwort = $this->request->getVar('antwort');
        $frageId = $this->request->getVar('frageId');

        $model = new Frage();

        $singleplayerSession = session();

        if ($model->vergleichLoesung($frageId, $antwort) === true) {
            $singleplayerSession->set('score', ($_SESSION['score'] + 1));
            $data = [
                'data' => $model->getNextFrage($_SESSION['fragenkatalogbezeichnung'], $frageId),
                'success' => true,
                'msg' => "Success"
            ];

            return $this->response->setJSON($data);
        } else if (!$model->vergleichLoesung($frageId, $antwort) === true) {
            $data = [
                'data' => $model->getNextFrage($_SESSION['fragenkatalogbezeichnung'], $frageId),
                'success' => true,
                'msg' => "Success"
            ];

            return $this->response->setJSON($data);
        }

    }
}