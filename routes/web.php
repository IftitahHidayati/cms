<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Praktikum3\HomeController as UtamaController;
use App\Http\Controllers\Praktikum3\AboutUsController as AboutUsController;
use App\Http\Controllers\Praktikum3\NewsController as NewsController;
use App\Http\Controllers\ProductsController as ProductsController;

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

// Route::get('/home', [ProductsController::class, 'index']);

// Route::get('/home', function () {
//     return view('home');
// });
// PRAKTIKUM 1
// // nomor 1
// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// //nomor 2
// Route::get('/about', function () {
//     echo "2041720006 <br>";
//     echo "Iftitah Hidayati <br>";
//     echo "TI 2H";
// });

// //nomor 3
// Route::get('/articles/{id}', function ($id) {
//     echo "Ini adalah halaman artikel dengan ID: ".$id;
// });


// PRAKTIKUM 2
// nomor 1
// Route::get('/', [HomeController::class, 'index']);
// // nomor 2
// Route::get('/about', [AboutController::class, 'about']);
// // nomor 3
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// PRAKTIKUM 3
// Route::get('/', [UtamaController::class, 'index']);
// Route::get('/about', [AboutUsController::class, 'about']);
// Route::get('/news/{id}', [NewsController::class, 'news']);
// Route::prefix('admin')->group(function () {   
// Route::get('/users', function () {         // Matches The "/admin/users" URL     }); }); 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('articles', ArticleController::class);
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
