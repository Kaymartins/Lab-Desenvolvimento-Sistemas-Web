<?php

use App\Http\Controllers\GradeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeamController;
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
    return view('welcome');
});

Route::middleware(['auth','verified'])->group(function(){

   Route::resource('/teams',TeamController::class);

   Route::get('/students/create/{team}',[StudentController::class,"create"])->name('students.create');
   Route::post('/students/store/{team}',[StudentController::class, "store"])->name('students.store');
   Route::get('/students/show/{student}',[StudentController::class, "show"])->name('students.show');
   Route::get('/students/edit/{student}',[StudentController::class,"edit"])->name('students.edit');
   Route::put('/students/update/{student}',[StudentController::class,"update"])->name('students.update');
   Route::delete('/students/destroy/{student}',[StudentController::class,"destroy"])->name('students.destroy');

   Route::get('/grades/create/{student}',[GradeController::class, "create"])->name('grades.create');
   Route::post('/grades/store/{student}',[GradeController::class, "store"])->name('grades.store');
   Route::get('/grades/edit/{grade}',[GradeController::class, "edit"])->name('grades.edit');
   Route::put('/grades/update/{grade}',[GradeController::class,"update"])->name('grades.update');
   Route::delete('/grades/destroy/{grade}',[GradeController::class, "destroy"])->name('grades.destroy');
});

require __DIR__.'/auth.php';
