<?php


namespace App\Models;

use CodeIgniter\Model;

class Frage extends Model
{
    protected $table = 'frage';

    protected $allowedFields = [

        'frage',
        'hinweis'

    ];
    public function getFrage($fragenkatalogId=null)
    {
        $query=$this->where('fragenkatalogId',$fragenkatalogId)->findAll();
        var_dump( $query);

        return $query;
    }

}