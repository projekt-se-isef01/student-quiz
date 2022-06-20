<?php
namespace App\Controllers;
use App\Models\FragenkatalogModel;

class Fragenkatalogerstellung extends BaseController
{
    public function index()
    {
        $data=[];
        $this->template('Fragenkatalogerstellung',$data);
    }

    public function neuerKatalog()
    {

        $rules = [
            'fragenkatalogbezeichnung' => [
                'label'=>'fragenkatalogbezeichnung',
                'rules'=> 'required|min_length[3]|max_length[128]|is_unique[fragenkatalog.fragenkatalogbezeichnung,fragenkatalogId,{fragenkatalogId}]',
                'errors'=> ['required' => 'Bitte Fragenkatalogname angegeben.',
                    'max_length'=>'Frage darf höchstens 128 Zeichen lang sein.',
                    'is_unique'=>'Fragenkatalogname bereits vergeben.',
                    'min_length'=>'Fragenkatalog darf höchstens 128 Zeichen lang sein.',

                ]
            ],
            ];


        if ($this->validate($rules)) {


            $this->store();
        } else {

            $data['validation'] = $this->validator;
            $this->template('Fragenkatalogerstellung', $data);

        }
    }
    private function store()
    {
        $fragenkatalogmodel=new FragenkatalogModel();
        $fragenkatalogmodel->save([
            'fragenkatalogbezeichnung' => $this->request->getVar('fragenkatalogbezeichnung')
        ]);

    }


}
