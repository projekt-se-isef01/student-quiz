<?php


namespace App\Models;

use CodeIgniter\Model;

class Frage extends Model
{
    protected $table = 'frage';

    protected $primaryKey='frageId';

    protected $allowedFields = [

        'frage',
        'fragenkatalogId',
        'hinweis',
        'antwort1',
        'antwort2',
        'antwort3',
        'antwort4',
        'antwortLoesung',
        'Joker50501',
        'Joker50502',


    ];
    public function getFrage($fragenkatalogbezeichnung)
    {
       $results=$this
                        ->table('frage')
                        ->select('*')
                        ->join('fragenkatalog', 'fragenkatalog.fragenkatalogId = frage.fragenkatalogId')
                        ->where('fragenkatalog.fragenkatalogbezeichnung',$fragenkatalogbezeichnung);
        return $results ->get()->getResultArray();

    }
    public function getFirstFrage($fragenkatalogbezeichnung) {
       $result=$this
            ->table('frage')
            ->select('*')
            ->join('fragenkatalog', 'fragenkatalog.fragenkatalogId = frage.fragenkatalogId')
            ->where('fragenkatalog.fragenkatalogbezeichnung',$fragenkatalogbezeichnung);

       return $result->first();


    }
    public function vergleichLoesung($frageId,$antwort)
    {
        $data=$this->find($frageId);
        if ($data['antwortLoesung']===$antwort) {
            return true;
        }
        else {
            return  false;
        }

    }
    public function getNextFrage($fragenkatalogbezeichnung,$frageId)
    {
        $results=$this
            ->table('frage')
            ->select('*')
            ->join('fragenkatalog', 'fragenkatalog.fragenkatalogId = frage.fragenkatalogId')
            ->where('fragenkatalog.fragenkatalogbezeichnung',$fragenkatalogbezeichnung)
            ->where('frageId >',  $frageId);



        return $results->first();

    }
    public function findFrage($frageId) {
       return $this->where('frageId',$frageId)->first();

}
    public function findAddFrage($fragenkatalogbezeichnung)
    {

    }
}