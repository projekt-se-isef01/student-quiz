<?php


namespace App\Models;

use CodeIgniter\Model;

class FragenkatalogModel extends Model
{
    protected $table = 'fragenkatalog';

    protected $allowedFields = [
        'fragenkatalogbezeichnung'
    ];
    public function getKatalog($fragenkatalogbezeichnung=false) {

        if ($fragenkatalogbezeichnung === false) {
            return $this->findAll();
        }

        return $this->where(['fragenkatalogbezeichnung' => $fragenkatalogbezeichnung])->first();
    }

}