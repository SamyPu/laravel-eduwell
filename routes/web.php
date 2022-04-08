<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


//pour changer le chemain du login, aller dans le fichier app/provider/RouteServiceProvider.php et changer la public const HOME = '/dashboard'; en public const HOME = '/chemain de la page';
Route::get("/admin", function () {
	return view("back.admin");
})->middleware(['auth'])->name("back.index");
