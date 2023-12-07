<?php

namespace App\Http\Controllers;

use App\Models\PracticeTodo;
use Illuminate\Http\Request;


class TodoController extends Controller
{
    
    function store(Request $request)
    {
      
    //     // *VALIDATION
    //     $request->validate(
    //     [
    //       'title' => 'required|max:5'
    //     ],
    //     [
    //        'title.required' => 'Please enter your title'
    //     ]
    // );
    
    // *INSERT DATA IN DATABASE
    $todos = new PracticeTodo;
    $todos->title = $request->title;
    $todos->save();
    return redirect('/view',compact('todos'));
    }
   

    // *Select Query
    function view(){
       $todos = PracticeTodo::all();
       return view('homepage',compact('todos'));

    }
    function delete($id){
       $todos = PracticeTodo::find($id);
       if(!is_null($todos)){
        $todos->delete();
       }
       return back();
    }
    function forceDelete($id){
      $todos = PracticeTodo::withTrashed()->find($id);
      if(!is_null($todos)){
       $todos->forceDelete();
      }
      return back();
   }
    function restore($id){
      $todos = PracticeTodo::withTrashed()->find($id);
      if(!is_null($todos)){
       $todos->restore();
      }
      return back();
   }
    function editTodo(Request $request,$id){
      $editTodos = PracticeTodo::findorFail($id);
      return view('editTodo',compact('editTodos'));
    }
    function updateTodo(Request $request,$id){
      $updateTodo = PracticeTodo::find($id);
      $updateTodo->title = $request->title;
      $updateTodo->save();
      return redirect('/view');
    }
    // function edit(Request $request,$id){
    //   $todo = PracticeTodo::find($id);
    //   $data = compact('todos');
    //   return view('homepage')->with($data);
    // }
    // function update(Request $request,$id){
    //   $todo = PracticeTodo::find($id);
    //   $todo->title = $request->title;
    //   $todo->save();
    //   return redirect('/view');
    // }
    function TrashTodo(){
      $todos = PracticeTodo::onlyTrashed()->get();
      return view('TodoTrash',compact('todos'));
    }
}
