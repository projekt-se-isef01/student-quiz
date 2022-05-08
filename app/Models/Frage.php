<?php


namespace App\Models;

use CodeIgniter\Model;

class Frage extends Model
{
    protected $table = 'frage';

    protected $allowedFields = [

        'frage',
        'hinweis',
        'antwort1',
        'antwort2',
        'antwort3',
        'antwort4',
        'antwort1',
        '5050Joker1',
        '5050Joker2'

    ];
    public function getFrage($fragenkatalogId=null)
    {
        $query=$this->where('fragenkatalogId',$fragenkatalogId)->findAll();
        var_dump( $query);

        return $query;
    }

}