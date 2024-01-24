<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrgController;
use App\Http\Controllers\DocController;
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
  return view('auth/login');
}); 

Route::get('/dashboard', function () {
  $user = Auth::user();
  if($user->group == 1 && $user->name == null){
    return redirect('/organization');
  }elseif($user->document == null){
    return redirect('/docUpload');
  }else {
    return view('dashboard');
  }
  
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
  Route::get('/organization', [OrgController::class, 'edit'])->name('org.edit');
  Route::post('/organization', [OrgController::class, 'update'])->name('org.update');

  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

  Route::get('/docUpload', [DocController::class, 'edit'])->name('doc.edit');
  Route::post('/docUpload', [DocController::class, 'update'])->name('doc.update');
  
  
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
