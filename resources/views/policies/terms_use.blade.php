<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Termos de uso - Atena</title>
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
        <h1 class="header-title">Termos de uso</h1>
        <div style="width:36px"></div>
    </div>


    <div class="content">
        <h2>TERMOS DE USO E CONDIÇÕES GERAIS DE ACESSO AOS SERVIÇOS DIGITAIS DO CENTRO EDUCACIONAL HYARTE-ML</h2>

        <p>O presente instrumento, denominado Termos de Uso e Condições Gerais de Acesso, tem por finalidade precípua regular o acesso, a navegação e a utilização de todos os sistemas, sites, plataformas digitais, incluindo expressamente o site institucional e o aplicativo Atena, bem como quaisquer outros ambientes virtuais de propriedade ou sob gestão do Centro Educacional HYARTE-ML (doravante denominado simplesmente “CENTRO EDUCACIONAL HYARTE-ML” ou “Controlador”). Este documento estabelece as obrigações, responsabilidades e direitos tanto da Instituição quanto dos Usuários, em estrita conformidade com a legislação brasileira vigente, notadamente o Marco Civil da Internet (Lei nº 12.965/2014) e a Lei Geral de Proteção de Dados Pessoais (Lei nº 13.709/2018).</p>

        <p>Este documento representa um contrato vinculante entre o Usuário e o CENTRO EDUCACIONAL HYARTE-ML, sendo imprescindível que todo e qualquer indivíduo que pretenda utilizar os serviços digitais da Instituição — inclusive o site institucional e o aplicativo Atena — realize uma leitura atenta, integral e detida de todas as disposições aqui contidas. O acesso contínuo, a navegação ou o login nas plataformas implica manifestação de concordância incondicional com as presentes condições, formalizando a aceitação plena das regras e diretrizes aqui estabelecidas.</p>


        <strong>1. DA ACEITAÇÃO E FORMALIZAÇÃO DO VÍNCULO JURÍDICO</strong>

        <p>
        <strong>1.1 Natureza Contratual e Manifestação de Vontade</strong>
        <br></p>

        <p>A utilização de qualquer serviço digital oferecido pelo CENTRO EDUCACIONAL HYARTE-ML, seja por meio de consulta, cadastro, fornecimento de informações, acesso ao portal do aluno, plataformas de ensino a distância (EAD), ou qualquer outra funcionalidade que exija identificação eletrônica, configura, perante a lei civil brasileira, uma adesão formal e irrevogável às condições explicitadas nestes Termos de Uso.</p>

        <p>Esta aceitação é manifestada de maneira inequívoca pelo clique no botão de aceite, pela realização do login e pela subsequente navegação nos ambientes virtuais, presumindo o CENTRO EDUCACIONAL HYARTE-ML que o Usuário possui capacidade legal plena para firmar este compromisso, sendo maior de 18 (dezoito) anos e detentor de discernimento para a prática dos atos da vida civil, ressalvado o acesso por menores emancipados ou, ainda, devidamente assistidos ou representados pelos pais ou responsáveis legais, situação em que a responsabilidade pela integral observância dos Termos recairá sobre o representante legal, conforme previsto no Código Civil Brasileiro.</p>

        <strong>1.2 Condição de Adesão e Integração Normativa</strong>

        <p>O presente Termo de Uso atua como condição preliminar para o aproveitamento dos recursos digitais da Instituição e, por suas características, deve ser interpretado em conjunto com a Política de Privacidade e de Cookies do CENTRO EDUCACIONAL HYARTE-ML, que detalha os procedimentos relativos à coleta, tratamento, armazenamento e proteção dos Dados Pessoais, bem como com quaisquer outros regulamentos específicos que venham a ser aplicados a serviços particularizados, como, por exemplo, contratos de prestação de serviços educacionais ou regimentos internos que possuam reflexos no ambiente digital.</p>

        <p>A recusa ou a não aceitação de qualquer cláusula integral ou parcial deste instrumento ou da Política de Privacidade impossibilita o Usuário de efetuar o acesso aos sistemas restritos do CENTRO EDUCACIONAL HYARTE-ML, e qualquer tentativa de acesso não autorizado sujeitará o indivíduo às penalidades cíveis e criminais cabíveis, nos termos da legislação pátria.</p>

        <strong>2. DAS DEFINIÇÕES E DA TERMINOLOGIA JURÍDICA APLICÁVEL</strong>

        <p>Para o entendimento preciso e a interpretação coerente das cláusulas aqui dispostas, em harmonia com as normas brasileiras de proteção de dados e direitos digitais, adotam-se as seguintes definições, que serão utilizadas no singular ou plural, conforme o contexto:</p>

        <p><strong>2.1. Usuário:</strong> Toda e qualquer pessoa física, devidamente cadastrada e com vínculo ativo, seja ele acadêmico, administrativo ou colaborador, que acessa e utiliza as plataformas digitais do CENTRO EDUCACIONAL HYARTE-ML, responsabilizando-se integralmente pelo uso que faz de suas credenciais e dos serviços disponibilizados, incluindo, mas não se limitando a, alunos, professores, tutores e corpo técnico-administrativo.</p>

        <p><strong>2.2. Controlador:</strong>O CENTRO EDUCACIONAL HYARTE-ML, pessoa jurídica devidamente inscrita no Cadastro Nacional da Pessoa Jurídica sob o número 01.428.030/0001-66, com sede em Rua Euridamas Avelino de Barros, 1400, Bairro Prado, Paracatu-MG CEP 38602-002, a quem compete as decisões referentes ao tratamento dos Dados Pessoais dos Usuários, nos termos do Artigo 5º, inciso VI, da Lei nº 13.709/2018 (LGPD), sendo o principal responsável pela segurança e pelo cumprimento das obrigações legais no tratamento dessas informações.</p>

        <p><strong>2.3. Plataforma (ou Sistemas):</strong>O conjunto de sistemas, sites institucionais, portais do estudante e do professor, Learning Management Systems (LMS), aplicativos móveis e quaisquer outros serviços digitais desenvolvidos ou licenciados pelo HYARTE-ML para fins pedagógicos, acadêmicos, administrativos ou de comunicação institucional.</p>
       
        
        <p><strong>2.4. Dados</strong>Pessoais: Qualquer informação relacionada a pessoa natural identificada ou identificável, conforme a definição legal da LGPD, o que engloba dados cadastrais (nome, CPF, e-mail institucional), dados acadêmicos (matrícula, notas, frequência) e dados de navegação (endereço IP, logs de acesso).</p>
        
        <p><strong>2.5. Credenciais de Acesso:</strong> O conjunto de informações privativas do Usuário, usualmente composto por login, senha (password) e, quando aplicável, tokens ou códigos de autenticação multifator, que permitem o acesso aos ambientes restritos das Plataformas, sendo a sua custódia e sigilo de responsabilidade exclusiva do Usuário, conforme os deveres estabelecidos no Marco Civil da Internet e na LGPD.</p>
        
        <p><strong>2.6. Tratamento:</strong> Toda operação realizada com Dados Pessoais, como as que se referem a coleta, produção, recepção, classificação, utilização, acesso, reprodução, transmissão, distribuição, processamento, arquivamento, armazenamento, eliminação, avaliação ou controle da informação, modificação, comunicação, transferência, difusão ou extração, conforme o Artigo 5º, inciso X, da LGPD, sendo todas essas atividades realizadas pelo HYARTE-ML em conformidade com as diretrizes legais.</p>
       
        <strong>3. DO OBJETO E ABRANGÊNCIA DOS SERVIÇOS DIGITAIS</strong>
       
        <p>O objeto central destes Termos é a regulamentação do uso e da interação do Usuário com as Plataformas digitais do HYARTE-ML, que servem como ferramentas essenciais para a concretização dos fins educacionais e administrativos da Instituição. Estes serviços são fornecidos com o intuito primordial de facilitar a comunicação acadêmica, o acesso a materiais didáticos, a gestão de informações curriculares, a realização de atividades de ensino a distância e o exercício das funções administrativas e docentes inerentes ao vínculo estabelecido.</p>

        <p>O CENTRO EDUCACIONAL HYARTE-ML, enquanto provedor de aplicações de internet no contexto educacional, se compromete a zelar pela qualidade técnica e pela segurança dos Sistemas, adotando as medidas necessárias para o cumprimento dos princípios da proteção de dados e da segurança da informação, em observância ao Artigo 7º do Marco Civil da Internet. Todavia, a Instituição esclarece que o fornecimento ininterrupto e livre de falhas (Artigo 20 do Código de Defesa do Consumidor, aplicado por analogia na relação de serviço digital) é uma meta e não uma garantia absoluta, dado que a operação das plataformas depende de fatores externos e inerentes à internet, como a qualidade da conexão do Usuário e a estabilidade da infraestrutura de telecomunicações de terceiros.</p>

        <strong>4. CONDIÇÕES DE ACESSO, SEGURANÇA E AUTENTICAÇÃO</strong>

        <p>O acesso às áreas restritas das Plataformas do CENTRO EDUCACIONAL HYARTE-ML é estritamente pessoal e intransferível, sendo permitido apenas a Usuários que possuam um vínculo ativo e válido com a Instituição e que tenham completado o processo de cadastro e autenticação de forma satisfatória. A ativação da conta exige o fornecimento de informações cadastrais verídicas e atualizadas, cuja manutenção da exatidão é dever contínuo do Usuário, conforme estabelece o Artigo 19 do Código Civil, sob pena de suspensão de acesso por inconsistência de dados.</p>

        <p>O processo de autenticação é fundamental para garantir a integridade e a confidencialidade das informações tratadas, razão pela qual o CENTRO EDUCACIONAL HYARTE-ML emprega mecanismos de segurança robustos, incluindo, mas não se limitando a, protocolos de autenticação segura e a utilização de criptografia (bcrypt) na gestão das senhas, além do uso de cookies estritamente essenciais para a manutenção da sessão e o reconhecimento do Usuário, em total observância ao dever de segurança previsto no Artigo 46 da LGPD.</p>

        <p>O Usuário está cientificado de que a responsabilidade pela guarda, sigilo e não compartilhamento dessas Credenciais de Acesso é de sua total e exclusiva alçada, sendo vedada, sob quaisquer pretextos, a cessão, o empréstimo, a venda ou a disponibilização da senha ou login a terceiros, mesmo que integrantes da mesma família ou instituição, configurando o compartilhamento uma grave violação destes Termos e um potencial risco à segurança de dados de toda a comunidade acadêmica.</p>

        <p>O CENTRO EDUCACIONAL HYARTE-ML reserva-se o direito de monitorar logs de acesso para identificar padrões de uso suspeito ou compartilhamento indevido de contas, podendo aplicar sanções imediatas, incluindo a suspensão temporária ou definitiva do acesso.</p>


        <strong>5. DOS DEVERES E DAS RESPONSABILIDADES DO USUÁRIO</strong>

        <p>O Usuário deve conduzir-se de modo ético, diligente e em estrita conformidade com a legislação brasileira ao utilizar as Plataformas do CENTRO EDUCACIONAL HYARTE-ML, entendendo que o ambiente digital da Instituição é uma extensão do ambiente físico acadêmico e, portanto, exige o respeito às normas de conduta e urbanidade aplicáveis ao contexto educacional.</p>

        <p>O desrespeito a estes deveres poderá implicar a aplicação de sanções administrativas, civis e penais, dependendo da gravidade da conduta.</p>


        <strong>5.1 Dever de Conduta Ética e Legal</strong>

        <p>O Usuário compromete-se a não praticar ou fomentar qualquer atividade que configure uso indevido, abusivo ou ilícito das Plataformas, o que inclui, mas não se restringe a:</p>

        <p>a) Inserir, transmitir ou difundir conteúdo difamatório, calunioso, discriminatório, obsceno ou que incite à violência ou à prática de atos ilícitos;
