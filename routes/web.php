<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\countryController;


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
Route::get('/', function () {
    return view('greeting', ['name' => 'James']);
});


Route::get('/foo', function () {
    return 'Hello World';
});

Route::get('foo', function () {
    return 'Hello World';
});

Route::get('user/{id}', function ($id) {
    return 'User ' . $id;
});

Route::get(
    'posts/{post}/comments/{comment}',
    function ($postId, $commentId) {
        //
    }
);


Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
        return 'This is user';
    });
});


Route::get('/user/{id}', [
    UserController::class,
    'show'
]);

Route::resource('photos', PhotoController::class);

Route::get('countries', [
    countryController::class,
    'index'
]);


Route::get('flights', [
    FlightController::class,
    'index'
]);
