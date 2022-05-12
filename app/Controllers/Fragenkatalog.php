<?php
namespace App\Controllers;
use App\Models\Frage;
use App\Models\FragenkatalogModel;
use App\Models\Student;

class Fragenkatalog extends BaseController
{
    public function index()
    {
        helper (['form']);
        {
            $model = new FragenkatalogModel();

            $data = [
                'katalog'  => $model->getKatalog(),
            ];
            $this->template('FragenkatalogÜbersicht',$data);


        }
    }

    public function view($fragenkatalogbezeichnung = null)
    {
        helper (['form']);
        $fragemodel= model(Frage::class);


        if (empty($data = [
            'frage' => $fragemodel->getFrage($fragenkatalogbezeichnung)->paginate(1),

            'pager' => $fragemodel->pager,

        ])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kann den Katalog: ' . $fragenkatalogbezeichnung .' nicht finden');
        }

       $this->template('Fragenkatalog',$data);
    }



    public function speicherFrage()
    {
        helper(['form']);

        $rules = [
            'frage' => 'required||max_length[128]',
            'antwort1' => 'required||max_length[128]',
            'antwort2' => 'required||max_length[128]',
            'antwort3' => 'required||max_length[128]',
            'antwort4' => 'required||max_length[128]',
            'antwortLoesung' => 'required||max_length[128]',
            'hinweis'       => 'max_length[128]',
            '5050Joker1' => 'max_length[1]',
            '5050Joker2' => 'max_length[1]',

        ];


        if ($this->validate($rules)) {


            $this->store();
        } else {

            $data['validation'] = $this->validator;
            $this->template('Fragenkatalog', $data);

        }

    }


    private function store()
    {
        $frage = new Frage();
        $frage->save([
            'frageId' => $this->request->getVar('frageId'),

            'frage' => $this->request->getVar('frage'),
            'antwort1' => $this->request->getVar('antwort1'),
            'antwort2' => $this->request->getVar('antwort2'),
            'antwort3' => $this->request->getVar('antwort3'),
            'antwort4' => $this->request->getVar('antwort4'),
            'hinweis'  => $this->request->getVar('hinweis'),
            '5050Joker1'=> $this->request->getVar('5050Joker1'),
             '5050Joker1' => $this->request->getVar('5050Joker2'),
]);
    }

}
