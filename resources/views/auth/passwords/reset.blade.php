@section('title', 'Redefinir Senha - Atena')

@section('content')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha - Atena</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        :root {
            --azul: #0451b8;
            --laranja: #f47500;
            --verde: #098419;
        }

        * {
            margin: 0; padding: 0; box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex; align-items: center; justify-content: center;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                        url('{{ asset('background.jpg') }}') center/cover no-repeat;
            color: var(--laranja);
        }

        .reset-container {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            width: 100%; max-width: 400px;
            text-align: center;
            border: 3px solid var(--verde);
            box-shadow: 
                0 0 30px rgba(9, 132, 25, 0.6),
                0 0 60px rgba(4, 81, 184, 0.3);
        }

        h1 {
            font-size: 2rem; margin-bottom: 1rem;
            background: linear-gradient(45deg, var(--azul), var(--laranja), var(--verde));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        input {
            width: 100%; padding: 12px;
            margin: 8px 0;
            border-radius: 10px;
            border: none;
            outline: none;
            font-size: 1rem;
            background-color: #e6e6e6;
            color: gray;
            transition: 0.3s;
        }

        input:focus {
            background: rgba(255,255,255,0.3);
            box-shadow: 0 0 10px var(--laranja);
        }

        .btn-reset {
            margin-top: 1rem;
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            background: linear-gradient(45deg, var(--azul), var(--laranja));
            color: white;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-reset:hover {
            transform: scale(1.05);
            background: linear-gradient(45deg, var(--laranja), var(--azul));
            box-shadow: 
                0 0 30px rgba(9, 132, 25, 0.6),
                0 0 60px rgba(4, 81, 184, 0.3);
        }

        .invalid-feedback {
            color: red;
            font-size: 0.9rem;
            margin-bottom: 5px;
        }

        .extras {
            margin-top: 1rem;
            font-size: 0.9rem;
            color: var(--laranja);
        }

        .extras a {
            color: var(--laranja);
            text-decoration: none;
        }

        .extras a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form method="POST" action="{{ route('password.update') }}" class="reset-container">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <h1>Redefinir Senha</h1>

        <input id="email" type="email" name="email"
               placeholder="E-mail"
               class="@error('email') is-invalid @enderror"
               value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input id="password" type="password" name="password"
               placeholder="Nova senha"
               class="@error('password') is-invalid @enderror" required autocomplete="new-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input id="password-confirm" type="password" name="password_confirmation"
               placeholder="Confirmar nova senha" required autocomplete="new-password">

        <button type="submit" class="btn-reset">Redefinir Senha</button>

        <div class="extras">
            <a href="{{ route('login') }}">Voltar para o login</a>
        </div>
    </form>
</body>
</html>
