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

// Route::get('/', function () {

//     $nombre = 'New name';

//     return view('new', ['name' => $nombre]);
// });

// Route::get('/algo/{nombre?}', function ($nombre = 'User') {

//     return 'Hola' . $nombre . '<a href="' . route('contacto') . '">Contactanos page</a>';
// });

// Route::get('contactanos', function(){
//     return view('contactanos');
// })->name('contacto');

// Set variables
$nombre = 'First name';

// Return views
Route::view('/', 'home', ['name' => $nombre])->name('home');

Route::view('about', 'about')->name('about');

Route::view('contact', 'contact')->name('contact');