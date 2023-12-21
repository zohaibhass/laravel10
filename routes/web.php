<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\controllers\UserController;
use App\Models\Menu;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about_page', function () {
    return view('about');
});

Route::get('services_page', function () {
    return view('services');
});

Route::get('menu_page', function () {
    return view('menu');
});

Route::get('team_page', function () {
    return view('team');
});

Route::get('contact_page', function () {
    return view('contact');
});

Route::get('dashboard_layout', function () {
    return view('layouts\admin');
});



// Route::get('/dashboard', function () {
//     return view('admin\dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin\dashboard');
    })->name('dashboard');

    Route::resource('services', ServiceController::class);

    Route::resource('Menus', MenuController::class);

    Route::get('/menu', function () {
        return view('admin/availablemenu');
    })->name('foodmenu');

    Route::get('/add_menu', function () {
        return view('admin/add-menu');
    })->name('add-menu');

    Route::get('/category', function () {
        return view('admin/category');
    })->name('category');

    Route::get('/add-category', function () {
        return view('admin/add-category');
    })->name('add-category');

    Route::get('/members', function () {
        return view('admin/members');
    })->name('members');

    Route::get('/add-member', function () {
        return view('admin/add-member');
    })->name('add-members');

    Route::get('/availability', function () {
        return view('admin/update-availability');
    })->name('availability');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//mannual layouts


Route::get('userlogin',[UserController::class,'showLoginForm'])->name('LoginForm');
Route::get('userregistration',[UserController::class,'showRegistrationForm'])->name('RegistrationForm');
Route::post('submitreg',[UserController::class, 'register'])->name('submitreg');
Route::get('login',[UserController::class,'login'])->name('login');
Route::get('logout',[UserController::class,'logout'])->name('logout');





// Route::get('admin', function () {
//     return view('admin\dashboard');
// });


