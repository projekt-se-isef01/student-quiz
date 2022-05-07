<?php

namespace App\Controllers;

use App\Models\Antwort;
use App\Models\Frage;
use App\Models\Fragenkatalog;

class Einzelspieler extends BaseController
{
    public function index($fragenkatalogId = null,$frageId=null)
    {


        $model = new Frage();
        $data['frage'] = $model->getFrage($fragenkatalogId);

        if (empty($data['frage'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $fragenkatalogId);
        }


        $model = new Antwort();
        $data['antwort'] = $model->getAntworten($frageId);

        if (empty($data['antwort'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' );
        }

        $this->template('Einzelspieler', $data);


    }
}