<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/',[

// 	"uses" => "NewPageController@about"

// ]);

Route::get('/',[

	"uses" => "TodosController@index",
	"as"=>"todo"

]);

Route::get('/todo/delete/{id}',[

"uses" => "TodosController@Delete",
"as" => 'todo.delete'

]); 

Route::get('/todo/update/{id}',[

"uses" => "TodosController@Update",
"as" => 'todo.update'

]); 

Route::get('/todo/complete/{id}',[

"uses" => "TodosController@Complete",
"as" => 'todo.complete'

]); 



Route::post('/todo/save/{id}',[

	"uses" => "TodosController@Save",
	"as" => "todo.Save"

]);



Route::post('/create/todo',[

	"uses" => "TodosController@store"

]);