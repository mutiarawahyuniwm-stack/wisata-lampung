<?php

use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WisataController;
use App\Models\Wisata;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

Route::get('/', function () {
    $wisata = Schema::hasTable('wisatas') ? Wisata::latest()->get() : collect();

    return view('home', compact('wisata'));
})->name('home');

Route::get('/destinasi/{slug}', [DestinasiController::class, 'show'])->name('destination');

Route::get('/dashboard', function () {
    $wisata = Schema::hasTable('wisatas') ? Wisata::latest()->limit(3)->get() : collect();

    return view('dashboard', compact('wisata'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified', 'is_admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::resource('wisata', WisataController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
