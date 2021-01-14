<?php

use App\Http\Controllers\PDFController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ConferencesController;
use App\Http\Controllers\UsersController;
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

Route::get('/conf_create', [ConferencesController::class, 'conf_create'])->name('image.upload');
Route::post('/conf_create', [ConferencesController::class, 'imageUploadPost'])->name('image.upload.post');
Route::get('/users_conferences', [ConferencesController::class, 'users_conferences']);
Route::get('/conf_create', [ConferencesController::class, 'conf_create']);

Route::get('/unavailable', [PagesController::class, 'unavailable']);
Route::get('/terms', [PagesController::class, 'terms']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/conf_covid', [PagesController::class, 'covid']);
Route::get('/conf_web', [PagesController::class, 'web']);
Route::get('/conf_stay', [PagesController::class, 'stay']);
Route::get('/conf_viol', [PagesController::class, 'viol']);
Route::get('/conf_dpsc', [PagesController::class, 'dpsc']);
Route::get('/conf_conversa', [PagesController::class, 'conversa']);
Route::get('/logout', [PagesController::class, 'logout']);
Route::get('/conf', [PagesController::class, 'conf']);

Route::get('send-email-pdf', [PDFController::class, 'index']);

Route::get('/admin', [UsersController::class, 'admin'])->name('admin');
Route::get('/admin_conferences', [UsersController::class, 'admin_conferences']);
Route::get('/profile/{id}', [UsersController::class, 'show']);
Route::get('/updateUser/{id}', [UsersController::class, 'updateUser']);
Route::get('/updateAdmin/{id}', [UsersController::class, 'updateAdmin']);
Route::get('/admin/{id}', [UsersController::class, 'destroy']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
