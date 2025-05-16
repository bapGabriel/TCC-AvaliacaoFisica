<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PerformanceController;
use App\Http\Controllers\PdfController;

/*
|--------------------------------------------------------------------------
| Autenticação via Google
|--------------------------------------------------------------------------
*/
Route::get('auth/google', [SocialAuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);

Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');


// Rota para gerar PDF
Route::post('/generate-pdf', [PdfController::class, 'gerarPDF']);
Route::get('/students/{student}', [PerformanceController::class, 'showStudentPerformance'])->name('students.show');
Route::get('/students/{student}/performance', [PerformanceController::class, 'showStudentPerformance'])->name('students.performance.show');


// Rotas para desempenho (PerformanceController)
Route::get('/students/show/{student}', [StudentController::class, 'show'])->name('students.show');

Route::get('/students/{id}/performance', [PerformanceController::class, 'showStudentPerformance'])->name('students.performance');
Route::get('/student/{student}/performance/{exercise}', [PerformanceController::class, 'getStudentPerformance']);
Route::get('/generate-chart/{student_id}/{exercicio}', [PerformanceController::class, 'gerarGrafico']);
Route::get('/performance/percentis/{exercicio}/{sexo}', [PerformanceController::class, 'getPercentisByAge']);
Route::get('/api/performance/student/{student_id}/all', [PerformanceController::class, 'getStudentAllPerformance']);

// Rota para a landing page
Route::get('/', function () {
    return view('landing');
});

// Rotas para outras páginas
Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

// Grupo protegido por autenticação
Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Rotas para alunos (StudentController)
    Route::get('/students', [StudentController::class, 'index'])->name('students.index');

    //

    Route::post('/students', [StudentController::class, 'store'])->name('students.store');
    Route::get('/students/show/{student}', [StudentController::class, 'show'])->name('students.student.show');

    // Rotas para testes (TestController)
    Route::get('/students/{id}/tests/create', [TestController::class, 'create'])->name('tests.create');
    Route::post('/students/{id}/tests', [TestController::class, 'store'])->name('tests.store');

    // Perfil do usuário
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // 👇 Essa rota deve vir por último
    // Route::get('/students/{student}', [PerformanceController::class, 'showStudentPerformance'])->name('students.show');
});

/*
|--------------------------------------------------------------------------
| Autenticação Padrão do Laravel
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';
