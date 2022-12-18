<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;

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

Route::get('/', [homeControl::class, 'index']);

Route::get('/redirect', [homeControl::class, 'redirectFunc']);

Route::get('/createpage', [homeControl::class, 'create']);

Route::POST('/addProject', [homeControl::class, 'addProj']);

Route::get('/listpage', [homeControl::class, 'dispList']);

Route::get('/updatelistpage', [homeControl::class, 'dispListUpd']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
