<?php

use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ConferencesController;


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

Route::get('/unavailable', 'App\Http\Controllers\PagesController@unavailable');



Route::get('/terms', 'App\Http\Controllers\PagesController@terms');

Route::get('/about', 'App\Http\Controllers\PagesController@about');

Route::get('/', 'App\Http\Controllers\PagesController@index')->name('index');

Route::get('/conf_covid', 'App\Http\Controllers\PagesController@covid');

Route::get('/conf_web', 'App\Http\Controllers\PagesController@web');

Route::get('/conf_stay', 'App\Http\Controllers\PagesController@stay');

Route::get('/conf_viol', 'App\Http\Controllers\PagesController@viol');

Route::get('/conf_dpsc', 'App\Http\Controllers\PagesController@dpsc');

Route::get('/conf_conversa', 'App\Http\Controllers\PagesController@conversa');

Route::get('/logout', 'App\Http\Controllers\PagesController@logout');

Route::get('/conf', 'App\Http\Controllers\PagesController@conf');

Route::get('send-email-pdf', [PDFController::class, 'index']);

Route::view('/conf_create', 'conf/conf_create');

Route::get('conf_create', [ConferencesController::class, 'imageUpload'])->name('image.upload');

Route::post('conf_create', [ConferencesController::class, 'imageUploadPost'])->name('image.upload.post');

Route::get('/users_conferences', 'App\Http\Controllers\ConferencesController@users_conferences');

Route::get('/usersEdit', 'UsersController@edit');

Route::get('/admin_conferences', 'App\Http\Controllers\UsersController@admin_conferences');

Route::get('/admin', 'App\Http\Controllers\UsersController@admin')->name('admin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Route::get('/admin/{id}', function () {
//    return view('admin');
//})->middleware(['auth']);

//Todos ativos não funciona, só dá para usar um controlador desta forma

Route::get('/profile/{id}', 'App\Http\Controllers\UsersController@show')->name('show');

Route::get('/updateUser/{id}', 'App\Http\Controllers\UsersController@updateUser');
Route::get('/updateAdmin/{id}', 'App\Http\Controllers\UsersController@updateAdmin');
Route::get('/admin/{id}', 'App\Http\Controllers\UsersController@destroy');



require __DIR__ . '/auth.php';
