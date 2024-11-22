<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Você precisa estar logado para acessar o perfil.');
        }

        $usuario = Auth::user()->load('historias'); // Carrega as histórias do usuário
        return view('perfil', compact('usuario'));
    }
}