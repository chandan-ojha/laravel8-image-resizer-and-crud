<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\DropezoneController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/resize-image',[ImageController::class,'resizeImage']);

Route::post('/resize-image',[ImageController::class,'resizeImageSubmit'])->name('image.resize');

Route::get('/dropzone',[DropezoneController::class,'dropzone']);

Route::post('/dropzone-store',[DropezoneController::class,'dropezoneStore'])->name('dropezone.store');

Route::get('/gallery',[GalleryController::class,'gallery']);

Route::get('/editor',[EditorController::class,'editor']);

Route::get('/add-student',[StudentController::class,'addStudent']);

Route::post('/store-student',[StudentController::class,'storeStudent'])->name('student.store');

Route::get('/all-student',[StudentController::class,'students']);

Route::get('/edit-student/{id}',[StudentController::class,'editStudent']);

Route::post('/update-student',[StudentController::class,'updateStudent'])->name('student.update');

Route::get('/delete-student/{id}',[StudentController::class,'deleteStudent']);

Route::get('/contact-us',[ContactController::class,'contact']);

Route::post('/send-message',[ContactController::class,'sendEmail'])->name('contact.send');