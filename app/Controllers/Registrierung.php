<?php
namespace App\Controllers;

class Registrierung extends BaseController
{
    public function index()
    {


        echo view('templates/header');
        echo view('Pages/Registrierung');
        echo view('templates/footer');
    }
}