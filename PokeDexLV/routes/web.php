<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;
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
    return view('todo.index');
});
Route::post('/',[PokemonController::class,'store'])->name('todo');
Route::get('/pokemones',[PokemonController::class,'index'])->name('optener');