<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Termos de privacidade - Atena</title>
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
        <h1 class="header-title">Termos de privacidade</h1>
        <div style="width:36px"></div>
    </div>

    <div class="content">

        <h2>Política de Privacidade do Centro Educacional HYARTE-ML</h2>

        <h3>1. Identificação do Controlador</h3>
        
        <p>O <strong>Centro Educacional HYARTE-ML</strong>, pessoa jurídica de direito privado, inscrita no CNPJ sob o nº 01.429.030/0001-66, com sede e administração principal na Rua Euridamas Avelino de Barros, 1400, Bairro Prado, Paracatu-MG, CEP 38602-002, doravante denominado simplesmente Instituição, atua como o Controlador dos dados pessoais coletados de seus alunos, responsáveis legais, docentes, colaboradores e demais usuários que interagem com seus serviços educacionais e plataformas digitais, incluindo expressamente o site institucional e o aplicativo Atena. O Controlador responsabiliza-se integralmente pelo tratamento de dados pessoais conforme as disposições da <strong>Lei Geral de Proteção de Dados Pessoais (Lei nº 13.709/2018)</strong> e demais normas aplicáveis.</p>

        <p>O compromisso desta Instituição com a privacidade e a proteção dos dados pessoais é absoluto, constituindo elemento essencial para a transparência e para a construção de um ambiente de confiança mútua, sempre respeitando a autodeterminação informativa dos titulares.</p>

        <ul>
            <li><strong>Centro Educacional HYARTE-ML</strong></li>
            <li><strong>CNPJ:</strong> 01.429.030/0001-66</li>
            <li><strong>Endereço:</strong> Rua Euridamas Avelino de Barros, 1400, Bairro Prado, Paracatu-MG CEP 38602-002</li>
            <li><strong>E-mail do DPO:</strong> <a href="mailto:encarregado.dpo@unitenas.edu.br">encarregado.dpo@unitenas.edu.br</a></li>
            <li><strong>Telefone:</strong> (38) 3672-3737</li>
        </ul>

        <h3>2. Finalidade do Tratamento</h3>
        <p>Os dados pessoais são coletados e tratados com finalidades específicas e legítimas, inerentes à prestação dos serviços educacionais, à manutenção da relação contratual e ao cumprimento de obrigações legais impostas ao setor de ensino.</p>

        <p>Especificamente, os dados pessoais rotineiramente coletados, que incluem variáveis como nome completo, CPF, data de nascimento, endereço, matrícula e e-mail institucional, são utilizados primariamente para a gestão acadêmica e administrativa, abrangendo a efetivação de matrícula e rematrícula, o gerenciamento de frequência e desempenho escolar, a emissão de históricos e diplomas, a comunicação de natureza institucional, a autenticação e o acesso a ambientes virtuais de aprendizagem e, em determinadas situações, para a interação e acesso a serviços de tecnologia educacional, como plataformas de Inteligência Artificial ou sistemas de bibliotecas virtuais integradas ao ambiente da Instituição.</p>
       
        <p>É importante ressaltar que os dados sensíveis, como informações de saúde ou biometria, são coletados apenas nas estritas hipóteses legais ou quando absolutamente essenciais para garantir a segurança, a acessibilidade ou o bem-estar dos alunos e colaboradores, sempre em observância do princípio da minimização.</p>

        <h3>3. Forma de Coleta e Armazenamento</h3>
        <p>A coleta de dados pessoais é realizada por diversos meios, sempre de forma transparente e com o conhecimento do titular ou de seu responsável legal, abrangendo a inserção manual de informações em formulários físicos e digitais durante os processos seletivos e de matrícula, bem como a coleta automatizada através de outro sistema interno de gestão educacional da Instituição, garantindo que o acesso a plataformas e serviços digitais seja restrito exclusivamente a usuários ativos e regularmente vinculados ao Centro Educacional HYARTE-ML.</p>
        <p>O armazenamento dos dados ocorre em ambientes controlados e seguros, utilizando servidores próprios ou serviços de hospedagem terceirizados de alta confiabilidade, os quais mantêm rigorosos padrões de segurança da informação.</p>
        <p>No que tange ao armazenamento digital, a Instituição emprega medidas técnicas robustas, incluindo o uso de algoritmos criptográficos como o bcrypt para a autenticação de credenciais de acesso, a aplicação contínua de ferramentas de análise de vulnerabilidades para identificação e correção de brechas de segurança, a implementação de mecanismos de limitação de requisições para mitigar ataques de negação de serviço e, fundamentalmente, a aplicação das práticas de desenvolvimento seguro preconizadas pela OWASP (Open Web Application Security Project), garantindo um ciclo de vida de desenvolvimento de software que prioriza a segurança.</p>
        <p>Os backups completos e incrementais são realizados periodicamente e armazenados de forma redundante, assegurando a recuperação tempestiva dos dados em caso de sinistros, e os dados específicos de acesso, como cookies, são armazenados apenas pelo tempo estritamente necessário para manter a sessão ativa, tipicamente não excedendo o período de duas horas, enquanto as informações contratuais e acadêmicas permanecem no banco de dados ativos enquanto o aluno ou colaborador mantiver vínculo com a Instituição.</p>
        
        <strong>4. COMPARTILHAMENTO DE DADOS</strong>
        
        <p>O Centro Educacional HYARTE-ML pauta o compartilhamento de dados pessoais pelo princípio da estrita necessidade e da finalidade determinada, garantindo que os dados sejam transferidos a terceiros apenas quando indispensáveis para a consecução dos objetivos educacionais, administrativos ou para o cumprimento de deveres legais ou regulatórios.</p>

        <p>Conforme a natureza do serviço prestado, os dados pessoais podem ser compartilhados com serviços terceirizados considerados essenciais para a operação da Instituição, tais como provedores de hospedagem de sistemas (exemplo de um provedor genérico: Localweb, ou equivalente), plataformas de e-mail institucional, sistemas de gestão financeira e administrativa, plataformas de avaliação de desempenho estudantil, e órgãos públicos ou reguladores do setor educacional ou fiscal, mediante solicitação ou obrigação legal.</p>
       
        <p>Em todas as hipóteses de transferência, a Instituição exige contratualmente que as partes receptoras dos dados mantenham o mesmo nível de segurança e confidencialidade adotado internamente, obrigando-as a respeitar esta Política de Privacidade e a Lei nº 13.709/2018 (LGPD).</p>
       
        <p>É fundamental destacar que a Instituição não realiza, como regra geral, a transferência internacional de dados pessoais, salvo se estritamente necessário para a utilização de serviços digitais terceirizados cuja infraestrutura de armazenamento esteja localizada fora do território nacional, caso em que serão adotadas as salvaguardas e cláusulas contratuais padronizadas exigidas pela Autoridade Nacional de Proteção de Dados (ANPD), visando garantir um grau de proteção equivalente ao brasileiro.</p>
        
        <strong>5. DIREITOS DO TITULAR</strong>

        <p>Em total conformidade com o artigo 18 da Lei nº 13.709/2018 (LGPD), o titular dos dados possui uma gama de direitos que podem ser exercidos mediante requisição formal dirigida ao Encarregado de Dados (DPO) da Instituição.</p>

        <p>Tais direitos incluem, mas não se limitam, ao direito à confirmação da existência de tratamento de seus dados pessoais, bem como o direito de acesso a esses dados, a possibilidade de correção de dados incompletos, inexatos ou desatualizados, e o direito à anonimização, bloqueio ou eliminação de dados desnecessários, excessivos ou tratados em desconformidade com o disposto na LGPD.</p>

        <p>O titular também pode solicitar a portabilidade dos dados a outro fornecedor de serviço ou produto, mediante requerimento expresso e observados os segredos comercial e industrial, e requerer a eliminação dos dados pessoais tratados com base no seu consentimento, ressalvadas as obrigações legais de retenção.</p>

        <p>Adicionalmente, é assegurado o direito à informação sobre as entidades públicas e privadas com as quais o Controlador realizou uso compartilhado de dados, o direito à informação sobre a possibilidade de não fornecer consentimento e sobre as consequências da negativa, e o direito de revogar o consentimento a qualquer tempo, sendo que tal revogação não afetará a legalidade do tratamento realizado anteriormente à sua efetivação.</p>

        <p>O canal de atendimento formal para o exercício de todos os direitos do titular é o e-mail específico do DPO: encarregado.dpo@unitenas.edu.br ou o telefone (38) 3672-3737, através dos quais a Instituição se compromete a responder às solicitações de forma precisa e em prazo razoável, conforme os ditames legais.</p>


        <strong>6. BASE LEGAL DO TRATAMENTO</strong>

        <p>O tratamento dos dados pessoais executado pelo Centro Educacional HYARTE-ML encontra-se devidamente ancorado nas bases legais estabelecidas no artigo 7º da Lei nº 13.709/2018 (LGPD), sendo que a Instituição emprega a base legal mais adequada para cada tipo e ciclo de vida do dado tratado.</p>

        <p>As principais bases legais utilizadas no contexto educacional e administrativo incluem majoritariamente o Consentimento do titular, especialmente no momento de adesão a serviços opcionais ou para o tratamento de certas imagens e voz em atividades não essenciais ao contrato educacional, e a Execução do Contrato ou de procedimentos preliminares relacionados ao contrato de prestação de serviços educacionais, abrangendo a totalidade das atividades de ensino, matrícula, avaliação e emissão de documentação escolar.</p>
      
        <p>Outras bases igualmente relevantes são o Cumprimento de Obrigação Legal ou Regulatória pelo Controlador, indispensável para o fornecimento de informações exigidas por órgãos fiscalizadores da educação (como o MEC) ou para o cumprimento de obrigações fiscais e trabalhistas, e o Legítimo Interesse do Controlador, aplicado estritamente para finalidades de apoio e promoção das atividades da Instituição, como a melhoria da qualidade do ensino, a proteção ao crédito e a prevenção à fraude, desde que os direitos e liberdades fundamentais do titular não prevaleçam.</p>
      

        <p>A Instituição mantém um registro detalhado das operações de tratamento e das bases legais correspondentes, em observância ao princípio da prestação de contas.</p>

        <strong>7. PRAZO DE RETENÇÃO E ELIMINAÇÃO</strong>
        
        <p>Os dados pessoais coletados pela Instituição de Ensino são retidos apenas pelo período estritamente necessário para cumprir as finalidades para as quais foram coletados, em estrita observância do princípio da adequação e da necessidade.</p>

        <p>Dados de natureza acadêmica e contratual, incluindo histórico escolar, notas e registros de matrícula, são mantidos enquanto o aluno estiver ativamente vinculado ao Centro Educacional HYARTE-ML e, após o término do vínculo (graduação, transferência ou desistência), pelo prazo exigido pela legislação educacional e pelos órgãos reguladores (e.g., MEC), que pode se estender por muitos anos em razão da necessidade de comprovação de conclusão de curso e emissão de diplomas.</p>

        <p>A exclusão ou anonimização dos dados pessoais é executada mediante solicitação formal do aluno ou responsável legal, desde que inexista uma obrigação legal ou regulatória da Instituição que exija a retenção dos dados por período determinado (por exemplo, guarda de documentos fiscais ou registros acadêmicos obrigatórios).</p>

        <p>Caso não haja solicitação expressa de eliminação por parte do titular e cessadas as obrigações legais de guarda, os dados são eliminados ou anonimizados de forma segura dos bancos de dados ativos, sendo mantidos apenas em backups pelo ciclo de vida definido para a retenção de dados históricos, garantindo que o processo de eliminação seja irreversível, conforme as melhores práticas de destruição de mídias digitais.</p>

        <strong>8. COOKIES E TECNOLOGIAS DE RASTREAMENTO</strong>

        <p>O sistema de acesso e as plataformas digitais da Instituição utilizam tecnologias de rastreamento, notadamente cookies, que são pequenos arquivos de texto armazenados no dispositivo do usuário durante a navegação, com a finalidade exclusiva de otimizar a experiência digital e garantir a funcionalidade essencial dos serviços oferecidos.</p>

        <p>A Instituição adota apenas cookies essenciais (ou estritamente necessários), que são imprescindíveis para a autenticação do usuário, a manutenção da sessão ativa e para permitir que o usuário navegue pelo sistema de forma segura e eficiente, sem os quais os serviços on-line não poderiam ser fornecidos adequadamente. Não há, portanto, uso de cookies analíticos para monitoramento detalhado do comportamento ou de cookies de marketing para direcionamento de publicidade.</p>

        <p>O usuário tem a faculdade de gerenciar as configurações de cookies através de seu navegador, mas é advertido de que a desativação dos cookies essenciais poderá comprometer a funcionalidade e o acesso aos sistemas restritos da Instituição, sendo, por vezes, condição para a utilização plena das ferramentas educacionais.</p>

        <p>A Instituição garante que qualquer tecnologia de rastreamento implementada segue os princípios da privacidade por padrão e por design, visando sempre a mínima intrusão e a máxima segurança das informações.</p>
        
        
        <strong>9. SEGURANÇA E PROTEÇÃO</strong>
        
        <p>A segurança e a proteção dos dados pessoais constituem prioridade inegociável para o Centro Educacional HYARTE-ML, que implementa um conjunto rigoroso e contínuo de medidas técnicas e administrativas aptas a proteger os dados de acessos não autorizados, situações acidentais ou ilícitas de destruição, perda, alteração, comunicação ou qualquer forma de tratamento inadequado ou ilícito.</p>
        
        <p>O conjunto de medidas de segurança empregado baseia-se nas melhores práticas reconhecidas no mercado e segue as diretrizes da LGPD, incluindo: a criptografia de dados em trânsito e em repouso sempre que aplicável; o monitoramento constante da infraestrutura tecnológica para detecção e resposta rápida a incidentes de segurança; a prevenção de vulnerabilidades através da aplicação de patches de segurança e da observância dos guias de segurança OWASP Top 10 em todo o ciclo de vida de desenvolvimento; a implementação de fortes controles de acessos baseados no princípio do menor privilégio, garantindo que apenas o pessoal autorizado acesse os dados estritamente necessários para suas funções; e, como já mencionado, a realização de backups regulares e estratégias de recuperação de desastres.</p>
        
        <p>A Instituição promove o treinamento e a conscientização de seus colaboradores sobre a importância da proteção de dados e sobre os procedimentos de segurança, reforçando a cultura de privacidade e garantindo que o tratamento de dados pessoais seja realizado com o máximo de responsabilidade e diligência, visando a integridade, a confidencialidade e a disponibilidade das informações.</p>
        

        <strong>10.ALTERAÇÕES E ATUALIZAÇÕES</strong>

        <p>Esta Política de Privacidade poderá ser revista e atualizada periodicamente pelo Centro Educacional HYARTE-ML em decorrência de alterações na legislação aplicável, na estrutura da Instituição, na introdução de novas tecnologias educacionais ou na modificação dos processos de tratamento de dados pessoais.</p>

        <p>Toda e qualquer alteração substancial que afete a forma como os dados são coletados, utilizados ou compartilhados será comunicada aos usuários e titulares de forma clara e tempestiva, majoritariamente via e-mail institucional ou por meio de aviso proeminente nas plataformas de acesso, concedendo aos titulares a oportunidade de reverem os termos e manifestarem sua concordância, se necessário, antes que as alterações entrem em vigor, reafirmando o compromisso com a transparência.</p>

        <strong>11.FORO E JURISDIÇÃO</strong>

        <p>Para dirimir quaisquer controvérsias, divergências ou questões oriundas do presente instrumento e do tratamento de dados pessoais nele previsto, fica eleito o foro da Comarca de Paracatu/MG, com renúncia expressa a qualquer outro, por mais privilegiado que seja, observando-se a faculdade conferida aos titulares pela Lei nº 13.709/2018 de apresentar reclamações diretamente perante a Autoridade Nacional de Proteção de Dados (ANPD).</p>

        <p><strong>Última atualização:</strong> 16 de outubro de 2025</p>
        
       



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