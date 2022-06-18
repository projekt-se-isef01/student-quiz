<?php
namespace App\Controllers;
use App\Models\Frage;
use App\Models\FragenkatalogModel;

class Fragenkatalog extends BaseController
{

    public function index($fragenkatalogbezeichnung = null)
    {
        $fragemodel = model(Frage::class);

        $modelkatalog = new FragenkatalogModel();
        $data['fragenkatalog']=$modelkatalog->getKatalog($fragenkatalogbezeichnung);
        if(empty($data['fragenkatalog'])){
            session()->setFlashdata('fk','Fragenkatalog existiert nicht');
        }

        $data ['frage'] = $fragemodel->getFrage($fragenkatalogbezeichnung);

        $this->template('Fragenkatalog', $data);
        session()->remove('fk');
    }
    public function addFrage($fragenkatalogbezeichnung=0)
    {
        $model = new FragenkatalogModel();

        $data ['frage'] = $model->getKatalog($fragenkatalogbezeichnung);

        session()->set('fragenkatalogbezeichnung',$fragenkatalogbezeichnung);
        $this->template('Add',$data);


    }
    public function storeFrage()
    {


        $rules = [
            'frage' => 'required|max_length[128]',
            'antwort1' => 'required|max_length[128]',
            'antwort2' => 'required|max_length[128]',
            'antwort3' => 'required|max_length[128]',
            'antwort4' => 'required|max_length[128]',
            'antwortLoesung' => 'required|max_length[128]',
            'hinweis' => 'max_length[128]',
            'Joker50501' => 'max_length[1]',
            'Joker50502' => 'max_length[1]'

        ];


        if ($this->validate($rules)) {

            $data = [
                'fragenkatalogId' => $this->request->getVar('fragenkatalogId'),

                'frage' => $this->request->getVar('frage'),

                'antwort1' => $this->request->getVar('antwort1'),
                'antwort2' => $this->request->getVar('antwort2'),
                'antwort3' => $this->request->getVar('antwort3'),
                'antwort4' => $this->request->getVar('antwort4'),
                'hinweis' => ($this->request->getVar('hinweis') != FALSE) ? $this->request->getVar('hinweis') : NULL,
                'antwortLoesung' => $this->request->getVar('antwortLoesung'),
                'Joker50501' => ($this->request->getVar('Joker50501') != FALSE) ? $this->request->getVar('Joker50501') : NULL,
                'Joker50502' => ($this->request->getVar('Joker50502') != FALSE) ? $this->request->getVar('Joker50502') : NULL,

            ];
            $frage = new Frage();
            $frage->insert($data);
          return redirect()->to('Fragenkatalog/'.$_SESSION['fragenkatalogbezeichnung']);
        }
    }
    public function edit($frageId)
    {
        $frage = new Frage();
        $data ['frage'] = $frage->findFrage($frageId);
        if(empty($data['frage'])){
            session()->setFlashdata('edit','Frage existiert nicht');
        }
        $this->template('Edit', $data);
        session()->remove('edit');
    }

    public function loeschen($frageId) {
        $frage = new Frage();        $datafk=$frage->getFK($frageId);
        $data ['frage'] = $frage->where('frageId',$frageId)->delete();
        return redirect()->to(site_url('Fragenkatalog/'.$datafk[0]['fragenkatalogbezeichnung']))->with('validation',$this->validator);
    }

    public function updateFrage()
    {

        $rules = [
            'frage' => 'required|max_length[128]',
            'antwort1' => 'required|max_length[128]',
            'antwort2' => 'required|max_length[128]',
            'antwort3' => 'required|max_length[128]',
            'antwort4' => 'required|max_length[128]',
            'antwortLoesung' => 'required|max_length[128]',
            'hinweis' => 'max_length[128]',
            'Joker50501' => 'max_length[1]',
            'Joker50502' => 'max_length[1]'

        ];

        $frageId = $this->request->getVar('frageId');

        if ($this->validate($rules)) {
          $this->storeUpdateFrage();
            return redirect()->to(site_url('Fragenkatalog/edit/'.$frageId))->with('validation',$this->validator);


        }

        else {

            return redirect()->to(site_url('Fragenkatalog/edit/'.$frageId))->with('validation',$this->validator);
                }
            }
   public function storeUpdateFrage() {


       $frageId = $this->request->getVar('frageId');

       $data = [

           'frage' => $this->request->getVar('frage'),
           'antwort1' => $this->request->getVar('antwort1'),
           'antwort2' => $this->request->getVar('antwort2'),
           'antwort3' => $this->request->getVar('antwort3'),
           'antwort4' => $this->request->getVar('antwort4'),
           'hinweis' => ($this->request->getVar('hinweis')!= FALSE) ? $this->request->getVar('hinweis'):NULL,
           'antwortLoesung' => $this->request->getVar('antwortLoesung'),
           'Joker50501' => ($this->request->getVar('Joker50501')!= FALSE) ? $this->request->getVar('Joker50501'):NULL,
           'Joker50502' => ($this->request->getVar('Joker50502')!= FALSE) ? $this->request->getVar('Joker50502'):NULL,

       ];
       $frage = new Frage();
       $frage->update($frageId,$data);


   }
}

