<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DicaController;
use App\Http\Controllers\HistoriaController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\PublicaController;
use App\Http\Controllers\EdicaoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

// Rota para a página de login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::middleware(['auth'])->group(function () {
    Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil');
    Route::get('/perfil/edit', [PerfilController::class, 'edit'])->name('perfil.edit');
    Route::post('/perfil/update', [PerfilController::class, 'update'])->name('perfil.update');
});

// Rota para registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

// Rotas autenticadas
Route::middleware(['auth'])->group(function () {
    Route::get('/pagPrincip', [HomeController::class, 'index'])->name('pagPrincip'); // Página principal
    Route::post('/publicar/store', [PublicaController::class, 'store'])->name('publicar.store');
});

//Rotas para histórias e comentários
Route::get('/historia/{id}', [HistoriaController::class, 'show'])->name('historia.show');
Route::get('/historias/{id}/edit', [PublicaController::class, 'edit'])->name('historias.edit');
Route::put('/historias/{id}', [PublicaController::class, 'update'])->name('historias.update');
Route::delete('/historias/{id}', [PublicaController::class, 'destroy'])->name('historias.destroy');
Route::post('/historia/{id}/comentarios', [ComentarioController::class, 'store'])->name('comentarios.store');
Route::resource('comentarios', ComentarioController::class)->only(['edit', 'update', 'destroy']);
Route::post('/tags', [PublicaController::class, 'createTag'])->name('tags.create');

// Rota para pesquisa
Route::get('/pesquisar', [PublicaController::class, 'pesquisar'])->name('pesquisar');

// Rota para logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rotas de recursos
//Route::resource('perfil', UserController::class);
Route::resource('historia', HistoriaController::class);
Route::resource('dica', DicaController::class);
Route::resource('edicao', EdicaoController::class);
Route::resource('publicar', PublicaController::class);

Route::get('/', function () {
    return view('auth.login');
});

// Rota para a página sobre
Route::get('/about', function () {
    return view('about');
});

// Rota para dicas
Route::get('/dicas', function () {
    return view('dicas');
});

Route::get('/historia', function () {
    return view('blog-single');
});

// Rotas padrão do Auth
Auth::routes();