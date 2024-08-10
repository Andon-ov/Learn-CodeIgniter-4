<?php

namespace App\Controllers;

class Tasks extends BaseController
{
    public function index(): string
    {

        $data = [
            ['id' => 1, 'description' => 'First task'],
            ['id' => 2, 'description' => 'Second task'],
            ['id' => 3, 'description' => 'Three task'],


        ];
        return view("Tasks/index", ['tasks' => $data]);
    }
}
