<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DicaController;
use App\Http\Controllers\HistoriaController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\PublicaController;
use App\Http\Controllers\EdicaoController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
/*Route::get('/edicao', function () {
    return view('edicao');
});*/
Route::get('/perfil', function () {
    return view('perfil');
});
Route::get('/publicar', function () {
    return view('publicar');
});
Route::get('/dicas', function () {
    return view('dicas');
});
Route::get('/pagPrincip', function () {
    return view('pagPrincip');
});
Route::get('/about', function () {
    return view('about');
});


Route::resource('perfil', UserController::class);
Route::resource('historia1', HistoriaController::class);
Route::resource('pagPrincip', InicioController::class);
Route::resource('dica1', DicaController::class);
Route::resource('edicao', EdicaoController::class);
Route::resource('publicar', PublicaController::class);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::post('/edicao/{id}/conteudo', [PublicaController::class, 'storeConteudo'])->name('store.conteudo');
Route::post('/publicar/{id}', [PublicaController::class, 'storeHistoria'])->name('publicar.store');
Route::get('/edicao/{id}', [PublicaController::class, 'index'])->name('edicao');
Route::get('/criar', [PublicaController::class, 'create'])->name('criar.historia');
Route::resource('sobre', SobreController::class);

/*Route::middleware(['auth'])->group(function () {
    Route::get('/pagPrincip', [YourController::class, 'index'])->name('pagPrincip');
});*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
