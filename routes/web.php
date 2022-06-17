<?php

use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;


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

Route::get('/teams', [TeamController::class, 'a1'])->name('teams');
Route::get('/insertteam', [TeamController::class, 'a2'])->name('insertteam');
Route::post('/insertdata', [TeamController::class, 'a3'])->name('insertdata');

Route::get('/showdata/{id}', [TeamController::class, 'a4'])->name('showdata');
Route::post('/updatedata/{id}', [TeamController::class, 'a5'])->name('updatedata');

Route::get('/deletedata/{id}', [TeamController::class, 'a6'])->name('deletedata');
