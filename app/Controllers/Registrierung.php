<?php
namespace App\Controllers;

class Registrierung extends BaseController
{
    public function index()
    {


        echo view('templates/header');
        echo view('templates/menu');
        echo view('Pages/Registrierung');
        echo view('templates/footer');
    }

    public function view()
    {


        echo view('Pages/Registrierung');
        echo view('templates/footer');
    }
}