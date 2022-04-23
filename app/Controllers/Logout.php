<?php

namespace App\Controllers;

class Logout extends BaseController
{
    public function index()
    {


        echo view('templates/log1');
        echo view('templates/menu');
        echo view('Pages/Logout');

    }

    public function view()
    {


        echo view('Pages/Logout');

    }

}

