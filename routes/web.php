<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users\index;
use App\Http\Controllers\users\sources;
use App\Http\Controllers\users\auth;
use Illuminate\Support\Facades\Session;
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

Route::get('/', [index::class, 'index']);
Route::get('/faq', [index::class, 'faq']);
Route::get('/contact', [index::class, 'contact']);


Route::get('/login', [auth::class, 'showLoginForm']);
Route::post('/login', [auth::class, 'login']);
Route::get('/register', [auth::class, 'showRegisterForm']);
Route::get('/register/success', [auth::class, 'showsuccessRegister']);
Route::post('/register', [auth::class, 'register']);



Route::get('/sources', [sources::class, 'index']);
Route::get('/sources/add', [sources::class, 'showSourcesForm']);
Route::post('/sources/add', [sources::class, 'addSources']);

Route::get('/logout', function (){
    Session::forget('edlManagerUserId');
    return redirect('/login');
});    