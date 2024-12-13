<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    function login(Request $request) {

        
        if (!Auth::attempt($request->only('email', 'password'))) {
            //print("TENTOU MAS DEU RUIM \n");
            return response()->json(['message' => 'Dados de Login Inválidos'], 401);
        }

        //print("testando: ".$request["email"]);

        $user = User::where('email', $request['email'])->firstOrFail();
        $token = $user->createToken('auth_token')->plainTextToken;

       //RETORNA RETORNO PADRÁO, IMBUTIDO CONFIGURAÇÕESAUTENTICAÇÃO
        return response()->json([
            'status'=>'success',
            'message'=>'Login relaizado com sucesso!',
            'data' => [
                'id'=>$user->id,
                'conectividade'=>0,
                'nome'=>$user->name,
                'usuario'=>$user->email,
                'password'=>$user->password,
                'tokenAuth'=>$token
            ],
        ]);

    }

    function logout(Request $Request){
        //PEGA O USUÁRIO LOGADO, DELETA SEUS TOKENS E O DESLOGA.
        $user = Auth::user();
        $user->tokens()->delete();
        auth()->guard('web')->logout();
        return response()->json(['message' => 'Usuario efetuou logout'],200);
    }

    function atualizarToken(Request $Request){
        //PEGA O USUÁRIO LOGADO, DELETA SEUS TOKENS
        $user = Auth::user();
        $user->tokens()->delete();

        //CRIA UM NOVO TOKEN E O RETORNA COMO JSON
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }
}

