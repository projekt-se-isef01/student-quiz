<?php
namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {


        echo view('templates/header');
        echo view('templates/menu');
        echo view('Pages/Login');
        echo view('templates/footer');
    }

    public function view()
    {

        ;
        echo view('Pages/Login');
        echo view('templates/footer');
    }

}

