<?php
namespace App\Controllers;

class Login extends BaseController
{
    public function view()
    {


        echo view('templates/header');
        echo view('Pages/Login');
        echo view('templates/footer');
    }
}