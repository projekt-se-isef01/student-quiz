<?php


namespace App\Models;

use CodeIgniter\Model;

class Fragenkatalog extends Model
{
    protected $table = 'fragenkatalog';

    protected $allowedFields = [
        'fragenkatalogbezeichnung'
    ];
}