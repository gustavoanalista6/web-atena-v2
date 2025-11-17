<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return response()->json([
            'status' => 'success',
            'message' => 'Lista de usuários retornada com sucesso.',
            'data' => $users
        ], 200);
    }

    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'status' => 'error',
                'message' => 'Usuário não encontrado.'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Usuário encontrado.',
            'data' => $user
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'status' => 'error',
                'message' => 'Usuário não encontrado.'
            ], 404);
        }

        $user->update(['email' => $request->input('email')]);

        return response()->json([
            'status' => 'success',
            'message' => 'Usuário atualizado com sucesso.',
            'data' => $user
        ], 200);
    }
}
