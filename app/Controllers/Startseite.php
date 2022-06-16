<?php

namespace App\Controllers;

use App\Models\Game;

class Startseite extends BaseController
{

    public function index()
    {
        $model = new Game();
        $status = $model->status('4');
var_dump($status);
        $this->template('Startseite');
    }


}