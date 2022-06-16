<?php

namespace App\Controllers;
use App\Models\Student;
use App\Models\Game;
class Ergebnis extends BaseController
{
        public function getErgebnis($gameId) {
            $game= new Game();
            //
            if($game->getErgebnis($gameId)===null) {
                $this->template('Ergebnis');
            }
            else{
                $data['score']=$game->find();
                $this->template('Ergebnis',$data);

            }

        $this->template('Ergebnis');

    }
}