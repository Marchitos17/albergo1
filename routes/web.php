<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

Route::get('/', function () {
    return view('home.index1');
});
Route::get('/home', [AdminController::class,'index'])->name('homea')->middleware(['auth','admin']);
Route::get('/cc', [AdminController::class,'crea_camera'])->name('create_camera')->middleware(['auth','admin']);
Route::post('/cc/u', [AdminController::class,'add_camera'])->name('add_camera')->middleware(['auth','admin']);
Route::get('/v', [AdminController::class,'mostra_camere'])->name('view_camere')->middleware(['auth','admin']);
Route::get('/d/{id}', [AdminController::class,'elimina_camera'])->name('elimina_camera')->middleware(['auth','admin']);
Route::post('/e/{id}', [AdminController::class,'edit_camera'])->name('edit_camera')->middleware(['auth','admin'])->middleware(['auth','admin']);
Route::get('/p', [AdminController::class,'prenotazioni'])->name('prenotazioni')->middleware(['auth','admin']);
Route::get('/p/e/{id}', [AdminController::class,'elimina_prenotazione'])->name('elimina_prenotazione')->middleware(['auth','admin']);
Route::get('/p/{id}', [AdminController::class,'approva_prenotazione'])->name('approva_prenotazione')->middleware(['auth','admin']);
Route::get('/p/a/{id}', [AdminController::class,'annulla_prenotazione'])->name('annulla_prenotazione')->middleware(['auth','admin']);
Route::get('/mess', [AdminController::class,'aggiungi_messaggio'])->name('aggiungi_messaggio')->middleware(['auth','admin']);
Route::get('/mmess', [AdminController::class,'messaggi'])->name('messaggi')->middleware(['auth','admin']);
 
Route::group(['middleware' => 'auth'], function() {
    Route::get('/addp{id}', [HomeController::class,'add_prenotazione'])->name('add_prenotazione');
});  
Route::post('/agg{id}', [HomeController::class,'aggiungip'])->name('aggiungip');
Route::get('/v1/{id}', [HomeController::class,'view_camera'])->name('view_camera');

require __DIR__.'/auth.php';

//SISTEMARE VIEW CAMERA