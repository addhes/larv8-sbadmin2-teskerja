<?php

use App\Http\Controllers\CatalogLaguController;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/catalog', [CatalogLaguController::class, 'index'])->name('catlog.index');
Route::get('/catalog/tambah', [CatalogLaguController::class, 'create'])->name('catlog.create');
Route::post('/catalog/tambah', 'CatalogLaguController@store')->name('catlog.store');
Route::get('/catalog/{id}', 'CatalogLaguController@edit')->name('catlog.edit');
Route::put('/catalog/{catalogLagu}', 'CatalogLaguController@update')->name('catlog.update');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');
