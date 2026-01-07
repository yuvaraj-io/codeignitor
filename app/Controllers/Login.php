<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function submit()
{
    $rules = [
        'email'    => 'required|valid_email',
        'password' => 'required|min_length[6]',
    ];

    if (! $this->validate($rules)) {
        return view('login', [
            'validation' => $this->validator
        ]);
    }

    $userModel = new UserModel();

    $user = $userModel
        ->where('email', $this->request->getPost('email'))
        ->first();

    if (! $user) {
        return redirect()->to('/login')
            ->with('error', 'Invalid email or password');
    }

    if (! password_verify(
        $this->request->getPost('password'),
        $user['password']
    )) {
        return redirect()->to('/login')
            ->with('error', 'Invalid email or password');
    }

    // 👉 LOGIN HAPPENS HERE
    session()->set([
        'user_id'    => $user['id'],
        'user_email' => $user['email'],
        'isLoggedIn' => true,
    ]);

    return redirect()->to('/dashboard');
}

}
