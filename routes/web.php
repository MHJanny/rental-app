<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Property\CategoryController;
use App\Http\Controllers\Property\RentController;
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
    return view('frontend.index');
});

Route::get('/rentals', function () {
    return view('frontend.rental-list');
});

Route::get('/rentals/{id}', function () {
    return view('frontend.single-rental');
});

Route::get('/dashboard', function () {
    return view('backend.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('add-category',[CategoryController::class, 'create'])->name('category.create');
    Route::post('add-category',[CategoryController::class, 'store'])->name('category.store');
    Route::get('edit-category/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::patch('edit-category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::post('delete-category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');


    Route::get('add-property', [RentController::class, 'create'])->name('property.create');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';