<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiceProvidersController;

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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/export', [DashboardController::class, 'export'])->name('export');
    Route::get('/download', [DashboardController::class, 'download'])->name('download');

    Route::get('/user/add', [UserController::class, 'add'])->name('user.add');
    Route::get('/user/list', [UserController::class, 'list'])->name('user.list');
    Route::post('/user/create', [UserController::class, 'create'])->name('user.create');
    
    Route::get('/service/list/{username?}', [ServiceProvidersController::class, 'list'])->name('service.list');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// API
Route::prefix('api')->group(function () {
    Route::post('/save/service-provider', [ServiceProvidersController::class, 'save'])->name('provider.save');
});


require __DIR__ . '/auth.php';