b) Realizar ataques cibernéticos, tentar burlar os sistemas de segurança ou provocar interrupção no serviço dos demais usuários ou da Instituição;
c) Enviar mensagens não solicitadas (Spam), que violem a privacidade de terceiros ou o direito de resposta, conforme previsto no Artigo 9º, § 2º, do Marco Civil da Internet;
d) Utilizar ferramentas ou artifícios tecnológicos que visem à alteração não autorizada de dados, notas, registros acadêmicos ou informações administrativas, caracterizando fraude ou falsidade ideológica.</p>


<strong>5.2 Responsabilidade pela Informação e Pelo Conteúdo Inserido</strong>

<p>O Usuário é o único e exclusivo responsável pela veracidade, exatidão e licitude das informações que fornece durante o cadastro e de todo o conteúdo gerado, inserido ou compartilhado por ele nas Plataformas, incluindo trabalhos acadêmicos, comunicações em fóruns, chats e e-mails institucionais.</p>

<p>O CENTRO EDUCACIONAL HYARTE-ML não se responsabiliza pelo conteúdo produzido pelos Usuários, mas reserva-se o direito, conforme o Marco Civil da Internet (Art. 19), de adotar as medidas necessárias para remover conteúdo manifestamente ilícito, após notificação judicial ou extrajudicial, ou em cumprimento a determinações legais, garantindo, todavia, o sigilo e a inviolabilidade da vida privada e da intimidade (Art. 3º e Art. 7º do MCI) do Usuário.</p>
        
