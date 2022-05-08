<?php

namespace App\Controllers;

class Fragenerstellung  extends BaseController
{
    public function index() // zeigt leere Registrierungsseite
    {
        $this->template('Fragenerstellung');
    }

}