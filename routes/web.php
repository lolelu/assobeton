<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SociController;
use App\Http\Controllers\NewsEventiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/members', [SociController::class, 'index'])->middleware(['auth', 'verified'])->name('members.index');
Route::get('/members/{slug}', [SociController::class, 'show'])->middleware(['auth', 'verified'])->name('members.show');

Route::get('/news_events', [NewsEventiController::class, 'index'])->middleware(['auth', 'verified'])->name('news_events.index');
Route::get('/news_events/{slug}', [NewsEventiController::class, 'show'])->middleware(['auth', 'verified'])->name('news_events.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
