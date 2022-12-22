<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Admin\ProductCreator;
use App\Http\Livewire\Admin\ProductEdit;
use App\Http\Livewire\Admin\ProductList;
use App\Http\Livewire\Admin\ProductOptionManager;
use Illuminate\Support\Facades\Route;

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

/* Backend */
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['auth', 'isAdmin']
], function () {
    // dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // product
    Route::get('/products', ProductList::class)->name('products.index');
    Route::get('/products/create', ProductCreator::class)->name('products.create');
    Route::get('/products/edit/{product}', ProductEdit::class)->name('products.edit');
    Route::get('/products/options/{product}', ProductOptionManager::class)->name('products.options');

});

Route::get('/', function () {
    return view('welcome');
})->name('home');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
