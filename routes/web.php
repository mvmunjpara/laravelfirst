<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\CommentContrller;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\AccessormutatorsController;

Route::get('/', function () {
    return view('welcome');
});
Route::get("student",[StudentController::class,'index']);
Route::get("show",[StudentController::class,'show'])->name('show');
Route::get('views/{id}',[StudentController::class,'views'])->name('views');
Route::get('edit/{id}',[StudentController::class,'edit'])->name('edit');
Route::put('update/{id}',[StudentController::class,'update'])->name('update');
Route::get('delete/{id}',[StudentController::class,'delete'])->name('delete');

Route::get('addstudent',[StudentController::class,'addstudent'])->name('addstudent');
Route::post('addstudent.store',[StudentController::class,'store'])->name('addstudent.store');
// Route::get("/update",[StudentController::class,'update'])->name('update');

Route::get("/deleteStudent",[StudentController::class,'deleteStudent'])->name('deleteStudent');

Route::get('/Studentjoins',[StudentController::class,'Studentjoins'])->name('Studentjoins');



// Route::get('/students',[StudentsController::class,'index']);
Route::resource('/students',StudentsController::class);
Route::resource('/contact',ContactController::class);
Route::resource('/user',UserController::class);
Route::resource('/post',PostController::class);
Route::resource('/roles',RoleController::class);
Route::resource('/customer',CustomerController::class);
Route::resource('/order',OrderController::class);
Route::resource('/country',CountryController::class);
Route::resource('/image',ImageController::class);
Route::resource('/video',VideoController::class);
Route::resource('/comment',CommentContrller::class);
Route::resource('/tag',TagController::class);
Route::resource('/test',TestController::class);
Route::resource('/photo',PhotoController::class);
Route::resource('/accessorsmutators',AccessormutatorsController::class);
Route::get('/accessorsmutators/view/{id}',[AccessormutatorsController::class,'view'])->name('accessorsmutators.view');