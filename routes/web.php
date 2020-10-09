<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
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
    return view('home');
})->name('home');

Route::get('/artistes', [ArtistController::class, 'index'])->name('artists.index');
Route::get('/artistes/{slug}', [ArtistController::class, 'show'])->name('artists.show');

Route::get('/evenements', [EventController::class, 'index'])->name('events.index');
Route::get('/evenements/{slug}', [EventController::class, 'show'])->name('events.show');

Route::get('/reservation', [BookingController::class, 'index'])->name('booking.index');
Route::post('/reservation', [BookingController::class, 'send'])->name('booking.send');

Route::get('/billetterie')->name('ticketing');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
