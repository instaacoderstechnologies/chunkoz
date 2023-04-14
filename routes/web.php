<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Role\RoleController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/chat', [HomeController::class, 'chatroom']);


Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');



    Route::delete('countries/destroy', [CountryController::class, 'massDestroy'])->name('countries.massDestroy');
    Route::resource('countries', CountryController::class);

    Route::delete('states/destroy', [StateController::class, 'massDestroy'])->name('states.massDestroy');
    Route::resource('states', StateController::class);

    Route::delete('cities/destroy', [CityController::class, 'massDestroy'])->name('cities.massDestroy');
    Route::post('cities/getstates', [CityController::class, 'getStates'])->name('cities.getstates');
    Route::resource('cities', CityController::class);

    Route::get('state', [OrganizationController::class, 'fetchState'])->name('states');
    Route::get('city', [OrganizationController::class, 'fetchCity'])->name('cities');

    Route::resource('roles',RoleController::class)->except(['destroy']);

    Route::delete('users/destroy',[UserController::class,'massDestroy'])->name('users.massDestroy');
    Route::resource('users', UserController::class);


});

require __DIR__.'/auth.php';
