<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    public function edit()
    {
        $usuario = Auth::user();
        return view('editarPerfil', compact('usuario'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $usuario = Auth::user();
        $usuario->name = $request->name;
        $usuario->email = $request->email;

        // Processar a imagem de perfil se fornecida
        if ($request->hasFile('profile_photo')) {
            // Excluir a imagem antiga se existir
            if ($usuario->profile_photo_path) {
                Storage::disk('public')->delete($usuario->profile_photo_path);
            }
            $usuario->profile_photo_path = $request->file('profile_photo')->store('profile_photos', 'public');
        }

        $usuario->save();

        return redirect()->route('perfil')->with('success', 'Perfil atualizado com sucesso!');
    }
}