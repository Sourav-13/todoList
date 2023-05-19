<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [TodoListController::class, 'index']);

/*
Route::post('/saveItem', function () {
    return view('welcome');
})->name("saveItem");
*/
Route::post('/saveItemRoute', [TodoListController::class, 'saveItem'])->name("saveItem");