<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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
// Route::get('/', [PageController::class, 'index']);
// nomor 2
//Route::get('/about', [PageController::class, 'about']);
// nomor 3
Route::get('/articles/{id}', [PageController::class, 'articles']);