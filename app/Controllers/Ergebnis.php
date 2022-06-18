<?php

namespace App\Controllers;
use App\Models\Student;
use App\Models\Game;
class Ergebnis extends BaseController
{
        public function getErgebnis($gameId) {
            $game= new Game();

            if($game->getErgebnis($gameId)!==null) {

                $data=$game->getErgebnis($gameId);
                if($data['studentscore']>$data['gegnerscore'])   {
                    if ($_SESSION['id']===$data['studentId']) {
                        $session=session();
                        $session->setFlashdata('score', 'Gewonnen');
                        return  $this->template('Ergebnis');

                    }
                    else {
                        $session=session();
                        $session->setFlashdata('score', 'Verloren');
                        return $this->response->setJSON($data);
                    }

                }
                if ($data['studentscore']<$data['gegnerscore']){
                    if ($_SESSION['id']===$data['studentId']) {
                        $session=session();
                        $session->setFlashdata('score', 'Verloren');
                       return $this->response->setJSON($data);
;
                    }
                    else {
                        $session=session();
                        $session->setFlashdata('score', 'Gewonnen');
                       return $this->response->setJSON($data);
;
                    }

                }
                elseif($data['studentscore']===$data['gegnerscore']){
                    $session=session();
                    $session->setFlashdata('score', 'Unentschieden');
                   return $this->response->setJSON($data);
;
                }

            }
               else  {
                  return  $this->template('ErgebnisWait');
                }

    }
}