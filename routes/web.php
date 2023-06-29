<?php

use App\Http\Controllers\Guest\PageControlle;
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

Route::get('/',[PageControlle::class, 'index'] );


Route::get('/otherpage', function () {
    $links = config('store.someLinks');
    return view('other', compact('links'));
});
