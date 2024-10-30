<?php

use App\Http\Controllers\BookingsController;
use Illuminate\Support\Facades\Route;

use function Termwind\render;

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


// Fortify routes
Route::group(['middleware' => config('fortify.middleware', ['web'])], base_path('routes/sub/fortify.php'));

// Jetstream routes
Route::group(['middleware' => config('jetstream.middleware', ['web'])], base_path('routes/sub/jetstream.php'));


Route::get('/welcome', function () {
    return view('welcome');
})
    ->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');
});

Route::get('/booking', [BookingsController::class, 'create'])->name('booking.form');
Route::post('/booking', [BookingsController::class, 'store'])->name('booking.submit');
Route::get('/admin/booking', [BookingsController::class, 'index'])->name('admin.booking.index');
Route::post('/admin/booking/{booking}/approve', [BookingsController::class, 'approve'])->name('admin.booking.approve');
Route::post('/admin/booking/{booking}/reject', [BookingsController::class, 'reject'])->name('admin.booking.reject');
