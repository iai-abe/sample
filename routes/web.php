<?php

use Illuminate\Support\Facades\Route;
/* TaskControllerクラスを名前空間でインポートする */
use App\Http\Controllers\TaskController;

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

/* Laravel welcome Page */
Route::get('/', function () {
    return view('welcome');
});
/* index page */
Route::get("/folders/tasks", [TaskController::class,"index"])->name("tasks.index");