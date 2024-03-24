<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UsersController;

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

Route::get('/user/add', function () {
    User::create(['name'=> 'iceymoss', 'email'=>'ice_moss@163.com','password'=>bcrypt('123456')]);
    return view('welcome');
});

Route::resource('users', UsersController::class);
//相当于
//Route::get('/users', [UsersController::class, 'index'])->name('users.index');
//Route::get('/users/create', 'UsersController@create')->name('users.create');
//Route::get('/users/{user}', 'UsersController@show')->name('users.show');
//Route::post('/users', 'UsersController@store')->name('users.store');
//Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
//Route::patch('/users/{user}', 'UsersController@update')->name('users.update');
//Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy');


