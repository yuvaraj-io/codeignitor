<?php

namespace App\Controllers;

use App\Models\UserModel;

class TestUser extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        $users = $userModel->findAll();
        echo '<pre>';
        print_r($users);
    }
}
