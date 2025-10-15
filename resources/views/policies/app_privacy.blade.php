<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Política de Privacidade - Atena</title>
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
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding: 30px 15px;
        }

        .header {
            width: 100%;
            max-width: 800px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 25px;
            color: white;
        }

        .chevron-container {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.15);
            display: flex;
            justify-content: center;
            align-items: center;
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
            max-width: 800px;
            background: white;
            border-radius: 20px;
            border: 3px solid var(--verde);
            box-shadow:
                0 0 30px rgba(9, 132, 25, 0.6),
                0 0 60px rgba(4, 81, 184, 0.3);
            overflow: hidden;
            backdrop-filter: blur(15px);
            animation: fadeIn 0.6s ease forwards;
            padding: 30px;
        }

        .content h2 {
            text-align: center;
            font-size: 1.4rem;
            background: linear-gradient(45deg, var(--azul), var(--laranja), var(--verde));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 20px;
        }

        .content h3 {
            margin-top: 20px;
            color: var(--azul);
            font-size: 1.1rem;
        }

        .content p {
            margin-top: 8px;
            line-height: 1.6;
            color: #444;
            font-size: 0.95rem;
        }

        .content ul {
            margin-top: 10px;
            margin-left: 20px;
            color: #555;
        }

        .content ul li {
            margin-bottom: 8px;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 480px) {
            .header-title {
                font-size: 1.4rem;
            }
            .content {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="{{ url()->previous() }}" class="chevron-container">‹</a>
        <h1 class="header-title">Política de Privacidade</h1>
        <div style="width:36px"></div>
    </div>

    <div class="content">
        <h2>Como protegemos suas informações</h2>
        <p>
            A sua privacidade é muito importante para nós. Esta Política de Privacidade explica como coletamos,
            usamos e protegemos suas informações pessoais durante o uso de nossos serviços.
        </p>

        <h3>1. Coleta de informações</h3>
        <p>
            Coletamos informações pessoais apenas quando necessário para oferecer uma melhor experiência.
            Isso pode incluir nome, e-mail, matrícula, dados de acesso ou informações fornecidas voluntariamente.
        </p>

        <h3>2. Uso das informações</h3>
        <p>
            As informações coletadas são utilizadas para:
        </p>
        <ul>
            <li>Gerenciar seu acesso à plataforma;</li>
            <li>Melhorar nossos serviços e funcionalidades;</li>
            <li>Enviar comunicações importantes e notificações de segurança;</li>
            <li>Cumprir obrigações legais e contratuais.</li>
        </ul>

        <h3>3. Armazenamento e segurança</h3>
        <p>
            Todos os dados são armazenados em ambientes seguros, com medidas de criptografia e controle de acesso
            que visam impedir o uso ou divulgação não autorizada.
        </p>

        <h3>4. Compartilhamento de dados</h3>
        <p>
            Não vendemos, alugamos ou compartilhamos seus dados com terceiros, exceto quando necessário
            para execução de serviços essenciais ou quando exigido por lei.
        </p>

        <h3>5. Direitos do usuário</h3>
        <p>
            Você tem o direito de solicitar acesso, correção ou exclusão dos seus dados pessoais a qualquer momento.
            Para isso, entre em contato através do e-mail oficial de suporte.
        </p>

        <h3>6. Alterações desta política</h3>
        <p>
            Reservamo-nos o direito de atualizar esta política periodicamente. As alterações serão notificadas por
            meio da própria plataforma.
        </p>

        <p style="margin-top: 25px; text-align: center; color: var(--laranja); font-weight: 600;">
            Última atualização: Outubro de 2025
        </p>
    </div>

    <script>
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
