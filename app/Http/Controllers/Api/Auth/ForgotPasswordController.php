<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? response()->json(['message' => 'Enviamos seu link de redefinição de senha por e-mail!'])
            : response()->json(['message' => 'Endereço de e-mail não encontrado, favor entrar em contato com o suporte <a href="https://wa.me/3833651164" target="_blank">(38)3365-1164</a>'], 404);
    }
}
