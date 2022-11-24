<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ABCController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CacheController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\countryController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CollectionController;

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
// Route::get('/', function () {
//     return view('greeting', ['name' => 'James']);
// });


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


Route::get(
    'collect1',
    [CollectionController::class, 'collection_class']
    );
Route::get(
    'collect2',
    [CollectionController::class, 'collect_method']
    );


    Route::get(
        'src_collection',
        [CollectionController::class, 'search_data']
        );

        Route::get(
            'filter_collection',
            [CollectionController::class, 'filter_data']
            );
            Route::get(
                'sort_collection',
                [CollectionController::class, 'sort_data']
                );
                Route::get(
                    'key_collection',
                    [CollectionController::class, 'read_keys']
                    );

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/users', [UserController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('add-blog-post-form', [PostController::class, 'index']);
Route::post('store-form', [PostController::class, 'store']);
Log::debug('An informational message.');
Route::get('/test', [TestController::class,'index'])
->middleware('age');

Route::get('/test', [TestController::class, 'index'])
->middleware(['age', 'role:editor']);
Route::get('/terminate', [ABCController::class, 'index']);

Route::get('session/get', [SessionController::class, 'accessSessionData']);
Route::get('session/set', [SessionController::class, 'storeSessionData']);
Route::get('session/remove', [SessionController::class, 'deleteSessionData']);

Route::get('cache/put', [CacheController::class, 'put']);
Route::get('cache/get', [CacheController::class, 'get']);
