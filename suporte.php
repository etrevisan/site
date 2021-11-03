<!DOCTYPE html>
<html lang="pt-br">

<head>
	<link rel="icon" href="img/favicon.png" sizes="32x32">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilo.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <title>O que está acontecendo? - ClassT</title>
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
                <li class="navbar-item" href=#Depoimentos>Depoimentos</li>
                <li class="navbar-item">Sobre nós</li>
            </ul>
        </div>
    </navbar>

     <div class="form-premium">
        <h2>O que está acontecendo?</h2>
        <p>Diga-nos abaixo, e faremos todo o possível para te ajudar.</p>

        <form method="post">
            <label>Seu e-mail</label>
            <input type="text" placeholder="Insira seu e-mail" name="email" style="width: 100%"><br>
            <label>Sua pergunta ou problema</label>
            <textarea name="pergunta" id="text" cols="20" rows="10" style="padding: 5px"></textarea><br>
            <button type="submit" class="btn-secondary" style="margin-left: 38%;">Enviar</button>
        </form>
    </div>


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

<?php
	if ($_SERVER["REQUEST_METHOD"] === 'POST') {
		include('conexaoBD.php');

		 try {
		 	$email = $_POST["email"];
		 	$pergunta = $_POST["pergunta"];

            if ((trim($email) == "") || (trim($pergunta) == "")) {
                echo "<p class='form-premium'>Confira se os dois campos foram preenchidos.</p>";
            } else {
                $cmd = $pdo->prepare("select * from classt where email = :email");
                $cmd->bindParam(':email', $email);
                $cmd->execute();

                $rows = $cmd->rowCount();

		        if ($rows <= 0) {
		            $cmd = $pdo->prepare("insert into classt (email, perguntas) values(:email, :pergunta)");
		            $cmd->bindParam(':email', $email);
		            $cmd->bindParam(':pergunta', $pergunta);
		            $cmd->execute();
		            echo "<p class='form-premium'>Sua pergunta foi enviada à nossa equipe.</p>";
		        } else {
		            echo "<p class='form-premium>Ops, algo deu errado.</p>'";
		        }
		       } 

        } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

        $pdo = null;
	}
?>