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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/design-page', [\App\Http\Controllers\DesignController::class, 'index'])->name('design-page');
Route::get('/services', [\App\Http\Controllers\DesignController::class, 'servicesP'])->name('servicesP');
Route::get('/ourProducts', [\App\Http\Controllers\DesignController::class, 'ourProductsP'])->name('ourProductsP');
Route::get('/contacts', [\App\Http\Controllers\DesignController::class, 'contactsP'])->name('contactsP');
Route::get('/callback', [\App\Http\Controllers\DesignController::class, 'callbackP'])->name('callbackP');

Route::get('/authorization-page', [\App\Http\Controllers\DesignController::class, 'authorizeP'])->name('authorizeP');
Route::get('/registration-page', [\App\Http\Controllers\DesignController::class, 'registrationP'])->name('registrationP');

Route::post('user/create', [\App\Http\Controllers\AuthController::class, 'create'])->name('user.create');
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');


//Route::get('/authorization-page', function (){
//    return view('authorizationPage');
//});
Route::get('/addPage', [\App\Http\Controllers\DesignController::class, 'addP'])->name('addPage');
Route::post('/add', [\App\Http\Controllers\DesignController::class, 'add'])->name('add');
Route::post('/editPage/{project}', [\App\Http\Controllers\DesignController::class, 'editP'])->name('editP');
Route::post('/edit/{project}', [\App\Http\Controllers\DesignController::class, 'edit'])->name('edit');
Route::get('/delete/{project}', [\App\Http\Controllers\DesignController::class, 'delete'])->name('delete');
