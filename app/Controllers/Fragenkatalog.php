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
        if(empty($data['frage'])){
            session()->setFlashdata('add','Fragenkatalog existiert nicht');
        }

        session()->set('fragenkatalogbezeichnung',$fragenkatalogbezeichnung);
        $this->template('Add',$data);
        session()->remove('add');

    }
    public function storeFrage()
    {
        $rules = [
            'frage' => [
                'label'=>'Frage',
                'rules' => 'required|max_length[128]',
                'errors'=> ['required' => 'Bitte Frage angegeben.',
                    'max_length'=>'Frage darf höchstens 128 Zeichen lang sein.',
                    ]
                ],
            'antwort1' => [
                'label'=>'antwort1',
                'rules' => 'required|max_length[128]',
                'errors'=> ['required' => 'Bitte Antwort 1 angegeben.',
                    'max_length'=>'Antwort darf höchstens 128 Zeichen lang sein.',
                ]
            ],
            'antwort2' => [
                'label'=>'antwort2',
                'rules' => 'required|max_length[128]',
                'errors'=> ['required' => 'Bitte Antwort 2 angegeben.',
                    'max_length'=>'Antwort darf höchstens 128 Zeichen lang sein.',
                ]
            ],
            'antwort3' => [
                'label'=>'antwort3',
                'rules' => 'required|max_length[128]',
                'errors'=> ['required' => 'Bitte Antwort 3 angegeben.',
                    'max_length'=>'Antwort darf höchstens 128 Zeichen lang sein.',
                ]
            ],
            'antwort4' => [
                'label'=>'antwort4',
                'rules' => 'required|max_length[128]',
                'errors'=> ['required' => 'Bitte Antwort 4 angegeben.',
                    'max_length'=>'Antwort darf höchstens 128 Zeichen lang sein.',
                ]
            ],
            'antwortLoesung' => [
                'label'=>'antwort',
                'rules' => 'required|max_length[1]|antwortValidation',
                'errors'=> [
                    'required' => 'Bitte Lösung angegeben.',
                    'max_length'=>'Lösung darf höchstens 128 Zeichen lang sein.',
                    'antwortValidation'=>'Lösung darf nur Zahlen 1-4 enthalten',

                ]
            ],
            'hinweis' => [
                'label'=>'hinweis',
                'rules' => 'max_length[128]',
                'errors'=> [
                    'max_length'=>'Hinweis darf höchstens 128 Zeichen lang sein.',
                    ]
            ],
            'Joker50501' => [
                'label'=>'joker1',
                'rules' => 'max_length[128]|jokerValidation',
                'errors'=> [
                    'max_length'=>'Joker darf höchstens 1 Zeichen lang sein.',
                    'jokerValidation'=>'Joker darf nur Zahlen 1-4 enthalten',
                    ]
                ],

            'Joker50502' => [
                'label'=>'joker12',
                'rules' => 'max_length[128]|jokerValidation',
                'errors'=> [
                    'max_length'=>'Joker darf höchstens 1 Zeichen lang sein.',
                    'jokerValidation'=>'Joker darf nur Zahlen 1-4 enthalten',
                    ]

        ]
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
        else return redirect()->back()->withInput()->with('validation',$this->validator->listErrors());

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
        $frage = new Frage();
        $datafk=$frage->getFK($frageId);
        $data ['frage'] = $frage->where('frageId',$frageId)->delete();
        return redirect()->to(site_url('Fragenkatalog/'.$datafk[0]['fragenkatalogbezeichnung']))->with('validation',$this->validator);
    }

    public function updateFrage()
    {


        $rules = [
            'frage' => [
                'label'=>'Frage',
                'rules' => 'required|max_length[128]',
                'errors'=> ['required' => 'Bitte Frage angegeben.',
                    'max_length'=>'Frage darf höchstens 128 Zeichen lang sein.',
                ]
            ],
            'antwort1' => [
                'label'=>'antwort1',
                'rules' => 'required|max_length[128]',
                'errors'=> ['required' => 'Bitte Antwort 1 angegeben.',
                    'max_length'=>'Antwort darf höchstens 128 Zeichen lang sein.',
                ]
            ],
            'antwort2' => [
                'label'=>'antwort2',
                'rules' => 'required|max_length[128]',
                'errors'=> ['required' => 'Bitte Antwort 2 angegeben.',
                    'max_length'=>'Antwort darf höchstens 128 Zeichen lang sein.',
                ]
            ],
            'antwort3' => [
                'label'=>'antwort3',
                'rules' => 'required|max_length[128]',
                'errors'=> ['required' => 'Bitte Antwort 3 angegeben.',
                    'max_length'=>'Antwort darf höchstens 128 Zeichen lang sein.',
                ]
            ],
            'antwort4' => [
                'label'=>'antwort4',
                'rules' => 'required|max_length[128]',
                'errors'=> ['required' => 'Bitte Antwort 4 angegeben.',
                    'max_length'=>'Antwort darf höchstens 128 Zeichen lang sein.',
                ]
            ],
            'antwortLoesung' => [
                'label'=>'antwort',
                'rules' => 'required|max_length[1]|antwortValidation',
                'errors'=> [
                    'required' => 'Bitte Lösung angegeben.',
                    'max_length'=>'Lösung darf höchstens 1 Zeichen lang sein.',
                    'antwortValidation'=>'Lösung darf nur Zahlen 1-4 enthalten',

                ]
            ],
            'hinweis' => [
                'label'=>'hinweis',
                'rules' => 'max_length[128]',
                'errors'=> [
                    'max_length'=>'Hinweis darf höchstens 128 Zeichen lang sein.',
                ]
            ],
            'Joker50501' => [
                'label'=>'joker1',
                'rules' => 'max_length[128]|jokerValidation',
                'errors'=> [
                    'max_length'=>'Joker darf höchstens 1 Zeichen lang sein.',
                    'jokerValidation'=>'Joker darf nur Zahlen 1-4 enthalten',
                ]
            ],

            'Joker50502' => [
                'label'=>'joker12',
                'rules' => 'max_length[128]|jokerValidation',
                'errors'=> [
                    'max_length'=>'Joker darf höchstens 1 Zeichen lang sein.',
                    'jokerValidation'=>'Joker darf nur Zahlen 1-4 enthalten',
                ]

            ]
        ];

        $frageId = $this->request->getVar('frageId');

        if ($this->validate($rules)) {
          $this->storeUpdateFrage();
            return redirect()->to(site_url('Fragenkatalog/edit/'.$frageId));


        }


        else return redirect()->back()->withInput()->with('validation',$this->validator->listErrors());

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

