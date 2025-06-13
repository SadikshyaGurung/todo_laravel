<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TodoRequest;
use App\Models\Todo;


class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::latest()->paginate(2);

        return view('home', compact('todos'));//['todos'=> $todos]);//
    }
     public function add()
    {
        return view('add');
    }

    public function store(TodoRequest $request)
    {
        
        $validated = $request->validated();

        if($request->hasFile('image'))
        {
            $filename = time() . '.' . $request->file('image')->extension();
            $path=$request->file('image')->store('images','public');
            $validated['image'] = 'storage/' . $path;
        }

        Todo::create($validated);
        return redirect('/');

    }

    public function update(TodoRequest $request){
        $validated = $request->validated();
        if ($request->hasfile('image')){
            $path=$request->file('image')->store('images','public');
            $validated['image'] = 'storage/' . $path;

        }

        Todo::where('id',$request['id'])->update($validated);

        return redirect('/');
    }

    public function updateView($id)
    {
        $todo= Todo::where('id',$id)->get();

        return view('update',['todo'=> $todo[0]]);
    }
    public function destroy($id)
    {
        Todo::where('id',$id)->delete();

        return back();
    }
}
