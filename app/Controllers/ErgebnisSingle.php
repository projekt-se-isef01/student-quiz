<?php

namespace App\Controllers;
use App\Models\Student;

class ErgebnisSingle extends BaseController
{
    public function index()
    {
        helper('cookie');
        $s=get_cookie('score');

        $data['score']=$s;

        unset($_SESSION['fragenkatalogbezeichnung']);
        $model=new Student();
        $getrec=$model->find($_SESSION['id']);
        $getScore=$getrec['score'];
        $scoregesamt=(int)$getScore+(int)$s;
        $data2=['score'=>$scoregesamt,
                'singleGamesGesamt' =>(int)$getrec['singleGamesGesamt']+1
        ];

            $model->update($_SESSION['id'], $data2);

        $this->template('ErgebnisSingle',$data);

        delete_cookie('score');
        delete_cookie('hinweis');
        delete_cookie('joker');
    }
}