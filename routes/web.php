<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentPerformanceController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PerformanceController;

Route::get('/student/{student}/performance/{exercise}', [PerformanceController::class, 'getStudentPerformance']);


Route::get('/generate-chart/{student_id}/{exercicio}', [PerformanceController::class, 'gerarGrafico']);


Route::get('/students/{student}', [StudentController::class, 'show'])->name('students.show');
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

Route::get('/students/{id}/tests/create', [TestController::class, 'create'])->name('tests.create');
Route::post('/students/{id}/tests', [TestController::class, 'store'])->name('tests.store');


Route::get('/', function () {
    return view('landing');
});


Route::get('/profile', function () {
    return view('profile.show'); // Crie uma view simples 'profile/show.blade.php'
})->name('profile.show');


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Rota inicial
Route::get('/', function () {
    return view('landing');
});

// Registro
Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');

// Login
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

// Logout
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

// // Dashboard (página após login)
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware('auth')->name('dashboard');

require __DIR__.'/auth.php';
