<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Política de Cookies - Atena</title>
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
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
            url('{{ asset(' background.jpg') }}') center/cover no-repeat;
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
            from {
                opacity: 0;
                transform: translateY(15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
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
        <h1 class="header-title">Política de cookies</h1>
        <div style="width:36px"></div>
    </div>

    <div class="content">
    <h2>POLÍTICA DE COOKIES DO CENTRO EDUCACIONAL HYARTE-ML</h2>

    <h3>1. PREÂMBULO E ESCOPO DA POLÍTICA DE COOKIES</h3>

    <p>
        <strong>1.1 Identificação da Controladora e Fundamento Legal</strong>
    </p>

    <p>
    O CENTRO EDUCACIONAL HYARTE-ML, estabelece a presente Política de
    Cookies com o objetivo primordial de conferir máxima transparência aos seus usuários,
    alunos, colaboradores e visitantes sobre o modo como as informações são coletadas,
    armazenadas e utilizadas por meio de cookies e tecnologias assemelhadas em todas as
    suas plataformas digitais, sistemas e aplicações, em estrita observância com a legislação
    nacional vigente, notadamente a Lei nº 13.709/2018, a Lei Geral de Proteção de Dados
    Pessoais (LGPD), e a Lei nº 12.965/2014, o Marco Civil da Internet (MCI), confirmando o
    compromisso institucional com os pilares da autodeterminação informativa, da privacidade
    e da proteção de dados pessoais.
    </p>

    <p>
    Considerando a complexidade regulatória inerente ao ambiente digital e as
    crescentes exigências de transparência impostas por plataformas globais, como Google e
    Apple, especialmente no que tange à hospedagem de novas tecnologias ou aplicações
    baseadas em inteligência artificial, faz-se imperiosa a consolidação e o aprimoramento
    desta política, garantindo que o tratamento de dados pessoais por meio de cookies esteja
    fundamentado nas bases legais estabelecidas e seja limitado às finalidades explicitamente
    declaradas.
    </p>

    <p>
    Este documento detalhado visa não apenas cumprir formalidades legais, mas
    também constituir um instrumento de confiança e clareza para todos os titulares de dados
    que interagem com o ecossistema digital do CENTRO EDUCACIONAL HYARTE-ML,
    assegurando que o tratamento seja realizado de maneira justa, leal, e com a previsibilidade
    exigida pelas normas de proteção de dados.
    </p>

    <p>
        <strong>1.2 Objetivo e Compromisso com a Privacidade Institucional</strong>
    </p>

    <p>
    A finalidade precípua desta Política de Cookies é descrever, de forma exaustiva
    e acessível, as diversas categorias de cookies que podem ser empregados nas páginas
    eletrônicas e nos sistemas geridos pelo CENTRO EDUCACIONAL HYARTE-ML, indicando
    detalhadamente suas funções, a duração de sua permanência nos dispositivos dos usuários
    e, fundamentalmente, qual é a base legal da LGPD que justifica a sua utilização.
    </p>

    <p>
    O CENTRO EDUCACIONAL HYARTE-ML reconhece que a coleta e o tratamento
    de dados pessoais, mesmo que minimizados, envolvem responsabilidade fiduciária, e, por
    isso, adota uma abordagem privacy by design e privacy by default no desenvolvimento e
    integração de todas as suas soluções tecnológicas, incluindo as interações mediadas por
    cookies.
    </p>

    <p>
    Reitera-se que esta Política de Cookies é um complemento inseparável da
    Política de Privacidade principal do CENTRO EDUCACIONAL HYARTE-ML, para a qual se faz
    remissão completa de todas as informações relativas aos direitos dos titulares, às medidas
    de segurança globais e aos procedimentos aplicáveis ao exercício do direito de acesso,
    correção, anonimização, bloqueio ou eliminação dos dados, conforme previsto nos artigos
    18 a 22 da LGPD, devendo ambos os documentos ser interpretados de maneira coordenada
    para a plena compreensão do panorama de proteção de dados da instituição de ensino.
    </p>

    <h3>2. DEFINIÇÕES RELEVANTES PARA A COMPREENSÃO DE COOKIES E DADOS PESSOAIS</h3>

    <p>
        <strong>2.1 O que são Cookies e o Detalhamento Técnico de Sua Natureza</strong>
    </p>

    <p>
    Os cookies são pequenos fragmentos de texto ou código, frequentemente
    criptografados, que são transferidos e armazenados pelo servidor do website nos
    navegadores e dispositivos de acesso (como computadores, smartphones ou tablets) do
    usuário no momento em que ele acessa um ambiente digital.
    </p>

    <p>
    A principal função técnica desses arquivos é atuar como "memória" para o
    website, possibilitando que ele se lembre das escolhas, preferências, parâmetros de
    configuração e, crucialmente, do estado de autenticação do usuário em acessos
    subsequentes ou durante a navegação em diferentes páginas do mesmo domínio em uma
    única sessão.
    </p>

    <p>
    Essa capacidade de retenção de memória não apenas otimiza a experiência do
    usuário, evitando a repetição desnecessária de inserção de dados, como também é vital
    para a operação e segurança de sistemas que requerem identificação, como áreas restritas
    a alunos e professores, e serviços de inteligência artificial que dependem da manutenção
    de uma sessão ativa e segura para o processamento contínuo de tarefas.
    </p>

    <p>
    A natureza do cookie pode variar amplamente, desde arquivos simples que
    apenas validam uma sessão, até trackers complexos que realizam o mapeamento do
    comportamento de navegação ao longo do tempo, razão pela qual a categorização e o
    detalhamento de cada tipo utilizado pelo CENTRO EDUCACIONAL HYARTE-ML são etapas
    indispensáveis para a observância da transparência legal.
    </p>

    <p>
        <strong>2.2 Tecnologias Semelhantes e Abrangência</strong>
    </p>

    <p>
    O conceito de cookie nesta Política será interpretado de forma abrangente para
    englobar todas as tecnologias de rastreamento e armazenamento local que operam de
    maneira similar, mesmo que tecnicamente distintas, incluindo, mas não se limitando a,
    web beacons, pixels de rastreamento (tracking pixels), fingerprinting de navegador, etags
    e o armazenamento local do navegador (localStorage ou sessionStorage).
    </p>

    <p>
    Todas essas tecnologias compartilham o potencial de coletar informações sobre
    o dispositivo do usuário, suas interações e seu perfil de navegação, e, portanto, estão
    sujeitas às mesmas regras e exigências de consentimento e transparência da LGPD.
    </p>

    <p>
    O CENTRO EDUCACIONAL HYARTE-ML compromete-se a aplicar o regime de
    proteção e as regras de gestão de consentimento dispostas neste documento a qualquer
    nova tecnologia que venha a ser implementada e que sirva ao propósito de coleta,
    armazenamento ou rastreamento de dados pessoais ou metadados de acesso nos
    dispositivos dos titulares.
    </p>

    <p>
        <strong>2.3 Dados Pessoais e o Conceito de Tratamento na LGPD</strong>
    </p>

    <p>
    Em conformidade com a LGPD, o conceito de Dados Pessoais abrange toda e
    qualquer informação relacionada a pessoa natural identificada ou identificável, o que pode
    incluir, dependendo do contexto da coleta, o endereço de IP, identificadores únicos do
    dispositivo, dados de geolocalização e histórico de navegação – informações
    frequentemente coletadas e processadas por meio de cookies.
    </p>

    <p>
    O Tratamento de Dados Pessoais, por sua vez, compreende toda operação
    realizada com dados, como a coleta, produção, recepção, classificação, utilização, acesso,
    reprodução, transmissão, distribuição, processamento, arquivamento, armazenamento,
    eliminação, avaliação ou controle da informação, modificação, comunicação, transferência,
    difusão ou extração.
    </p>

    <p>
    Fica claro que a simples instalação e leitura de um cookie no dispositivo do
    usuário, que contenha ou não um identificador único, configura uma operação de
    tratamento de dados, exigindo, portanto, uma base legal robusta para sua legitimação e a
    devida comunicação ao titular, conforme os princípios da finalidade, adequação e
    necessidade estabelecidos pela legislação brasileira de proteção de dados.
    </p>

    <h3>3. CLASSIFICAÇÃO E TIPOS DE COOKIES IMPLEMENTADOS PELO CENTRO EDUCACIONAL HYARTE-ML</h3>

    <p>
    Para assegurar a máxima clareza e permitir que o titular exerça seu direito de
    escolha e controle, o CENTRO EDUCACIONAL HYARTE-ML classifica os cookies utilizados
    em suas plataformas de acordo com critérios técnicos de duração, origem e, sobretudo,
    em conformidade com o critério legal da finalidade do tratamento, que é determinante
    para a exigência de consentimento prévio do usuário.
    </p>

    <p>
        <strong>3.1 Classificação Quanto à Duração: Sessão e Persistentes</strong><br>
        Os cookies podem ser categorizados pelo tempo de permanência no dispositivo do usuário, dividindo-se fundamentalmente em:    
    </p>

    <p>
        <strong>3.1.1 Cookies de Sessão (ou Temporários):</strong> <br> São cookies que têm uma vida útil limitada e expiram automaticamente assim que o usuário fecha o navegador da web. Estes são cruciais para manter a experiência de navegação contínua em uma única visita, sendo tipicamente utilizados para autenticação e verificação de segurança durante a sessão ativa, garantindo, por exemplo, que, uma vez logado no sistema de gestão acadêmica, o usuário não precise inserir suas credenciais repetidamente em cada nova página que acesse.
    </p>

    <p><strong>3.1.2 Cookies Persistentes:</strong> <br> Estes cookies permanecem armazenados no dispositivo do usuário por um período de tempo predefinido que vai além do fechamento do navegador, sendo acionados a cada novo acesso ao website ou aplicativo. São utilizados para lembrar as preferências do usuário (como idioma ou configurações de acessibilidade) ou para fins de rastreamento comportamental de longo prazo, embora o CENTRO EDUCACIONAL HYARTE-ML restrinja severamente o uso de rastreamento no momento inicial, focando apenas em funcionalidades de segurança e preferências essenciais.</p>

    <p><strong>3.2 Classificação Quanto à Origem: Primários e de Terceiros</strong> <br>
A origem do cookie define quem é o responsável pela sua instalação e quem tem acesso aos dados coletados:</p>

    <p><strong>3.2.1 Cookies Primários (First-Party): </strong> <br> São aqueles instalados diretamente pelo domínio do CENTRO EDUCACIONAL HYARTE-ML, sendo lidos e utilizados exclusivamente pelo sistema da própria instituição. A maioria dos cookies essenciais e de autenticação utilizados pelo CENTRO EDUCACIONAL HYARTE-ML enquadram-se nesta categoria, pois estão diretamente ligados ao funcionamento interno e seguro da plataforma.</p>
    
    <p><strong>3.2.2 Cookies de Terceiros (Third-Party): </strong> <br> São cookies instalados no dispositivo do usuário por um domínio diferente daquele visitado, geralmente através de elementos incorporados na página (como ferramentas de análise, conteúdo de mídia social, ou plugins de agências de publicidade).</p>

    <p>O uso desta categoria exige cautela redobrada e, obrigatoriamente, o consentimento explícito do titular, uma vez que o tratamento subsequente dos dados é realizado por um terceiro, que atua como controlador ou operador externo.</p>

    <p>O CENTRO EDUCACIONAL HYARTE-ML compromete-se a monitorar e limitar o uso de cookies de terceiros, garantindo que, se forem usados, seja apenas para serviços de apoio operacional essenciais e com o devido contrato de tratamento de dados que exija conformidade com a LGPD.</p>

    <p><strong>3.3 Classificação Quanto à Finalidade e Bases Legais (Foco na LGPD)</strong> <br>
A classificação por finalidade é a mais relevante sob a perspectiva da LGPD, pois determina a base legal necessária para o tratamento de dados.</p>

    <p><strong>3.3.1 Cookies Estritamente Necessários (Essenciais e Autenticação)</strong> <br>
Estes são cookies indispensáveis para a operação básica do website ou aplicação, permitindo que o usuário navegue e utilize as funcionalidades essenciais, como acesso a áreas seguras, login, manutenção do estado da sessão e balanceamento de carga do servidor. Sem esses cookies, o sistema não funciona corretamente ou não atende a solicitações feitas pelo próprio usuário.</p>

<p>O tratamento de dados associado a esta categoria de cookies não depende do consentimento expresso, pois é fundamentado no legítimo interesse do CENTRO EDUCACIONAL HYARTE-ML em garantir a segurança e a funcionalidade técnica de seus sistemas, ou no cumprimento de contrato, especificamente na execução dos serviços solicitados pelo titular (Art. 7º, V ou IX, da LGPD).</p>

<p>Conforme delineado na análise prévia, o HYARTE-ML utiliza primariamente:</p>

<p>a) Cookies Essenciais, necessários para o funcionamento adequado do sistema, e</p>

<p>b) Cookies de Autenticação, que garantem que apenas usuários ativos e autorizados acessem as aplicações, mantendo a sessão segura por um período estipulado de até 2 horas, findo o qual expiram automaticamente por razões de segurança, em alinhamento com as boas práticas de proteção e autenticação segura (como o uso de bcrypt mencionado no contexto).</p>


<p><strong>3.3.2 Cookies de Funcionalidade e Preferência</strong> <br>
Estes cookies personalizam a experiência do usuário, lembrando escolhas anteriores feitas por ele, como idioma preferencial, região.</p>
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