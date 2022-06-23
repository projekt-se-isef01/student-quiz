<?php

namespace App\Controllers;
use App\Models\FragenkatalogModel;

use App\Models\Game;

class Startseite extends BaseController
{

    public function index()
    {

        $model = new Game();
        $this->template('Startseite');

        }
    }


