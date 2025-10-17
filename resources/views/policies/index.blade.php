<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Políticas - {{ config('app.name', 'Atena') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --azul: #0451b8;
            --laranja: #f47500;
            --verde: #098419;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)),
                        url('{{ asset('background.jpg') }}') center/cover no-repeat;
            color: var(--laranja);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding: 30px 15px;
        }

        .header {
            width: 100%;
            max-width: 400px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 25px;
        }

        .chevron-container {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.15);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 22px;
            cursor: pointer;
            transition: all 0.2s;
        }

        .chevron-container:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateX(-3px);
        }

        .header-title {
            font-size: 1.6rem;
            background: linear-gradient(45deg, var(--azul), var(--laranja), var(--verde));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .content {
            width: 100%;
            max-width: 400px;
            background: white;
            border-radius: 20px;
            border: 3px solid var(--verde);
            box-shadow:
                0 0 30px rgba(9, 132, 25, 0.6),
                0 0 60px rgba(4, 81, 184, 0.3);
            overflow: hidden;
            backdrop-filter: blur(15px);
            animation: fadeIn 0.6s ease forwards;
        }

        .card-title {
            background: linear-gradient(45deg, var(--azul), var(--laranja));
            color: white;
            text-align: center;
            padding: 15px;
            font-weight: 600;
            font-size: 1rem;
            letter-spacing: 1px;
        }

        .policy-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-decoration: none;
            color: var(--azul);
            padding: 18px;
            border-bottom: 1px solid rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .policy-item:last-child {
            border-bottom: none;
        }

        .policy-item:hover {
            background: rgba(4,81,184,0.08);
            transform: translateX(5px);
        }

        .policy-title {
            font-weight: 600;
            font-size: 1rem;
        }

        .policy-description {
            font-size: 0.8rem;
            color: gray;
        }

        .policy-arrow {
            color: var(--laranja);
            font-size: 1.2rem;
            transition: transform 0.2s;
        }

        .policy-item:hover .policy-arrow {
            transform: translateX(4px);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 480px) {
            .header-title {
                font-size: 1.4rem;
            }
            .policy-item {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="{{ url()->previous() }}" class="chevron-container">‹</a>
        <h1 class="header-title">Políticas</h1>
        <div style="width:36px"></div>
    </div>

    <div class="content">
        <div class="card-title">DOCUMENTOS LEGAIS</div>

        <a href="{{ route('privacy-policy') }}" class="policy-item">
            <div>
                <div class="policy-title">Política de Privacidade</div>
                <div class="policy-description">Como coletamos e usamos seus dados</div>
            </div>
            <span class="policy-arrow">›</span>
        </a>

        
        <a href="{{ route('terms-use') }}" class="policy-item">
            <div>
                <div class="policy-title">Termos de uso</div>
                <div class="policy-description">Termos de Uso e condições gerais de acesso, tem por finalidade precípua regular o acesso, a navegação e a utilização</div>
            </div>
            <span class="policy-arrow">›</span>
        </a>

      
        <a href="{{ route('policy-cookies') }}" class="policy-item">
            <div>
                <div class="policy-title">Política de cookies</div>
                <div class="policy-description">Política de Cookies com o objetivo primordial de conferir máxima transparência aos seus usuários</div>
            </div>
            <span class="policy-arrow">›</span>
        </a>

    </div>

    <script>
        document.querySelectorAll('.policy-item').forEach(item => {
            item.addEventListener('click', function() {
                this.style.transform = 'translateX(2px) scale(0.98)';
                setTimeout(() => this.style.transform = '', 150);
            });
        });

        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') window.history.back();
        });

        let startX = 0;
        document.addEventListener('touchstart', e => startX = e.touches[0].clientX);
        document.addEventListener('touchend', e => {
            const diff = e.changedTouches[0].clientX - startX;
            if (diff > 100 && startX < 50) window.history.back();
        });
    </script>
</body>
</html>
