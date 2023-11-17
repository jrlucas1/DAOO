<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;
use App\Http\Requests\LoginRequest;

use App\Models\User;

class UserController extends Controller
{
    public function login(LoginRequest $request){
        try{
            $credentials = request(['email', 'password']);
       
            if(!Auth::attempt($credentials)){
                return response()->json([
                    'message' => 'Login inválido!',
                    'test' => Auth::attempt($credentials),
                ], 401);
            }
            $user = User::where('email', $request->email)->first();
            $tokenResult = $user->createToken('authToken', [], now()->addDay())->plainTextToken;
            return response()->json([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer'
            ]);
        } catch(\Exception $e){
            return response()->json([
                'message' => 'Erro ao fazer login!',
                'error' => $e->getMessage()
            ], 404);
        }
    }

    public function register (UserRequest $request)
    {
        try{
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email; 
            $user->password = Hash::make($request->password);
            $user->save();
            return response()->json([
                'message' => 'Usuário criado com sucesso!',
                'user' => $user
            ], 201);
        } catch(\Exception $e){
            return response()->json([
                'message' => 'Erro ao criar usuário!',
                'error' => $e->getMessage()
            ], 404);
        }
    }

    public function logout (){
        try{
            auth()->user()->tokens()->delete();
            return response()->json([
                'message' => 'Logout realizado com sucesso!'
            ], 200);
        } catch(\Exception $e){
            return response()->json([
                'message' => 'Erro ao fazer logout!',
                'error' => $e->getMessage()
            ], 404);
        }
    }
}
