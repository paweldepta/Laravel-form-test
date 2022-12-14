<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\FormController;

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

// zacząłem od utworzenia /formularz więc zamiast to wszystko przenosić na stronę główną
// robię po prostu przekierowanie z / na /formularz
Route::get( '/', function () { return redirect('/formularz'); });

Route::get( '/formularz',       [FormController::class, 'show'])->name('form');
Route::get( '/formularz/list',  [FormController::class, 'list'])->name('form.list');
Route::post('/formularz',       [FormController::class, 'save'])->name('form.save');
