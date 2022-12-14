<?php
use App\Http\Controllers\ProductControler;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/createpost', [PostController::class, 'postCreatePost']);
Route::get('/getposts', [PostController::class, 'getPosts']);
// Route::get('/user', [UserController::class, 'getUser']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/home', [UserController::class, 'getUser']);
    Route::get('/user', [AuthController::class, 'user']);
    Route::get('/getuser/{id}', [UserController::class, 'getUserNameById']);
    
});



// //Public routes
// // Route::resource('products', ProductControler::class);
// Route::get('/products/search/{name}', [ProductControler::class, 'search']);
// Route::get('/products', [ProductControler::class, 'index']);
// Route::get('/products/{id}', [ProductControler::class, 'show']);

// Route::post('/register', [AuthCotroller::class, 'register']);
// Route::post('/login', [AuthCotroller::class, 'login']);

// //Protected routes
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::group(['middleware' => 'auth:sanctum'], function () {
//     Route::post('/products', [ProductControler::class, 'store']);
//     Route::put('/products/{id}', [ProductControler::class, 'update']);
//     Route::delete('/products/{id}', [ProductControler::class, 'destroy']);
//     Route::post('/logout', [AuthCotroller::class, 'logout']);

// });
