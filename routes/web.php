<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


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

Route::get('Form',[StudentController::class,'Showform']);

Route::post("insert",[StudentController::class,"Insert"]);

Route::get("fetch",[StudentController::class,"Fetch"]);

Route::get("delete/{eid}",[StudentController::class,"Delete"]);

Route::get("update/{id}",[StudentController::class,"Update"]);

Route::post("edit/{id}",[StudentController::class,"Edit"]);