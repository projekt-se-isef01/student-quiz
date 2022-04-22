<?php
namespace App\Controllers;

use App\Models\Student;
use function PHPUnit\Framework\matches;

class Registrierung extends BaseController
{
    public function index() // zeigt leere Registrierungsseite
    {
        helper(['form']);
        $data = [];
        echo view('templates/header');
        echo view('Registrierung', $data);
        echo view('templates/footer');
    }

    public function registrieren()

    {

        if ($this->request->getMethod() === 'post' && $this->validate([
                'name' => 'required|min_length[3]|max_length[128]',
                'password' => 'required|min_length[3]|max_length[128]',
                'confirmpassword' => 'matches[password]'

            ]))
            $this->store();
        else {


            $data['validation'] = $this->validator;
            echo view('templates/header');
            echo view('Registrierung', $data);
            echo view('templates/footer');
        }
    }


    private function store()
    {   $student= new Student();
        $student-> save([
            'name' => $this->request->getPost('name'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ]);

    }




}