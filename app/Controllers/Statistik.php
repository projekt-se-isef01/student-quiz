<?php

namespace App\Controllers;

class Statistik extends BaseController
{

    public function index()
    {


        echo view('templates/header', );
        echo view('templates/menu');
        echo view('Pages/Statistik');
        echo view('templates/footer');
    }
    public function view()
    {


        echo view('Pages/Statistik');
        echo view('templates/footer');
    }

}