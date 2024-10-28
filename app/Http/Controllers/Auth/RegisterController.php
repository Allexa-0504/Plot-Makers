<?php 
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register'); 
    }

    public function register(Request $request)
    {
        // Validação dos dados
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Criação do usuário
        User::create([
            'name' => $request->name, // Corrigido para $request->name
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirecionamento após criação
        return redirect()->route('login')->with('success', 'Conta criada com sucesso!');
    }
}
