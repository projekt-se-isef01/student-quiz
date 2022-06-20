<?php
namespace App\Controllers;
use App\Models\Student;
use function PHPUnit\Framework\returnCallback;

class Registrierung extends BaseController
{
    public function index() // zeigt leere Registrierungsseite
    {
        $data=[];
        $this->template('Registrierung', $data);
    }

    public function registrieren()
    {
        $rules=[
            'name'=> [
                'label'=>'Name',
                'rules' => 'required|min_length[3]|max_length[128]|is_unique[student.name,id,{id}]',
                'errors'=> ['required' => 'Bitte Name angegeben.',
                             'min_length' => 'Name muss mindestens 3 Zeichen lang sein.',
                            'max_length'=>'Name darf höchstens 128 Zeichen lang sein.',
                            'is_unique' => 'Name bereits vergeben'
                    ]
                 ],
            'password'=>[
                'label'=>'password',
                'rules' => 'required|min_length[3]|max_length[128]',
                'errors'=> ['required' => 'Bitte Passwort angegeben.',
                    'min_length' => 'Passwort muss mindestens 3 Zeichen lang sein.',
                    'max_length'=>'Passwort darf höchstens 128 Zeichen lang sein.',
                ]
            ],
            'confirmpassword' => [
                 'label'=>'password',
                 'rules' => 'matches[password]',
                 'errors'=> ['matches' => 'Passwort stimmt nicht überein.',

    ]
        ],


];


         if ($this->validate($rules)) {


             $this->store();
             return redirect()->to('/Login');

         }

        else {

            $data['validation'] = $this->validator;
            $this->template( 'Registrierung', $data);

        }

    }




    private function store()
    {
        $student = new Student();
        $student->save([
            'name' => $this->request->getPost('name'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ]);

    }



}