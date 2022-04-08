<?php

use App\Http\Controllers\TitreController;
use App\Models\Titre;
use App\Http\Controllers\TestimonialController;
use App\Models\Testimonial;
use App\Http\Controllers\ServiceController;
use App\Models\Service;
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
    $titres = Titre::all();
    $testimonials = Testimonial::all();
    $services = Service::all();
    foreach ($titres as $titre) {
        $titre->description = str_replace("(","<em>", $titre->description);
        $titre->description = str_replace(")","</em>", $titre->description);
    }
    
    return view('welcome', compact('titres', 'testimonials', 'services'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get("/admin", function () {
	return view("back.admin");
})->name("back.index");

Route::get('/back/titres', [TitreController::class, 'index'])->name('titre.index');
Route::get('/back/titres/{id}/edit', [TitreController::class, 'edit'])->name('titre.edit');
Route::post('/back/titres/{id}/update', [TitreController::class, 'update'])->name('titre.update');
Route::resource('/back/testimonial', TestimonialController::class);
Route::resource('/back/service', ServiceController::class);
