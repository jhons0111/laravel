<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\coursesController;
use App\Http\Controllers\generalController;

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

//Home page
Route::get('/', [homeController::class, 'index'])->name('home');

//General pages
Route::controller(generalController::class)->group(function(){
    Route::get('about', 'aboutUs');
    Route::get('contact', 'contactUs');
});

//Courses pages
Route::controller(coursesController::class)->group(function(){
    Route::get('cursos', 'allCourses');
    Route::get('cursos/crear', 'createCourses');
    Route::get('cursos/{course}', 'theCourse');
});