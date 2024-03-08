<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::view('/dashboard/events', 'dashobaord\events')->name('dashboard.events');
Route::view('/dashboard/invitation', 'dashobaord\invitation')->name('dashboard.invitation');

Route::view('/dashboardAdmin/categories', 'dashboardAdmin\categories')->name('dashboardAdmin.categories');
Route::view('/dashboardAdmin/users', 'dashboardAdmin\users')->name('dashboardAdmin.users');
Route::view('/dashboardAdmin/demandes', 'dashboardAdmin\demandes')->name('dashboardAdmin.demandes');
Route::view('/dashboardAdmin/events', 'dashboardAdmin\events')->name('dashboardAdmin.events');

require __DIR__.'/auth.php';