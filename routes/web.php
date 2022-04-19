<?php

use App\Http\Controllers\TitreController;
use App\Models\Titre;
use App\Http\Controllers\TestimonialController;
use App\Models\Testimonial;
use App\Http\Controllers\ServiceController;
use App\Models\Service;
use App\Http\Controllers\BannerController;
use App\Models\Banner;
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
    $banners = Banner::all();
    foreach ($titres as $titre) {
        $titre->description = str_replace("(","<em>", $titre->description);
        $titre->description = str_replace(")","</em>", $titre->description);
    }foreach ($banners as $banner) {
        $banner->soustitre = str_replace("(","<em>", $banner->soustitre);
        $banner->soustitre = str_replace(")","</em>", $banner->soustitre);
    }
    
    return view('welcome', compact('titres', 'testimonials', 'services','banners'));
})->name("template");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


//pour changer le chemain du login, aller dans le fichier app/provider/RouteServiceProvider.php et changer la public const HOME = '/dashboard'; en public const HOME = '/chemain de la page';
Route::get("/admin", function () {
	return view("back.admin");
})->middleware(['auth'])->name("back.index");

Route::get('/back/titres', [TitreController::class, 'index'])->name('titre.index');
Route::get('/back/titres/{id}/edit', [TitreController::class, 'edit'])->name('titre.edit');
Route::post('/back/titres/{id}/update', [TitreController::class, 'update'])->name('titre.update');
Route::resource('/back/testimonial', TestimonialController::class);
Route::resource('/back/service', ServiceController::class);

Route::get('/back/banners', [BannerController::class, 'index'])->name('banner.index');
Route::get('/back/banners/{id}/edit', [BannerController::class, 'edit'])->name('banner.edit');
Route::post('/back/banners/{id}/update', [BannerController::class, 'update'])->name('banner.update');
