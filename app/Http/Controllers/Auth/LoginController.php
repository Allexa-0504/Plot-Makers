<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // O construtor aplica o middleware 'guest', exceto no logout
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Exibe o formulário de login
    public function showLoginForm()
    {
        return view('auth.login');  // Certifique-se de que a view 'auth.login' existe
    }

    // Lida com o processo de login
    public function login(Request $request)
    {
        // Validação das credenciais de login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Tentativa de autenticar o usuário
        if (Auth::attempt($request->only('email', 'password'))) {
            // Redireciona para a página principal ou dashboard após sucesso
            return redirect()->route('pagPrincip');  // Substitua 'pagPrincip' pela rota desejada
        }

        // Redireciona de volta com uma mensagem de erro
        return back()->withErrors([
            'email' => 'As credenciais não correspondem.',
        ]);
    }

    // Lida com o logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');  // Redireciona para a página de login após logout
    }
}
