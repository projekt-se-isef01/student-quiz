<?php
namespace App\Controllers;
use App\Models\FragenkatalogModel;

class Fragenkatalogerstellung extends BaseController
{
    public function index()
    {
        $data=[];
        helper(['form']);
        $this->template('Fragenkatalogerstellung',$data);
    }

    public function neuerKatalog()
    {
        helper(['form']);

        $rules = [
            'fragenkatalogbezeichnung' => 'required|min_length[3]|max_length[128]|is_unique[fragenkatalog.fragenkatalogbezeichnung,fragenkatalogId,{fragenkatalogId}]'
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
