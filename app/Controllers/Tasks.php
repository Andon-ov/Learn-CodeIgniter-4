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
    public function show($id)
    {
        $model = new \App\Models\TaskModel;
        $task = $model->find($id);
        return view('Tasks/show', [
            'task' => $task
        ]);
    }

    public function new()
    {
        return view('Tasks/new');
    }

    public function create()
    {
        $model = new \App\Models\TaskModel;

        $result = $model->insert(['description' => $this->request->getPost("description")]);

        if ($result === false) {
            return redirect()->back()
                ->with('errors', $model->errors());
        } else {

            return redirect()->to("/tasks/show/$result");
        }
    }
}
