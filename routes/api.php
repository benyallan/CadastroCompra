<?php

use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\ClientController;
use App\Http\Controllers\api\OrderController;
use App\Http\Controllers\api\PermissionController;
use App\Http\Controllers\api\ProductController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//API route for register new user
Route::post('/register', [AuthController::class, 'register']);

//API route for login user
Route::post('/login', [AuthController::class, 'login']);

//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });

    // Manage permissions
    Route::post(
        'permission/sync', [PermissionController::class, 'sync']
    )->name('permission.sync');
    Route::post(
        'permission/attach', [PermissionController::class, 'attach']
    )->name('permission.attach');
    Route::post(
        'permission/detach', [PermissionController::class, 'detach']
    )->name('permission.detach');

    // Routes for manage users
    Route::apiResource('user', UserController::class);

    // Routes for manage clients
    Route::apiResource('client', ClientController::class);
    Route::delete(
        'client', [ClientController::class, 'destroyAll']
    )->name('client.deleteAll');

    // Routes for manage products
    Route::apiResource('product', ProductController::class);
    Route::delete(
        'product', [ProductController::class, 'destroyAll']
    )->name('product.deleteAll');

    // Routes for manage orders
    Route::apiResource('order', OrderController::class);
    Route::delete(
        'order', [OrderController::class, 'destroyAll']
    )->name('order.deleteAll');

    // API route for logout user
    Route::post(
        '/logout', [AuthController::class, 'logout']
    );
});
