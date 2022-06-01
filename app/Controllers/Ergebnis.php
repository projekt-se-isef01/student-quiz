<?php

namespace App\Controllers;
class Ergebnis extends BaseController
{
    public function index()
    {
        helper('cookie');
        $s=get_cookie('score');
        $data['s']=$s;
            unset($_SESSION['fragenkatalogbezeichnung']);
        $this->template('Ergebnis',$data);
        delete_cookie('score');
    }
}