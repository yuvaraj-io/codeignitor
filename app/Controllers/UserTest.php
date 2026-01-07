<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserTest extends BaseController
{
    public function create()
    {
        $userModel = new UserModel();

        $data = [
            'name'     => 'Yuvaraj',
            'email'    => 'yuvaraj@test.com',
            'password' => password_hash('123456', PASSWORD_DEFAULT),
        ];

        $userModel->insert($data);

        echo "User inserted successfully";
    }
}
