<?php

namespace App\Controllers;
use App\Models\Frage;
use App\Models\FragenkatalogModel;
use App\Models\Student;
use App\Models\Game;
class Spielerstellung extends BaseController
{
        public function index( ){
                $modelkatalog = new FragenkatalogModel();
                $data['katalog']=$modelkatalog->getKatalog();
                $this->template('Spielerstellung',$data);
        }
        public function spielErstellen() {
            $rules = [
                'gameName' => 'required|min_length[3]|max_length[128]|is_unique[vs.gameName,gameId,{gameId}]',
                'fragenkatalogId'=>'required'

            ];
            $rules = [
                'fragenkatalogId' => [
                    'label'=>'fragenkatalogId',
                    'rules'=> 'required',
                    'errors'=> ['required' => 'Bitte Fragenkatalogname angegeben.',

                    ]
                ],
                'gameName' => [
                    'label'=>'gameName',
                    'rules'=> 'required|min_length[3]|max_length[128]|is_unique[vs.gameName,gameId,{gameId}]',
                    'errors'=> [
                        'required' => 'Bitte Spielname angegeben.',
                        'max_length'=>'Spielname darf höchstens 128 Zeichen lang sein.',
                        'is_unique'=>'Spielname bereits vergeben.',
                        'min_length'=>'Spielname darf höchstens 128 Zeichen lang sein.',


                    ]
                ],
            ];

            if ($this->validate($rules)) {

                $data = [

                    'gameName' => $this->request->getVar('gameName'),
                    'studentId' =>$_SESSION['id'],
                    'fragenkatalogId'=> $this->request->getVar('fragenkatalogId'),

                ];
                $game= new Game();
                $game->insert($data);
                $gId=$game->where('gameName',$this->request->getVar('gameName'))->first();
                return redirect()->to('/VS/'.$gId['gameId']);
            }
            else {
                session()
                    ->setFlashdata('error','Spielname bereits vergeben');

             return redirect()->to('/Spielerstellung');

            }
        }
}