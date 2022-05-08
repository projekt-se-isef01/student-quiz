<?php


namespace App\Models;

use CodeIgniter\Model;

class FragenkatalogModel extends Model
{
    protected $table = 'fragenkatalog';

    protected $allowedFields = [
        'fragenkatalogbezeichnung'
    ];
    public function getKatalog() {
        return $this->findAll();
    }
}