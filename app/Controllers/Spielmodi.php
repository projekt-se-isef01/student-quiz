<?php

namespace App\Controllers;

class Spielmodi extends BaseController
{

    public function index()
    {


        echo view('templates/header', );
        echo view('templates/menu');
        echo view('Pages/Spielmodi');
        echo view('templates/footer');
    }
    public function view()
    {


        echo view('Pages/Spielmodi');
        echo view('templates/footer');
    }

}