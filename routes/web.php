<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/home',[Controllers\moveToPage::class , 'home'])->name('home');
Route::get('/about',[Controllers\moveToPage::class , 'about'])->name('about');
Route::get('/contact',[Controllers\moveToPage::class , 'contact'] )->name('contact');
Route::get('/SeeMessages',[Controllers\moveToPage::class , 'SeeMessages'] )->name('SeeMessages');


Route::post('/submit',[Controllers\moveToPage::class ,'submit'])->name('submit');
