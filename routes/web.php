<?php

use App\Http\Controllers\Admin\Dashboard\CareersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Dashboard\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\AdminAuth\LoginController as AdminLogin;

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

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('Admin')->group(function() {
    Route::group(['prefix' => 'control'], function(){

        Route::namespace('AdminAuth')->group(function() {
            Route::get('login', [AdminLogin::class, 'showLoginForm'])->name('admin.login');
            Route::post('login', [AdminLogin::class, 'login'])->name('admin.login.post');
            Route::get('logout', [AdminLogin::class, 'logout'])->name('admin.logout');
        });

        Route::group(['middleware' => 'auth:admin', 'namespace' => 'Dashboard', 'prefix' => 'dashboard', 'as' => 'admin.'], function(){

            Route::get('/', [AdminDashboard::class, 'index'])->name('dashboard');
            Route::get('/profile', [AdminDashboard::class, 'profile'])->name('profile');
            Route::post('profile/update', [AdminDashboard::class, 'update'])->name('profile.update');
            Route::post('profile/password', [AdminDashboard::class, 'password'])->name('profile.password');

            // Career Routes
            Route::group(['prefix' => 'careers', 'as' => 'careers.'], function(){
                Route::get('/jobs', [CareersController::class, 'jobIndex'])->name('manage-jobs');
                Route::get('/internships', [CareersController::class, 'internshipIndex'])->name('manage-internships');
//                Route::post('/save', [BrandsController::class, 'create'])->name('create');
//                Route::post('/update', [BrandsController::class, 'update'])->name('update');
//                Route::post('/deactivate', [BrandsController::class, 'deactivate'])->name('deactivate');
//                Route::post('/activate', [BrandsController::class, 'activate'])->name('activate');
//                Route::post('/delete', [BrandsController::class, 'delete'])->name('delete');
            });



        });
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
