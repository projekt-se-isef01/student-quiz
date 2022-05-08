<?php
namespace App\Controllers;
use App\Models\FragenkatalogModel;

class Fragenkatalog extends BaseController
{
    public function index()
    {

        $this->template('Fragenkatalog');
    }

    public function neuerKatalog() {
        $fragenkatalogmodel=new FragenkatalogModel();

    }
}
