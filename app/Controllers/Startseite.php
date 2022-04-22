<?php

namespace App\Controllers;

class Startseite extends BaseController
{

    public function index()
    {


        echo view('templates/header', );
        echo view('Startseite');
        echo view('templates/footer');
    }
    public function view()
    {

;
        echo view('Startseite');
        echo view('templates/footer');
    }

}