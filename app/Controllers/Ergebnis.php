<?php

namespace App\Controllers;
use App\Models\Student;

class Ergebnis extends BaseController
{
    public function index() {

        $this->template('Ergebnis');

    }
}