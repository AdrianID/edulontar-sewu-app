<?php

use App\Http\Controllers\BookingsController;
use App\Livewire\Admin\Posts\PostCreate;
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


// Landing pages (no authentication required)
Route::get('/home', [App\Http\Controllers\LandingPage::class, 'homePage'])->name('homePage');
Route::get('/about', [App\Http\Controllers\LandingPage::class, 'aboutPage'])->name('aboutPage');
Route::get('/toko', [App\Http\Controllers\LandingPage::class, 'tokoPage'])->name('tokoPage');
Route::get('/wahana', [App\Http\Controllers\LandingPage::class, 'wahanaPage'])->name('wahanaPage');
Route::get('/fasilitas', [App\Http\Controllers\LandingPage::class, 'fasilitasPage'])->name('fasilitasPage');
Route::get('/news', [App\Http\Controllers\LandingPage::class, 'newsPage'])->name('newsPage');
Route::get('/promo', [App\Http\Controllers\LandingPage::class, 'promoPage'])->name('promoPage');
Route::get('/contact', [App\Http\Controllers\LandingPage::class, 'contactPage'])->name('contactPage');

// Fortify routes
Route::group(['middleware' => config('fortify.middleware', ['web'])], base_path('routes/sub/fortify.php'));

// Jetstream routes
Route::group(['middleware' => config('jetstream.middleware', ['web'])], base_path('routes/sub/jetstream.php'));


// Custom Login route
// Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);

// Welcome page (optional)
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// Authenticated pages (requires login)
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');
    Route::get('/posts/create', PostCreate::class)->name('post.create');

    Route::get('/booking', [BookingsController::class, 'create'])->name('booking.form');
    Route::post('/booking', [BookingsController::class, 'store'])->name('booking.submit');
    Route::get('/admin/booking', [BookingsController::class, 'index'])->name('admin.booking.index');
    Route::post('/admin/booking/{booking}/approve', [BookingsController::class, 'approve'])->name('admin.booking.approve');
    Route::post('/admin/booking/{booking}/reject', [BookingsController::class, 'reject'])->name('admin.booking.reject');
});
