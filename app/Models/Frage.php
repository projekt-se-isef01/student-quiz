<?php


namespace App\Models;

use CodeIgniter\Model;

class Frage extends Model
{
    protected $table = 'frage';

    protected $primaryKey='frageId';

    protected $allowedFields = [

        'frage',
        'hinweis',
        'antwort1',
        'antwort2',
        'antwort3',
        'antwort4',
        'antwortLoesung',
        '5050Joker1',
        '5050Joker2',


    ];
    public function getFrage($fragenkatalogbezeichnung)
    {
       $results=$this
                        ->table('frage')
                        ->select('*')
                        ->join('fragenkatalog', 'fragenkatalog.fragenkatalogId = frage.fragenkatalogId')
                        ->where('fragenkatalog.fragenkatalogbezeichnung',$fragenkatalogbezeichnung);
        return $results->get()->getResultArray();

    }
    public function findFrage($frageId) {
       return $this->where('frageId',$frageId)->first();

}
}