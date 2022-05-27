<?php
namespace App\Controllers;

use App\Models\Student;

class Login extends BaseController
{
    public function index()
    {


        $this->template('Login');
    }

    public function login()
    {
        $session = session();
        $student = new Student();
        $name= $this->request->getVar('name');
        $password = $this->request->getVar('password');

        $data = $student->where('name', $name)->first();

        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'isLoggedIn' => TRUE,

                ];
                $session->set($ses_data);
               return redirect()->to ('/Startseite');

            }else{
                $session->setFlashdata('msg', 'Daten nicht korrekt.');
                return redirect()->to('/Login');
            }
        }
        else{
            $session->setFlashdata('msg', 'Daten nicht korrekt.');
            return redirect()->to('/Login');
        }
    }
    public function logout() {
        $session=session();
        $session->destroy();
        return redirect()->to('/Login');

    }
}