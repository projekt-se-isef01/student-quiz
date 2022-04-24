<?php

namespace App\Controllers;

class Account extends BaseController
{

    public function index()
    {


        echo view('templates/header', );
        echo view('templates/menu');
        echo view('Pages/Account');
        echo view('templates/footer');
    }
    public function view()
    {


        echo view('Pages/Account');
        echo view('templates/footer');
    }

}