<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PerformanceController;
use App\Http\Controllers\PdfController;

Route::post('/generate-pdf', [PdfController::class, 'generatePdf']);

Route::get('/students/{id}', [PerformanceController::class, 'showStudentPerformance']);

Route::get('/student/{student}/performance/{exercise}', [PerformanceController::class, 'getStudentPerformance']);
Route::get('/generate-chart/{student_id}/{exercicio}', [PerformanceController::class, 'gerarGrafico']);
Route::get('/performance/percentis/{exercicio}/{sexo}', [PerformanceController::class, 'getPercentisByAge']);



// Rota para landing page
Route::get('/', function () {
    return view('landing');
});

Route::get('/api/performance/student/{student_id}/all', [PerformanceController::class, 'getStudentAllPerformance']);

// Rota para dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

// Rota de autenticação
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
    Route::get('/students/{student}', [StudentController::class, 'show'])->name('students.show');
    Route::get('/students', [StudentController::class, 'index'])->name('students.index');
    Route::post('/students', [StudentController::class, 'store'])->name('students.store');
    
    Route::get('/students/{id}/tests/create', [TestController::class, 'create'])->name('tests.create');
    Route::post('/students/{id}/tests', [TestController::class, 'store'])->name('tests.store');
});

require __DIR__.'/auth.php';
