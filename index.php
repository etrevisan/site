<!DOCTYPE html>
<html lang="pt-br">

<head>
	<link rel="icon" href="img/favicon.png" sizes="32x32">
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilo.css"/>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
	<title>ClassT - Estudos para vestibulinhos</title>
</head>

<body>
	<!-- Navbar -->
	<navbar id="navbar">
		<div class="navbar-container">
			<img src="./img/classt.png" alt="" class="logo" />
			<ul class="navbar-items">
				<li class="navbar-item"><a href="premium.php">Premium</a></li>
				<li class="navbar-item"><a href="ajuda.php">Ajuda</li>
					<li class="navbar-item"><a href="download.php">Baixar</a></li>
					<li class="navbar-item"><a href=#depoimentos>Depoimentos</a></li>
					<li class="navbar-item">Sobre nós</li>
				</ul>
			</div>
		</navbar>

		<div id="showcase" style="background: url('./img/fundo.jpg') center center/cover;background-blend-mode: color;align-items: center;height: 100vh;background-color: rgba(0, 0, 0, 0.4);">
			<div class="showcase-container">
				<h2>Conheça o ClassT.</h2>
				<p>
					E tenha acesso aos materiais de estudo para ingressar na instituição técnica dos seus sonhos.
				</p>
				<button class="btn-primary" onclick="window.open('download.php','_top')">Obtenha o ClassT Free</button>
			</div>
		</div>   

		<div class="form-depoimentos">
			<a name="depoimentos" style="color: white;">Depoimentos</a>
			<h2>Sua história faz história</h2>
			<p>Conte abaixo sobre como o ClassT atuou na sua aprovação.</p>
			<form method="post">
				<label>Email</label>
				<input type="text" placeholder="Insira seu e-mail" name="email"><br>
				<label>Nome</label>
				<input type="text" placeholder="Insira seu primeiro nome" name="nome"><br>
				<label>Sobrenome</label>
				<input type="text" placeholder="Insira seu sobrenome" name="sobrenome"><br>
				<label>Sua história</label><br>
				<textarea name="depoimento" id="text" cols="20" rows="10"></textarea><br>
				<button type="submit" class="btn-secondary">Enviar depoimento</button>
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

<?php?>