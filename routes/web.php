<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// frontend
Route::get('/',[App\Http\Controllers\FrontendController::class,'index'])->name('front.index');
Route::get('newsnevent',[App\Http\Controllers\FrontendController::class,'newsnevent'])->name('front.newsnevent');
Route::get('campuslife',[App\Http\Controllers\FrontendController::class,'campuslife'])->name('front.campuslife');
Route::get('application',[App\Http\Controllers\FrontendController::class,'application'])->name('front.application');
Route::get('academic',[App\Http\Controllers\FrontendController::class,'academic'])->name('front.academic');
Route::get('scholarship',[App\Http\Controllers\FrontendController::class,'scholarship'])->name('front.scholarship');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group (['auth', 'prefix'=>'backend','as'=>'backend.'],function(){
    Route::get('/',[App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    Route::resource('categories',App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('users',App\Http\Controllers\Admin\UserController::class);

});
