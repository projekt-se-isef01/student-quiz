<?php
namespace App\Controllers;
use App\Models\FragenkatalogModel;

class Fragenkatalogerstellung extends BaseController
{
    public function index()
    {

        $this->template('Fragenkatalogerstellung');
    }

    public function neuerKatalog() {
        $fragenkatalogmodel=new FragenkatalogModel();

    }
}
