<?php

namespace App\Controllers;

use App\Models\Student;

class Account extends BaseController
{

    public function index()
    {
        $model=new Student();
        $data=[
            'student'=>$model->find($_SESSION['id'])
        ];



        $this->template('Account',$data);
    }
    public function loeschen() {
        $model=new Student();
        $model->delete($_SESSION['id']);
        return redirect()->to('/');
    }
}