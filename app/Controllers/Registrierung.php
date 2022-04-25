<?php
namespace App\Controllers;



class Registrierung extends BaseController
{
    public function index() // zeigt leere Registrierungsseite
    {
        $data=[];

        $this->template('Registrierung', $data);
    }

    public function registrieren()
    {


        if ($this->request->getMethod() === 'post' && $this->validate([
                'name' => 'required|min_length[3]|max_length[128]|is_unique[student.name,id,{id}]',
                'password' => 'required|min_length[3]|max_length[128]',
                'confirmpassword' => 'matches[password]'

            ]))
            $this->store();
        else {


            $data['validation'] = $this->validator;
           $this->template('Registrierung', $data);
        }
    }



        private
        function store()
        {
            $student = new Student();
            $student->save([
                'name' => $this->request->getPost('name'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ]);

        }



}