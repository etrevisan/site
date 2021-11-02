<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="icon" href="img/favicon.png" sizes="32x32">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilo.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <title>Assine o plano premium - ClassT</title>

    <!-- Adicionando Javascript -->
    <script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
</head>


<body>
    <!-- Navbar -->
    <navbar id="navbar" style="background-color: rgb(0,0,0,1);">
        <div class="navbar-container">
            <a href="index.php"><img src="./img/classt.png" alt="" class="logo"></a>
            <ul class="navbar-items">
               <li class="navbar-item"><a href="premium.php">Premium</a></li>
               <li class="navbar-item"><a href="ajuda.php">Ajuda</li>
                <li class="navbar-item"><a href="download.php">Baixar</a></li>
                <li class="navbar-item"><a href="index.php">Depoimentos</a></li>
                <li class="navbar-item">Sobre nós</li>
            </ul>
        </div>
    </navbar>

    <div class="caixa-premium">
        <h1>Aproveite 1 mês grátis de Premium</h1>
        <p>Por apenas R$19,90/mês, tenha acesso à conteúdos produzidos por nossa equipe de professores.</p>
        <p>Cancele quando quiser.</p>
        <a href="#assinar"><button type="submit" class="btn-secondary" style="cursor: pointer;">Começar</button></a>
        <a href="#planos"><button type="submit" class="btn-secondary outline" style="cursor: pointer;">Ver planos</button></a>
    </div>

    <h2>Por que ser premium?</h2>
    <ul class="lista-premium">
        <li class="lista-premium">Conteúdos exclusivos e de qualidade</li>
        <li class="lista-premium">Sem anúncios</li>
        <li class="lista-premium">Fórum tira-dúvidas diretamente com os professores</li>
        <li class="lista-premium">Baixe os conteúdos que quiser</li>
    </ul>

      <a name="planos" style="color: white;">Planos</a>
    <div class="info-cinza">
        <h2>Escolha seu plano premium</h2>
        <p>De acordo com a sua necessidade</p>
    </div>
    <div class="caixa-cinza">
        <div class="caixa-planos">
            <h4>Básico</h4>
            <p>R$15,90/mês</p>
            <hr>
            <p>- Conteúdos exclusivos</p>
            <p>- Sem anúncios</p>
            <p>- Baixe os conteúdos que desejar</p>
            <a href="#assinar"><button type="submit" class="btn-secondary" style="margin-left: 10%;margin-top: 60%;cursor: pointer;">Começar</button></a>
        </div>
        <div class="caixa-planos">
            <h4>Master</h4>
            <p>R$19,90/mês</p>
            <hr>
            <p>- Conteúdos exclusivos</p>
            <p>- Sem anúncios</p>
            <p>- Baixe os conteúdos que desejar</p>
            <p>- Acesso ao fórum tira-dúvidas diretamente com os professor do ClassT</p>
            <a href="#assinar"><button type="submit" class="btn-secondary" style="margin-left: 10%;margin-top: 21%;cursor: pointer;">Começar</button></a>
        </div>
    </div>

     <div class="form-premium">
        <a name="assinar" style="color: white;">assinar</a>
        <h2>Assinar</h2>
        <p>Desfrute o melhor do ClassT.</p>
        <form method="post">
            <input type="text" placeholder="Insira seu primeiro nome" name="nome" style="padding: 10px;
            margin-right: 1%;
            margin-bottom: 2%;
            width: 49%;
            float: left;">
            <input type="text" placeholder="Insira seu sobrenome" name="sobrenome" style="padding: 10px;
            margin-right: 1%;
            margin-bottom: 2%;
            width: 49%;
            float: left;">
            <input type="text" placeholder="Insira seu e-mail" name="email" style="padding: 10px;
            margin-right: 1%;
            margin-bottom: 2%;
            width: 49%;
            float: left;">
            <input type="text" placeholder="Insira seu CPF" name="cpf" style="padding: 10px;
            margin-right: 1%;
            margin-bottom: 2%;
            width: 49%;
            float: left;">
            <select name="plano" style="padding: 10px;
            margin-right: 1%;
            margin-bottom: 2%;
            width: 99%;
            float: left;">
            <option value="">Selecione o plano escolhido</option>
            <option value="basico">Plano Básico - R$15,90</option>
            <option value="master">Plano Master - R$19,90</option>
        </select>
    </form>
    <form method="get" action=".">
         
        <input name="cep" type="text" id="cep" value="" style="padding: 10px;margin-right: 1%;margin-bottom: 2%;width: 29%;
        float: left;" placeholder="CEP" onblur="pesquisacep(this.value);" />
        <input type="text" placeholder="Rua" name="rua" id="rua" style="padding: 10px;
        margin-right: 1%;
        margin-bottom: 2%;
        width: 69%;
        float: left;">
        <input type="text" placeholder="Número" name="numero" id="numero" style="width: 13%;">
        <input type="text" placeholder="Bairro" name="bairro" id="bairro" style="width: 39.5%;">
        <input type="text" placeholder="Cidade" name="cidade" id="cidade" style="width: 28%;">
        <input type="text" placeholder="Estado" name="uf" id="uf" style="width: 15%;">

        <button class="btn-secondary" onclick="window.open('boleto.php')" style="margin-left: 35%;cursor: pointer;">Emitir boleto</button>
    </form>
</div>

<!-- Inicio do formulario -->
      <form method="get" action="." style="background-color: white;border-color: white">
        <input name="ibge" type="text" style="opacity: 1%" id="ibge" size="8" /></label><br />
      </form>

<!-- Footer -->
<footer id="footer">
    <div class="footer-content">
        <img src="img/logoB.png" alt="" class="logo" />
        <ul class="footer-menu">
            <p>Empresa</p>
            <li class="footer-menu-item">
                Contato
            </li>
            <li class="footer-menu-item">

            </li>
            <li class="footer-menu-item">
                For the record
            </li>
        </ul>

        <ul class="footer-menu">
            <p>Comunidades</p>
            <li class="footer-menu-item">
                Para Estudantes
            </li>
            <li class="footer-menu-item">
                Professores
            </li>
            <li class="footer-menu-item">
                Marcas
            </li>
            <li class="footer-menu-item">
                Investidores
            </li>
            <li class="footer-menu-item">
                Desenvolvedores
            </li>
        </ul>

        <ul class="footer-menu">
            <p>Links úteis</p>
            <li class="footer-menu-item">
                Ajuda
            </li>
            <li class="footer-menu-item">
                Perguntas frequentes
            </li>
            <li class="footer-menu-item">
                Aplicativo móvel grátis
            </li>
        </ul>

        <div class="socials">
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-facebook-f"></i>
        </div>
    </div>
    <div class="footer-info">
        <ul class="footer-info-items">
            <li class="footer-info-item">Legal</li>
            <li class="footer-info-item">Centro de Privacidade</li>
            <li class="footer-info-item">Política de privacidade</li>
            <li class="footer-info-item">Cookies</li>
            <li class="footer-info-item">Sobre anúncios</li>
        </ul>

        <div class="rights">
            <div class="country">
                <p>Brasil</p>
                <img src="img/brazil.png" alt="" class="brazil-flag" />
            </div>
            <p>&copy; 2021 ClassT</p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://kit.fontawesome.com/f9e19193d6.js" crossorigin="anonymous"></script>
</body>

</html>

<?php?>