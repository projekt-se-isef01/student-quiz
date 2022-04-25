<?php

namespace App\Controllers;

class Startseite extends BaseController
{

    public function index()
    {


        $this->template('Startseite');
    }


}