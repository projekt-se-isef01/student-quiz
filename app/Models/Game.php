<?php

namespace App\Models;

use CodeIgniter\Model;

class Game extends Model
{
    protected $table = 'vs';
    protected $primaryKey = 'gameId';

    protected $allowedFields = [
        'gameName',
        'studentId',
        'fragenkatalogId',
        'gegnerstudentId',
        'status',
        'gegnerscore',
        'studentscore' ,];

    public function getPlayers($gameId)
    {
        $result = $this->where('gameId', $gameId)->where('gegnerstudentId !=', null)->first();

        return $result;
    }

    public function getFragen($gameId)
    {
        $fragenkataloId = $this
            ->table('vs')
            ->select('fragenkatalogId')
            ->where('gameId', $gameId)
            ->get()->getRow();
        if (isset($fragenkataloId)) {
            foreach ($fragenkataloId as $row) {
                $Id = $row; //complete row

            }

            return $this->db->
            table('frage')->select('*')
                ->where(' fragenkatalogId', $Id)->get()->getResultArray();
        }
    }
public function status($gameId){
    $result = $this->where('gameId', $gameId)->where('status !=', null)->first();
    return $result;
}
    public function getErgebnis($gameId)
    {
        $result = $this->where('gameId', $gameId)->where('gegnerscore !=', null)->where('studentscorescore !=', null)->first();

        return $result;
    }
}