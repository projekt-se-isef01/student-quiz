<?php


namespace App\Models;

use CodeIgniter\Model;

class Student extends Model
{
    protected $table = 'student';

    protected $allowedFields = [
        'name',
        'password',
        'date'
    ];
}