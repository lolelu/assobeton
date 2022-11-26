<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SociController;
use App\Http\Controllers\NewsEventiController;
use App\Http\Controllers\GruppiMerceologiciController;
use App\Models\GruppiMerceologici;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
//Response
use Illuminate\Http\Response;

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
Route::get('/soci', [SociController::class, 'index'])->name('soci.index');
Route::get('/soci/{slug}', [SociController::class, 'show'])->name('soci.show');



Route::get('/news_eventi', [NewsEventiController::class, 'index'])->name('news_eventi.index');
Route::get('/news_eventi/featured', [NewsEventiController::class, 'featured'])->name('news_eventi.featured');
Route::get('/news_eventi/{slug}', [NewsEventiController::class, 'show'])->name('news_eventi.show');

Route::get('/gruppi_merceologici', [GruppiMerceologiciController::class, 'index'])->name('gruppi_merceologici.index');
Route::get('/gruppi_merceologici/{slug}', [GruppiMerceologiciController::class, 'show'])->name('gruppi_merceologici.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
