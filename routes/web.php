<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\Coupon\CouponController;
use App\Http\Controllers\Frontend\FrontPageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Property\CategoryController;
use App\Http\Controllers\Property\PropertyController;
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

Route::get('/', [FrontPageController::class, 'index'])->name('home');
//Single Property
Route::get('property/{uuid}', [PropertyController::class, 'show'])->name('property.show');
Route::get('/dashboard', function () {
    return view('backend.index');
})->middleware(['auth', 'verified'])->name('dashboard');
//Property Category CRUD
Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('add-category', [CategoryController::class, 'create'])->name('category.create');
    Route::post('add-category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('edit-category/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::patch('edit-category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::post('delete-category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
});
//Property Crud from backend
Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('add-property', [PropertyController::class, 'create'])->name('property.create');
    Route::post('add-property', [PropertyController::class, 'store'])->name('property.store');
    Route::get('properties', [PropertyController::class, 'index'])->name('property.index');
    Route::get('edit-property/{uuid}', [PropertyController::class, 'edit'])->name('property.edit');
    Route::patch('edit-property/{uuid}', [PropertyController::class, 'update'])->name('property.update');
    Route::post('delete-property/{uuid}', [PropertyController::class, 'destroy'])->name('property.delete');
});
//Manage booking for frontend
Route::middleware(['auth'])->group(function () {
    Route::get('bookings/{uuid}', [BookingController::class, 'create'])->name('booking.create');
    Route::post('bookings/{uuid}', [BookingController::class, 'store'])->name('booking.store');
    Route::get('make-payment', [PaymentController::class, 'create'])->name('payment');
    Route::post('ssl-success', [PaymentController::class, 'success'])->name('ssl-success');
    Route::post('ssl-fail', [PaymentController::class, 'fail'])->name('ssl-fail');
    Route::post('ssl-cancel', [PaymentController::class, 'success'])->name('ssl-cancel');
});
//Manage Booking in backend
Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('bookings', [BookingController::class, 'index'])->name('bookings.index');
    Route::patch('bookings/{booking}', [BookingController::class, 'update'])->name('bookings.update');
    Route::delete('bookings/{booking}', [BookingController::class, 'destroy'])->name('bookings.destroy');
});
//Manage Coupon in backend
Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('coupon', [CouponController::class, 'index'])->name('coupon.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
