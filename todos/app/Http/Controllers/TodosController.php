<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index()
    {

        // fetch all the todo from the database
        // with model
        // all() is a static function that return all the value
        $todos = Todo::all();
        return view('todos.index')->with('todos',$todos);

    }

    public function show($todoid)
    {

        $todo = Todo::find($todoid);
        return view("todos.show")->with("todo",$todo);
    }

    public function create(){

        return view("todos.create");

    }

    public function store(){

        // validate function comes 
        // from the controller function
        $this->validate(request(),[
            'name' => 'required|min:6|max:30',
            'description' => 'required|min:6|max:100'
        ]);
        $data = request()->all();
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();

        session()->flash("success","Todo created successfully");

        return redirect("/todos");

        


    }
    public function edit($todoid){

        $todo = Todo::find($todoid);
        return view("todos.edit")->with("todo",$todo);

    }
    public function update($todoid){

        $this->validate(request(),[
            'name' => 'required|min:6|max:30',
            'description' => 'required|min:6|max:100'
        ]);

        $data = request()->all();
        $todo = Todo::find($todoid);
        $todo->name=$data['name'];
        $todo->description=$data['description'];
        $todo->save();
        return redirect("/todos");


    }

    public function destroy($todoid){

        $todo = Todo::find($todoid);
        $todo->delete();
        return redirect("/todos");

    }

    public function complete(Todo $todo){

        $todo->completed = true;
        $todo->save();

        return redirect("/todos");

    }

}
