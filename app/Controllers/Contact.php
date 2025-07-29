<?php

namespace App\Controllers;
use App\Models\ContactModel;

class Contact extends BaseController
{
    public function index()
    {
        return view('contact');
    }

    public function send()
    {
        helper(['form']);
        $validation = \Config\Services::validation();

        $rules = [
            'nama'  => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'pesan' => 'required|min_length[5]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model = new ContactModel();
        $model->save([
            'nama'  => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'pesan' => $this->request->getPost('pesan'),
        ]);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}
