
@section('title', 'Login - Atena')

@section('content')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.png') }}" rel="apple-touch-icon" sizes="180x180" type="image/png">
    <title>Login - Atena</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
   
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
            /*color: #fff;*/
            color: var(--laranja);
        }

        .login-container {
            background: white;
            backdrop-filter: blur(15px);
            border-radius: 20px;
            padding: 2rem;
            width: 100%; max-width: 380px;
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
            background: rgba(255, 255, 255, 0.2);
            color: gray;
            background-color: #e6e6e6;
            transition: 0.3s;
        }

        input:focus {
            background: rgba(255,255,255,0.3);
            box-shadow: 0 0 10px var(--laranja);
        }

        .btn-login {
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

        .btn-login:hover {
            transform: scale(1.05);
            background: linear-gradient(45deg, var(--laranja), var(--azul));
            box-shadow: 
                    0 0 30px rgba(9, 132, 25, 0.6),
                    0 0 60px rgba(4, 81, 184, 0.3);
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

      
        .container-policy {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    margin-top: 15px;
    text-align: left;
    font-size: 0.9rem;
    line-height: 1.4;
    color: var(--laranja);
    cursor: pointer;
    user-select: none;
}

/* Melhor aparência do checkbox */
.container-policy input[type="checkbox"] {
    width: 18px;
    height: 18px;
    margin-top: 2px;
    accent-color: var(--laranja);
    cursor: pointer;
    transition: transform 0.2s ease;
}

.container-policy input[type="checkbox"]:hover {
    transform: scale(1.15);
}

/* Estilo do texto */
.container-policy label {
    cursor: pointer;
}

/* Links */
.container-policy label a {
    color: var(--laranja);
    font-weight: 600;
    text-decoration: none;
    transition: color 0.2s ease, text-decoration 0.2s ease;
}

.container-policy label a:hover {
    text-decoration: underline;
    color: var(--azul);
}

/* Efeito de foco para acessibilidade */
.container-policy input[type="checkbox"]:focus-visible {
    outline: 2px solid var(--azul);
    outline-offset: 2px;
    border-radius: 4px;
}



    </style>
</head>
<body>
<!--{{ route('login') }}-->
    <form method="POST" action="/login" class="login-container">
        @csrf
        <h1>Login</h1>

        <input type="matricula" name="matricula" id="matricula" placeholder="RA"
            class="@error('matricula') is-invalid @enderror" value="{{ old('matricula') }}" required autofocus>


        <input type="password" name="password" id="password" placeholder="********"
            class="@error('password') is-invalid @enderror" required>


        @error('matricula')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        @error('password')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror




        <button type="submit" class="btn-login">Entrar</button>

        <div class="extras">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">Esqueceu sua senha?</a>
            @endif
        </div>



      <div class="container-policy">
        <label for="policy">
            <a href="{{route('policies')}}" >Aceito os Termos de Uso
            e a Política de Privacidade</a>.
        </label>
    </div>

    </form>
</body>
</html>