<?php

namespace App\Controllers;

use App\Models\Antwort;
use App\Models\Frage;
use App\Models\Fragenkatalog;

class Einzelspieler extends BaseController
{
    public function index($fragenkatalogId = null)
    {


        $model = new Frage();
        $data['frage'] = $model->getFrage($fragenkatalogId);

        if (empty($data['frage'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $fragenkatalogId);
        }



        $this->template('Einzelspieler', $data);


    }
}