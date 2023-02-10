<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoriesController;
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

Route::get('/', function () {
    return redirect(route("panel.main"));
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

//Custom Aplication routes
Route::middleware("auth")->group(function(){
    //  Main page route (will )
    Route::get("/panel",[ProfileController::class,'main'])->name('panel.main');
    Route::get("/panel/users",[ProfileController::class,'usersManagement'])->name("panel.users");
    Route::get("/panel/products",[CategoriesController::class,'productsManagement'])->name("panel.products");
});



require __DIR__.'/auth.php';
