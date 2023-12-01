<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToDoController extends Controller
{

    public function index()
    {
        $tasks = [];
        return view('create', ['tasks' => $tasks]);
    }

    public function showList()
    {
        $tasks = [];

        if (file_exists(storage_path('app/tasks.json'))) {
            $tasks = json_decode(file_get_contents(storage_path('app/tasks.json')), true);
        }
        return view('list', ['tasks' => $tasks]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $newTask = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ];

        $tasks = [];

        if (file_exists(storage_path('app/tasks.json'))) {
            $tasks = json_decode(file_get_contents(storage_path('app/tasks.json')), true);
        }

        $tasks[] = $newTask;

        file_put_contents(storage_path('app/tasks.json'), json_encode($tasks));

        return redirect('/')->with('success', 'Задача добавлена!');
    }
}