<strong>6. PROPRIEDADE INTELECTUAL, DIREITOS AUTORAIS E CESSÃO DE USO</strong>
<p>O conjunto de elementos que compõem as Plataformas, incluindo a arquitetura de software, o código-fonte, a identidade visual (layout), as marcas, os logotipos, os nomes de domínio, e todo o conteúdo material didático, audiovisual e textual elaborado pela Instituição ou a ela licenciado, constitui propriedade intelectual exclusiva do CENTRO EDUCACIONAL HYARTE-ML e está integralmente protegido pela Lei de Direitos Autorais (Lei nº 9.610/98) e pela Lei da Propriedade Industrial (Lei nº 9.279/96).</p>

<p>É terminantemente proibida ao Usuário a reprodução, distribuição, modificação, adaptação, download, exibição pública ou utilização econômica, total ou parcial, de qualquer material protegido por direitos autorais pertencente ao CENTRO EDUCACIONAL HYARTE-ML, sem a prévia e expressa autorização formal por escrito da Instituição. Qualquer conduta que viole os direitos de propriedade intelectual aqui estabelecidos sujeitará o infrator às sanções cíveis, criminais e administrativas, incluindo ações de indenização por perdas e danos e apuração de crime de violação de direito autoral.</p>

<p>O Usuário concede ao CENTRO EDUCACIONAL HYARTE-ML uma licença de uso gratuita, não exclusiva, irrevogável e global (limitada ao âmbito da atividade educacional e de pesquisa) sobre qualquer conteúdo ou material (como trabalhos acadêmicos, teses e posts em fóruns) por ele produzido e inserido nas Plataformas, desde que esse conteúdo se refira às atividades educacionais da Instituição, permitindo ao CENTRO EDUCACIONAL HYARTE-ML utilizar, reproduzir e distribuir o material para fins acadêmicos, de avaliação, de melhoria de processos pedagógicos e de gerenciamento interno, sempre respeitando os créditos de autoria moral do Usuário, conforme previsto na legislação de direitos autorais.</p>

