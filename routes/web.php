<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\MenuController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/* USER */
Route::get('/',[HomeController::class,'home'] )->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/menu',[HomeController::class,'menu'])->name('menu');
Route::get('/reservation',[HomeController::class,'reservation'])->name('reservation');
Route::post('/store-reservation',[HomeController::class,'store_reservation'])->name('store_reservation');

/* AUTH */
Route::middleware('auth')->group(function(){

/* HOME */
    Route::get('/redirect',[HomeController::class,'redirect'] )->name('redirect');

/* ADMIN */
    Route::get('/authors',[AdminController::class,'showAuthors'])->name('authors');
    Route::post('/delete/{id}',[AdminController::class,'deleteAuthors'])->name('delete-authors');
    Route::get('/createAuthor',[AdminController::class,'createAuthor'])->name('createAuthor');
    Route::post('/storeAuthor',[AdminController::class,'storeAuthor'])->name('storeAuthor');

/* MENU */
    Route::get('/showMenu',[MenuController::class,'menu'])->name('show-menu');
    Route::get('/addMenu',[MenuController::class,'addMenu'])->name('add-menu');
    Route::post('/insertMenu',[MenuController::class,'insertMenu'])->name('insert-menu');
    Route::post('/active-item/{id}',[MenuController::class,'active'])->name('active-item');
    Route::get('/update-item/{id}',[MenuController::class,'update'])->name('update-item');
    Route::post('/edit-item/{id}',[MenuController::class,'edit'])->name('edit-item');

/* RESERVATION */
    Route::get('/viewReservation',[ReservationController::class, 'index'])->name('viewReservation');
    Route::post('/confirm/{id}', [ReservationController::class, 'confirm']);

});



/* jetstream auth */
Route::middleware(['auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
