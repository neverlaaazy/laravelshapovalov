<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;

// Route::get('/second',[MainController::class,'show1']);

// Route::get('/home',[MainController::class, 'showIndex'])->name('home');

// Route::get('/array',[MainController::class, 'showArray'])->name('array');
// Route::get('/array/shuffle',[MainController::class, 'shuffleArray'])->name('array.shuffle');
// Route::get('/array/sort',[MainController::class, 'sortArray'])->name('array.sort');
// Route::get('/array/filter',[MainController::class, 'filterArray'])->name('array.filter');
Route::redirect('/', '/reports');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
    Route::get('/reports/create',function(){
        return view('report.create');
    })->name('report.create');
    Route::delete('/reports/{report}',[ReportController::class, 'destroy'])->name('reports.destroy');
    Route::post('/reports',[ReportController::class, 'store'])->name('reports.store');
    Route::get('/reports/{report}/edit', [ReportController::class, 'edit'])->name('report.edit');
    Route::put('/reports/{report}',[ReportController::class,'update'])->name('report.update');
    
        
    Route::get('/index', function(){
        return view('index');
    });
    Route::get('/second', function(){
        return view('second');
    });
});
Route::middleware((Admin::class))->group(function(){
    Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
    Route::patch('/reports/status/{report}/', [ReportController::class, 'statusUpdate'])
                ->name('reports.status.update');
});

require __DIR__.'/auth.php';