<strong>7. PROTEÇÃO DE DADOS PESSOAIS E CONFORMIDADE COM A LGPD</strong>

<p>O CENTRO EDUCACIONAL HYARTE-ML assume o compromisso solene de realizar o Tratamento de Dados Pessoais de seus Usuários com a máxima diligência, transparência, segurança e em estrita conformidade com a Lei nº 13.709/2018 (Lei Geral de Proteção de Dados Pessoais - LGPD), reconhecendo a fundamentalidade dos direitos à privacidade e à autodeterminação informativa.</p>


<strong>7.1. Finalidade e Base Legal do Tratamento</strong>

<p>O Tratamento dos Dados Pessoais Coletados visa primordialmente à execução e ao cumprimento de obrigações decorrentes do contrato de prestação de serviços educacionais firmado entre o Usuário e o CENTRO EDUCACIONAL HYARTE-ML, à satisfação de obrigações legais e regulatórias impostas às instituições de ensino, à realização de políticas públicas e ao atendimento dos interesses legítimos da Instituição para a melhoria de seus serviços, sempre dentro dos limites e expectativas legítimas do Usuário.</p>

<p>Especificamente, o Controlador trata Dados Pessoais com base nas seguintes hipóteses legais previstas no Artigo 7º da LGPD:</p>


<p>a) Para a execução de contrato ou de procedimentos preliminares relacionados a contrato de que seja parte o titular, a pedido do titular dos dados (Art. 7º, V);
b) Para o cumprimento de obrigação legal ou regulatória pelo Controlador (Art. 7º, II);
c) Quando necessário para atender aos interesses legítimos do Controlador ou de terceiros, exceto no caso de prevalecerem direitos e liberdades fundamentais do titular que exijam a proteção dos dados pessoais (Art. 7º, IX).</p>

<strong>7.2. Direitos do Titular de Dados</strong>
<p>O CENTRO EDUCACIONAL HYARTE-ML assegura plenamente ao Usuário, na qualidade de Titular dos Dados, o exercício dos direitos previstos no Artigo 18 da LGPD, que incluem, mas não se limitam, ao direito de confirmação da existência de tratamento, de acesso aos dados, de correção de dados incompletos, inexatos ou desatualizados, de anonimização, bloqueio ou eliminação de dados desnecessários ou tratados em desconformidade com a legislação, e o direito de revogação do consentimento, quando esta for a base legal aplicável.</p>

