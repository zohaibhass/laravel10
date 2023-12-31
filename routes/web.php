<?php

use App\Http\Controllers\AvailabilityController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\controllers\UserController;
use App\Models\Availability;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;







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
//----------------routes for frontend------------------

Route::get('/',[ServiceController::class, 'homedata'])->name('/');
Route::get('/menu',[CategoryController::class, 'showmenu'])->name('show_menu');
Route::get('/team',[MemberController::class, 'showmembers'])->name('show_members');
Route::get('/service',[ServiceController::class, 'showservices'])->name('show_services');
Route::get('/availability',[AvailabilityController::class, 'showavailability'])->name('show_availability');

Route::get('about_page', function () {
    return view('about');
});

Route::get('contact_page', function () {
    return view('contact');
});




//----------------routes for dashboard------------------

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin\dashboard');
    })->name('dashboard');

    Route::resource('services', ServiceController::class);

    Route::resource('Menus', MenuController::class);

    Route::resource('categories', CategoryController::class);

    Route::resource('Members',MemberController::class);

    Route::resource('Availabilities',AvailabilityController::class);

});

require __DIR__.'/auth.php';

Auth::routes();



//----------------routes for login------------------


Route::get('userlogin',[UserController::class,'showLoginForm'])->name('LoginForm');
Route::get('userregistration',[UserController::class,'showRegistrationForm'])->name('RegistrationForm');
Route::post('submitreg',[UserController::class, 'register'])->name('submitreg');
Route::get('login',[UserController::class,'login'])->name('login');
Route::get('logout',[UserController::class,'logout'])->name('logout');








