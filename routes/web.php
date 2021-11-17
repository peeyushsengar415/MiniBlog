<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here i s where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/',[HomeController::class,'show_post'])->name('home');
Route::get('/post',[PostController::class,'index'])->middleware(['auth'])->name('post_index');
Route::post('/post',[PostController::class,'create'])->middleware(['auth'])->name('post_create');

Route::get('dashboard',[DashboardController::class,'show_post'])->middleware(['auth'])->name('dashboard');
Route::get('editpost/{id}',[PostController::class,'edit'])->middleware(['auth'])->name('edit');

Route::put('/editpost/{id}',[PostController::class,'update'])->middleware(['auth'])->name('post_update');
Route::get('/deletepost/{id}',[PostController::class,'destroy'])->middleware(['auth'])->name('post_delete');

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/
require __DIR__.'/auth.php';
