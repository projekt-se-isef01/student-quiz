<?php


namespace App\Models;

use CodeIgniter\Model;
use phpDocumentor\Reflection\Types\Array_;

class Antwort extends Model
{
    protected $table = 'antwort';

    protected $allowedFields = [

        'antwort',
        '5050Joker'

    ];
    public function getAntworten($frageId=null)
    {
        $db=\Config\Database::connect();
        $builder = $db->table('frage');
        $builder->select('*');
        $builder->join('antwort', 'antwort.frageId = frage.frageId');
        $builder->where('antwort.frageId',$frageId);
      $query=$builder->get();
        $results = $query->getResultArray();

        return $results;
    }

}