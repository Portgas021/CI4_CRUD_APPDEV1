<?php

namespace App\Controllers;
use App\Models\UserModel; ///need to import model

class Home extends BaseController
{
    public function index(): string
    {
        $usermodel = new UserModel();
        $data['listofusers'] = $usermodel->findAll();
        return view('welcome_message',$data);
        // echo '<pre>';
        // print_r($data);
        // echo'</pre>';
        // exit;

    }
    public function store()
    {
        helper(['form','url']); 
        $usermodel = new UserModel();
        $usermodel->insert([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email')
        ]);
        return redirect()->to('/');
    }

    public function add()
    {
        return view('add_user');
    }

    public function edit($id)
    {
        $usermodel = new UserModel();
        $data['user'] = $usermodel->find($id);
        return view('edit_user', $data);
    }

    public function update($id)
    {
        helper(['form', 'url']);
        $usermodel = new UserModel();
        $usermodel->update($id, [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email')
        ]);
        return redirect()->to('/');
    }

    public function delete($id)
    {
        $usermodel = new UserModel();
        $usermodel->delete($id);
        return redirect()->to('/');
    }
}
