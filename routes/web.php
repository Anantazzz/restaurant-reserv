<?php

use Illuminate\Support\Facades\Route;

// PUBLIC
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Menu\Index as MenuIndex;
use App\Livewire\Menu\Show as MenuShow;
use App\Livewire\Cart\Index as CartIndex;
use App\Livewire\Cart\Checkout as CartCheckout;
use App\Livewire\Reservation\Form as ReservationForm;
use App\Livewire\Reservation\Status as ReservationStatus;
use App\Livewire\Transaction\Index as TransactionIndex;
use App\Livewire\Transaction\Show as TransactionShow;
use App\Livewire\Testimonial\Listing as TestimonialListing;
use App\Livewire\Testimonial\Form as TestimonialForm;

// ADMIN
use App\Livewire\Admin\Dashboard\Index as AdminDashboard;
use App\Livewire\Admin\Menu\Index as AdminMenuIndex;
use App\Livewire\Admin\Menu\Create as AdminMenuCreate;
use App\Livewire\Admin\Menu\Edit as AdminMenuEdit;
use App\Livewire\Admin\Reservation\Index as AdminReservationIndex;
use App\Livewire\Admin\Reservation\Show as AdminReservationShow;
use App\Livewire\Admin\Transaction\Index as AdminTransactionIndex;
use App\Livewire\Admin\Transaction\Show as AdminTransactionShow;

# -----------------------------------
# ROUTES START
# -----------------------------------

// LANDING PAGE
Route::get('/', MenuIndex::class);

// AUTH
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');

// MENU
Route::get('/menu', MenuIndex::class);
Route::get('/menu/{id}', MenuShow::class); // detail menu

// CART
Route::get('/cart', CartIndex::class);
Route::get('/checkout', CartCheckout::class);

// RESERVASI
Route::get('/reservation', ReservationForm::class);
Route::get('/reservation/status', ReservationStatus::class);

// TRANSAKSI USER
Route::get('/transactions', TransactionIndex::class);
Route::get('/transactions/{id}', TransactionShow::class);

// TESTIMONIAL
Route::get('/testimonials', TestimonialListing::class);
Route::get('/testimonials/create', TestimonialForm::class);

// ADMIN DASHBOARD
Route::prefix('admin')->group(function () {
    Route::get('/', AdminDashboard::class);

    // MENU
    Route::get('/menu', AdminMenuIndex::class);
    Route::get('/menu/create', AdminMenuCreate::class);
    Route::get('/menu/{id}/edit', AdminMenuEdit::class);

    // RESERVASI
    Route::get('/reservations', AdminReservationIndex::class);
    Route::get('/reservations/{id}', AdminReservationShow::class);

    // TRANSAKSI
    Route::get('/transactions', AdminTransactionIndex::class);
    Route::get('/transactions/{id}', AdminTransactionShow::class);
});
