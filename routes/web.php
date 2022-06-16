<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\UsersTariffsController;
use App\Models\User;

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

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['middleware' => 'auth'], function () {

    Route::group([
        'prefix' => 'admin',
        'middleware' => 'is_admin',
        'as' => 'admin.' //если name user_tariff.store, то он станет = admin.user_tariff.store
    ], function () {
        Route::get('users', [UsersController::class, 'index'])->name('users');
        Route::get('users/tariffs', [UsersTariffsController::class, 'index'])->name('users_tariffs');
        Route::get('users/tariffs/create', [UsersTariffsController::class, 'create'])->name('users_tariffs.create');
        Route::post('users/tariffs', [UsersTariffsController::class, 'store'])->name('users_tariff.store');
    });

    Route::group(['prefix' => 'user', 'as' => 'user.'], function() {
        Route::get('dashboard', function () {return view('dashboard');})->name('dashboard');
    });

});
