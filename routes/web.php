<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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


Route::get('/todo',function(){
    return view('homepage');
});
Route::post('/store',[TodoController::class,'store'])->name('store');
Route::get('/view',[TodoController::class,'view'])->name('view');
Route::get('/delete/{id}',[TodoController::class,'delete'])->name('delete');
Route::get('/force-delete/{id}',[TodoController::class,'forceDelete'])->name('force-delete');
Route::get('/restore/{id}',[TodoController::class,'restore'])->name('restore');
// Route::get('edit/{id}',[TodoController::class,'edit'])->name('edit');
// Route::post('update/{id}',[TodoController::class,'update'])->name('update');
Route::get('/edit/{id}',[TodoController::class,'editTodo'])->name('edit');
Route::post('/update/{id}',[TodoController::class,'updateTodo'])->name('update');

// Trash
Route::get('/view/trash',[TodoController::class,'TrashTodo'])->name('trash');

