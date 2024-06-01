<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="webroot/img/favicon.ico">
    <title>KeyAnyWhere</title>
    <link href="/webroot/css/bootstrap.min.css" rel="stylesheet">
    <link href="webroot/css/estilizacao.css" rel="stylesheet">
</head>
<body>
  <div class="container ">
    <br>
    <div class="text-center">
      <img src="webroot/img/logo-kaw.png">
    </div>

    <h1>O que é o KeyAnyWhere?</h1>
    <p>
      KeyAnyWhere ou KAW, é um gerenciador de senha, focado nas funcionalidades essenciais de um chaveiro. Você deve baixar e executar a aplicação na sua infraestrutura.<br>
      Fique tranquilo, os <a href="https://github.com/arthusantiago/KeyAnyWhere/wiki/1%E2%80%90-Requisitos-m%C3%ADnimos" target="_blank">requisitos mínimos</a> são bem acessíveis.<br>
    </p>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="webroot/img/1-login.png" class="d-block w-100">
          <div class="carousel-caption d-none d-md-block bg-secondary">
            <h5>Login</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="webroot/img/2-home.png" class="d-block w-100">
          <div class="carousel-caption d-none d-md-block bg-secondary">
            <h5>Home</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="webroot/img/3-listagem-entradas.png" class="d-block w-100">
          <div class="carousel-caption d-none d-md-block bg-secondary">
            <h5>Listagem das entradas</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="webroot/img/4-entrada-nova.png" class="d-block w-100">
          <div class="carousel-caption d-none d-md-block bg-secondary">
            <h5>Nova entrada</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="webroot/img/5-entrada-senha-insegura.png" class="d-block w-100">
          <div class="carousel-caption d-none d-md-block bg-secondary">
            <h5>Alerta de senha insegura</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="webroot/img/6-logs.png" class="d-block w-100">
          <div class="carousel-caption d-none d-md-block bg-secondary">
            <h5>Logs de atividades</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="webroot/img/7-ips-bloqueados.png" class="d-block w-100">
          <div class="carousel-caption d-none d-md-block bg-secondary">
            <h5>IPs bloqueados</h5>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon btn-interacao-carrossel" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon btn-interacao-carrossel" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>
    <br>
    <p>
      Se você precisa de um chaveiro que muitas pessoas irão utilizar, recomendo o <a href="https://www.passbolt.com/" target="_blank">Passbolt</a>.
      Porém, se você precisa de um gerenciador pessoal, para usar somente no seu computador ou celular, o <a href="https://keepassxc.org/" target="_blank">KeePassXC</a> é uma boa escolha.
    </p>
    <br><hr>

    <h1>Surgimento do KeyAnyWhere</h1>
    <p>
      Durante muito tempo o KeePassXC me atendeu perfeitamente, mas surgiu a necessidade de transitar com as minhas senhas entre computador pessoal, de trabalho e celular.<br>
      Insatisfeito com as opções existentes no mercado, optei por criar minha própria ferramenta, buscando atender às minhas próprias necessidades.<br>
      Durante esse periodo da vida, eu estava cursando Sistemas para Internet no Instituto Federal de Mato Grosso do Sul - IFMS. Diante disso, escolhi transformar minha 
      ideia em tema para o TCC.
    </p>

    <br><hr>

    <h1>Princípios</h1>
    <ul>
        <li>Segurança em detrimento da escolha do usuário. Ou seja, alguns aspectos são projetados para serem mais seguros do que convenientes.</li>
        <li>
          Foram implementadas somente as funcionalidades essenciais, baseadas no princípio do KISS combinado com uma mentalidade de MVP.<br>
          Com essa abordagem alguns benefícios podem ser destacados:
          <ul>
              <li>Superfície de ataque reduzida</li>
              <li>Menor consumo de hardware</li>
              <li>Fácil utilização com menos cliques para executar as principais ações.</li>
              <li>Fácil manutenção</li>
          </ul>
        </li>
    </ul>

    <br><hr>

    <h1>Versão</h1>
    <p>Atualmente a ferramenta está em versão <strong>BETA</strong>.</p>

    <br><hr>

    <h1>Ambiente de demonstração</h1>
    <p>
        Você pode testar o KAW antes de usar. Acesse o ambiente de demonstração com os dados abaixo: <br><br>
        <strong>Site: </strong><a href="https://demo.keyanywhere.com.br/" target="_blank">demo.keyanywhere.com.br</a><br>
        <strong>Usuário: </strong>demo@avds.eti.br<br>
        <strong>Senha: </strong>d3m0$tr@c*o$<br>
        <strong>Segundo Fator de Autenticação: </strong>111222<br>
    </p>

    <br>

    <h2>Pesquisa de satisfação</h2>
    <p>
        Por favor, responda a pesquisa de satisfação, ela é rápida. Vai me ajudar muito no TCC e melhorar a ferramenta.<br>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdFOKGfRWYIRdJcH3Zvi4947GLwipajLjXW5Fa2FdnlG78V3w/viewform?usp=sf_link" target="_blank">Responder pesquisa</a>
    </p>

    <br><hr>

    <h1>Documentação e repositório</h1>
    <p>
      Mais informações úteis na documentação e no repositório:<br>
      <strong>GitHub: </strong><a href="https://github.com/arthusantiago/KeyAnyWhere" target="_blank">arthusantiago/KeyAnyWhere</a><br>
      <strong>Documentação: </strong><a href="https://github.com/arthusantiago/KeyAnyWhere/wiki" target="_blank">KeyAnyWhere/wiki</a><br>
    </p>
    <br>
  </div>
  <script src="/webroot/js/bootstrap.bundle.min.js"></script>
</body>
</html>