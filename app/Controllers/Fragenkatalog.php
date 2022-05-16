<?php
namespace App\Controllers;
use App\Models\Frage;

class Fragenkatalog extends BaseController
{

    public function index($fragenkatalogbezeichnung = null)
    {
        helper(['form']);
        $fragemodel = model(Frage::class);


        $data ['frage'] = $fragemodel->getFrage($fragenkatalogbezeichnung);

        $this->template('Fragenkatalog', $data);
    }


    public function edit($frageId = null)
    {
        helper(['form']);
        $frage = new Frage();
        $data ['frage'] = $frage->findFrage($frageId);

        $this->template('Edit', $data);


    }


    public function update()
    {
        helper(['form']);
        helper(['url']);
        $rules = [
            'frage' => 'required|max_length[128]',
            'antwort1' => 'required|max_length[128]',
            'antwort2' => 'required|max_length[128]',
            'antwort3' => 'required|max_length[128]',
            'antwort4' => 'required|max_length[128]',
            'antwortLoesung' => 'required|max_length[128]',
            'hinweis' => 'max_length[128]',
            '5050Joker1' => 'max_length[1]',
            '5050Joker2' => 'max_length[1]',

        ];


        if ($this->validate($rules)) {
          $this->store();

    }

        else {

            return redirect()->to(site_url('Fragenkatalog/edit/'.$frageId));
                }
            }
   public function store() {


       $frageId = $this->request->getVar('frageId');

       $data = [

           'frage' => $this->request->getVar('frage'),
           'antwort1' => $this->request->getVar('antwort1'),
           'antwort2' => $this->request->getVar('antwort2'),
           'antwort3' => $this->request->getVar('antwort3'),
           'antwort4' => $this->request->getVar('antwort4'),
           'hinweis' => $this->request->getVar('hinweis'),
           'antwortLoesung' => $this->request->getVar('antwortLoesung'),
           '5050Joker1' => $this->request->getVar('5050Joker1'),
           '5050Joker1' => $this->request->getVar('5050Joker2'),
       ];
       $frage = new Frage();
       $frage->update($frageId,$data);
   }
}