<p>Estes direitos deverão ser exercidos mediante solicitação formal e justificada junto ao Encarregado pelo Tratamento de Dados Pessoais (Data Protection Officer – DPO) do CENTRO EDUCACIONAL HYARTE-ML, cujos canais de comunicação estão detalhados na Política de Privacidade.</p>

<strong>7.3. Registro de Acesso e Logs</strong>


<p>Em estrita observância ao disposto no Artigo 15 do Marco Civil da Internet, o HYARTE-ML compromete-se a manter o registro de acesso às suas aplicações — incluindo data e hora de uso e endereço de IP do Usuário — sob sigilo, em ambiente controlado e de segurança, pelo prazo estabelecido pela legislação, podendo ser fornecido apenas mediante ordem judicial, conforme a regulamentação do MCI. Estes logs são essenciais para fins de segurança, rastreabilidade e prova em eventuais investigações de incidentes ou violações de segurança.</p>

<strong>8. LIMITAÇÃO E EXCLUSÃO DE RESPONSABILIDADE</strong>

<p>O CENTRO EDUCACIONAL HYARTE-ML empenha-se em manter suas Plataformas acessíveis e com alto nível de segurança. Não obstante, o Usuário reconhece e aceita que, por tratar-se de ambiente digital e dependente de infraestrutura de terceiros e da rede mundial de computadores, a Instituição não pode ser responsabilizada integralmente por certos eventos, estando sua responsabilidade limitada conforme as disposições a seguir, em observância ao Código Civil e ao Marco Civil da Internet.</p>


<strong>8.1. Falhas Operacionais e Fatores Externos</strong>

<p>O CENTRO EDUCACIONAL HYARTE-ML não se responsabiliza por quaisquer danos ou prejuízos sofridos pelo Usuário decorrentes de: <br>
a) Falhas técnicas na internet ou na rede de telecomunicações do Usuário, lentidão, interrupções ou indisponibilidade dos serviços por períodos prolongados que sejam causados por circunstâncias alheias ao controle direto da Instituição (força maior ou caso fortuito);
b) Uso indevido, incorreto ou negligente das Plataformas pelo Usuário, incluindo a incapacidade de usar os serviços ou a perda de dados resultante de falhas nos equipamentos ou software do próprio Usuário;
c) Ataques cibernéticos, invasões ou uso não autorizado das Credenciais de Acesso do Usuário por terceiros, desde que o CENTRO EDUCACIONAL HYARTE-ML tenha adotado as medidas de segurança adequadas e razoáveis para a proteção do sistema, cabendo ao Usuário a responsabilidade primária pela guarda de suas senhas.
</p>

<strong>8.2. Conteúdo de Terceiros e Links Externos</strong>

<p>As Plataformas do CENTRO EDUCACIONAL HYARTE-ML podem conter links ou referências a sites e conteúdos de terceiros. A inclusão desses links não implica qualquer endosso, representação ou garantia por parte do CENTRO EDUCACIONAL HYARTE-ML sobre a qualidade, segurança ou veracidade do conteúdo externo, sendo o Usuário o único responsável por acessar esses ambientes sob sua conta e risco.</p>

<p>A Instituição se exime de qualquer responsabilidade por perdas ou danos causados pelo acesso a conteúdos gerados por terceiros ou por falhas na segurança externa, reforçando a necessidade de diligência do Usuário ao navegar na internet.</p>


<strong>9. SUSPENSÃO, ENCERRAMENTO E SANÇÕES</strong>

<p>O acesso e a utilização das Plataformas pelo Usuário estão condicionados à permanência do vínculo ativo com o CENTRO EDUCACIONAL HYARTE-ML e à estrita observância destes Termos. A Instituição detém o direito de suspender ou encerrar o acesso do Usuário de forma unilateral, imediata e temporária ou definitiva, mediante prévia comunicação, nas seguintes hipóteses, sem prejuízo da aplicação de outras sanções cabíveis, conforme o Regimento Interno e o Código Civil:</p>
<p>
<strong>9.1. Violação dos Termos: Em caso de violação manifesta, grave ou reiterada de qualquer disposição destes Termos de Uso, da Política de Privacidade ou de regulamentos internos aplicáveis, incluindo a suspeita robusta de compartilhamento de credenciais ou a prática de atividades ilícitas, o que põe em risco a integridade e a segurança do ecossistema digital da Instituição.</strong>
</p>

