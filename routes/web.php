<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AlbumController;
use App\Models\Album;

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

Route::get('/', [MainController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::resource('/albums', AlbumController::class)->only(['index', 'show']);
});
Route::resource('/albums', AlbumController::class)->only(['create', 'store']);

