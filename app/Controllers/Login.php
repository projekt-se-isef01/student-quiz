<?php
namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {


        echo view('templates/header');
        echo view('Login');
        echo view('templates/footer');
    }
}