<p><strong>9.2. Cessação do Vínculo Institucional:</strong> 
Quando o Usuário tiver seu vínculo acadêmico (ex. formatura, trancamento, abandono) ou laboral (ex. demissão, rescisão contratual) encerrado com o CENTRO EDUCACIONAL HYARTE-ML, o acesso será revogado automaticamente após o período de carência administrativa necessário para a conclusão das migrações de dados e documentos finais, momento em que o CENTRO EDUCACIONAL HYARTE-ML procederá, se for o caso e conforme a LGPD, à eliminação dos dados quando esgotada a finalidade do tratamento ou o prazo legal de guarda.
</p>

<p><strong>9.3.</strong> A suspensão ou encerramento do acesso por violação não exime o Usuário da responsabilidade civil ou criminal pelos atos praticados durante a utilização das Plataformas, podendo o HYARTE-ML buscar o ressarcimento por quaisquer danos ou custos incorridos em função da conduta irregular do Usuário.</p>

<p><strong>10. ATUALIZAÇÕES, REVISÃO E VIGÊNCIA DOS TERMOS</strong> O CENTRO EDUCACIONAL HYARTE-ML, em sua constante busca por aprimoramento dos serviços, adaptação às evoluções tecnológicas e manutenção da conformidade legal, reserva-se o direito de revisar, alterar ou complementar, a qualquer tempo e por sua exclusiva discricionariedade, o conteúdo dos presentes Termos de Uso. Esta faculdade está fundamentada na dinâmica do ambiente digital e na necessidade de atualização perante novas exigências regulatórias, especialmente aquelas provenientes da Autoridade Nacional de Proteção de Dados (ANPD).</p>

<p>As alterações entrarão em vigor imediatamente após sua publicação nas Plataformas, sendo que o CENTRO EDUCACIONAL HYARTE-ML envidará esforços razoáveis para comunicar os Usuários sobre as modificações substanciais por meio de aviso nos próprios sistemas, por e-mail institucional ou por outros canais de comunicação eficazes.</p>

<p>A continuidade do uso das Plataformas após a comunicação das modificações será interpretada como manifestação tácita e inequívoca de concordância do Usuário com os novos Termos, vinculando-o às novas disposições.</p>

<p>Caso o Usuário discorde das alterações, deverá cessar imediatamente a utilização dos serviços e comunicar formalmente a Instituição, sabendo que a descontinuidade do acesso pode afetar o cumprimento das obrigações acadêmicas ou administrativas inerentes ao seu vínculo.</p>

<p><strong>11. DISPOSIÇÕES GERAIS E FORO DE ELEIÇÃO</strong>
<br>
<strong>11.1. Integralidade do Acordo</strong>
Estes Termos de Uso, em conjunto com a Política de Privacidade e Cookies e contratos específicos acessados através das Plataformas, constituem o acordo integral entre o Usuário e o CENTRO EDUCACIONAL HYARTE-ML no que se refere ao uso dos serviços digitais, prevalecendo sobre quaisquer comunicações, acordos verbais ou propostas prévias ou contemporâneas.
<br>
A eventual declaração de invalidade ou inexequibilidade de qualquer cláusula pela autoridade competente não afetará a validade e a exequibilidade das demais disposições, que permanecerão em pleno vigor.
</p>

<strong>11.2. Lei Aplicável</strong>

<p>O presente instrumento será regido e interpretado em conformidade com as leis da República Federativa do Brasil, em especial o Código Civil Brasileiro, o Código de Defesa do Consumidor (aplicado subsidiariamente no que couber), o Marco Civil da Internet (Lei nº 12.965/2014) e a Lei Geral de Proteção de Dados Pessoais (Lei nº 13.709/2018), que conformam todo o arcabouço normativo para as relações jurídicas no ambiente digital brasileiro.</p>

<strong>11.3. Foro de Jurisdição</strong>

<p>Para dirimir quaisquer controvérsias, dúvidas ou litígios decorrentes direta ou indiretamente destes Termos de Uso, as Partes elegem, com exclusão de qualquer outro, por mais privilegiado que seja ou venha a ser, o Foro da Comarca de Paracatu, no Estado de Minas Gerais, em consonância com a cláusula de eleição de foro prevista no Termo original e ratificando a jurisdição brasileira para a solução de conflitos.</p>

<span>
    <strong>
    Última atualização: </strong>16 de outubro de 2025
</span>




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