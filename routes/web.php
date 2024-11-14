<?php

use App\Http\Controllers\BookingsController;
use App\Livewire\Admin\Posts\PostCreate;
use App\Livewire\UserTable;
use Illuminate\Support\Facades\Route;
// use App\Http\Livewire\HeroSection\Main;
use App\Livewire\AboutSection\Main as AboutSectionMain;
use App\Livewire\Admin\Fasilitas\PostFasilitas;
use App\Livewire\Admin\Promo\PostPromo;
use App\Livewire\Admin\Wahana\PostWahana;
use App\Livewire\FasilitasSection\Main as FasilitasSectionMain;
use App\Livewire\HeroSection\Main as HeroSectionMain;
use App\Livewire\NewsSection\Main as NewsSectionMain;
use App\Livewire\PromoSection\Main as PromoSectionMain;
use App\Livewire\TokoSection\Main as TokoSectionMain;
use App\Livewire\WahanaSection\Main as WahanaSectionMain;
use App\Livewire\ContactSection\Main as ContactSectionMain;

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
Route::get('/home', HeroSectionMain::class, 'homePage')->name('homePage');
Route::get('/about', AboutSectionMain::class, 'aboutPage')->name('aboutPage');
Route::get('/toko', TokoSectionMain::class, 'tokoPage')->name('tokoPage');
Route::get('/wahana', WahanaSectionMain::class, 'wahanaPage')->name('wahanaPage');
Route::get('/fasilitas', FasilitasSectionMain::class, 'fasilitasPage')->name('fasilitasPage');
Route::get('/news', NewsSectionMain::class, 'newsPage')->name('newsPage');
Route::get('/promo', PromoSectionMain::class, 'promoPage')->name('promoPage');
Route::get('/contact', ContactSectionMain::class, 'contactPage')->name('contactPage');


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
    Route::get('/posts/promo', PostPromo::class)->name('post.promo');
    Route::get('/posts/wahana', PostWahana::class)->name('post.wahana');
    Route::get('/posts/fasilitas', PostFasilitas::class)->name('post.fasilitas');

    Route::get('/table', UserTable::class)->name('tableTest');
    Route::get('/booking', [BookingsController::class, 'create'])->name('booking.form');
    Route::post('/booking', [BookingsController::class, 'store'])->name('booking.submit');
    Route::get('/admin/booking', [BookingsController::class, 'index'])->name('admin.booking.index');
    Route::post('/admin/booking/{booking}/approve', [BookingsController::class, 'approve'])->name('admin.booking.approve');
    Route::post('/admin/booking/{booking}/reject', [BookingsController::class, 'reject'])->name('admin.booking.reject');
});
