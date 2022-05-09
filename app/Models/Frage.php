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
    public function getFrage($fragenkatalogbezeichnung)
    {
       $results=$this
                        ->table('frage')
                        ->select('*')
                        ->join('fragenkatalog', 'fragenkatalog.fragenkatalogId = frage.fragenkatalogId')
                        ->where('fragenkatalog.fragenkatalogbezeichnung',$fragenkatalogbezeichnung);


        return $results;


    }

}