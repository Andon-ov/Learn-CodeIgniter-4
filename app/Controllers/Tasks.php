<?php

namespace App\Controllers;

class Tasks extends BaseController
{
    public function index(): string
    {

        $model = new \App\Models\TaskModel;
        $data = $model->findAll();

        // debug

        // var_dump(($data));
        // exit;

        // dd($data);
        return view("Tasks/index", ['tasks' => $data]);
    }
}
