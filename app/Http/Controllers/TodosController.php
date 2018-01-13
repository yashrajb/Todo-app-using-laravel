<?php

namespace App\Http\Controllers;


use App\Todo;

use Session;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index() {
    	$todos = Todo::all();
    	return view('todos')->with('todos',$todos);
    }

    public function store(Request $request) {

    	$todo = new Todo;

    	$todo->todo = $request->todo;

    	$todo->save();

    	Session::flash('success', 'Your todo is created');

    	return redirect()->back();

    }


   public function Delete($id) 
   {

   	$todo = Todo::find($id);

   	$todo->delete();

   	Session::flash('success', 'Your todo is deleted');

   	return redirect()->back();

   }


   public function Update($id) {


   	$todo = Todo::find($id);

Session::flash('success', 'Your todo is updated');
 

   	return view('update')->with('todo',$todo);
   

   }

// end

    public function Save(Request $request,$id) {

    	$todo = Todo::find($id);

    	$todo->todo = $request->todo;

    	$todo->save();

    	Session::flash('success', 'Your todo is save');

    	return redirect()->route('todo');
 
    }

    public function Complete(Request $request,$id) {

    	$todo = Todo::find($id);
    	
    	$todo->completed = 1;

    	$todo->save();

    	Session::flash('success', 'Your todo is marked as completed');

    	return redirect()->back();

    }

   


}
