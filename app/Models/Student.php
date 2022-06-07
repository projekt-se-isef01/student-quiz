<?php


namespace App\Models;

use CodeIgniter\Model;

class Student extends Model
{
    protected $table = 'student';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name',
        'password',
        'date',
        'score',
        'singleGamesGesamt',
        'vsGamesGesamt',
        'vsGamesWin'
    ];
}