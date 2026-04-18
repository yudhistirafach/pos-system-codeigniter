<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\Request;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function index()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/');
        }
        
        return view('Pages/login');
    }

    public function login()
    {
        $user = new UserModel();
        $data = $this->request->getPost(); 
        $session = session();

        if (!$this->validate($user->getValidationRules())) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        
        if (!$user->where('username', $data['username'])->first()) {
            return redirect()->back()->withInput()->with('errors', ['message' => 'Username not found']);
        }

        if (!password_verify($data['password'], $user->where('username', $data['username'])->first()['password'])) {
            return redirect()->back()->withInput()->with('errors', ['message' => 'Incorrect password']);
        }

        $session->set([
            'username' => $data['username'],    
            'isLoggedIn' => true,
            'loggedInAt' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/dashboard');
        
    }   
}
