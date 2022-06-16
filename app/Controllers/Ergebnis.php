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
                $this->template('ErgebnisWait');
            }
            else
                {

                $data=$game->getErgebnis($gameId);
                if($data['studentscore']>$data['gegnerscore'])   {
                    if ($_SESSION['id']===$data['studentId']) {
                        $session=session();
                        $session->setFlashdata('score', 'Gewonnen');
                        $this->template('Ergebnis');
                    }
                    else {
                        $session=session();
                        $session->setFlashdata('score', 'Verloren');
                        $this->template('Ergebnis');
                    }

                }
                elseif ($data['studentscore']<$data['gegnerscore']){
                    if ($_SESSION['id']===$data['studentId']) {
                        $session=session();
                        $session->setFlashdata('score', 'Verloren');
                        $this->template('Ergebnis');
                    }
                    else {
                        $session=session();
                        $session->setFlashdata('score', 'Gewonnen');
                        $this->template('Ergebnis');
                    }

                }
                elseif($data['studentscore']===$data['gegnerscore']){
                    $session=session();
                    $session->setFlashdata('score', 'Unentschieden');
                    $this->template('Ergebnis');
                }

            }


    }
}