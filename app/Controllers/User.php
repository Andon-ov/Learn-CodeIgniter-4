<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class User extends Controller
{
    public function create()
    {
        $model = new UserModel();

        $data = [
            'username' => 'john_doe',
            'email'    => 'john@example.com',
            'password' => password_hash('secret_password', PASSWORD_DEFAULT),
        ];

        $model->insert($data);

        echo 'User created successfully!';
    }
}
