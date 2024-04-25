<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\InvitedController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('dashboard', [
            'title' => 'Dashboard',
        ]);
    });
    Route::group(['prefix' => 'auth'], function () {
        Route::get('/register', [UserController::class, 'create']);
        Route::post('/register', [UserController::class, 'store']);
        Route::get('/logout', [UserController::class, 'logout']);
    });

    Route::get('/users', [UserController::class, 'index']);
    Route::get('/user/{id}', [UserController::class, 'edit']);
    Route::put('/user/{id}', [UserController::class, 'update']);
    Route::delete('/user/{id}', [UserController::class, 'destroy']);
    Route::resource('/invitation', InvitationController::class);
});

Route::resource('invitation.invited', InvitedController::class);
Route::resource('invitation.invited.comment', CommentController::class);

Route::group(['middleware' => 'guest'], function(){
    Route::group(['prefix' => 'auth'], function () {
        Route::get('/login', [UserController::class, 'login'])->name('login');
        Route::post('/login', [UserController::class, 'auth']);
    }); 
});