<!DOCTYPE html>
<html lang="pt-br">
<head>

	<!-- Meta tags -->
	<meta charset="utf-8" />
	<title>4Real</title>
	<meta name="author" content="" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css" />
	<!-- Estilos customizados para esse template -->
	<link rel="stylesheet" href="assets/css/estilos.css">

	<script src="assets/lib/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
	<script src="assets/lib/ejs.min.js"></script>
	<script src="assets/lib/routie.min.js"></script>
	<script src="assets/js/app.js"></script>

	<link rel="shortcut icon" href="assets/img/png/logo.png">

</head>
<body>

	<header class="container header">
		<div class="row">
			<div class="col-12 header_area">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-4 col-lg-2">
						<img src="assets/img/png/logo.png" class="logo">
					</div>
					<div class="col-12 col-sm-12 col-md-8 col-lg-10 memu_area">
						<nav class="nav nav-pills flex-column flex-sm-row">

							<a class="flex-sm-fill text-sm-center nav-link" href="https://g1.globo.com/fato-ou-fake/">
								<strong>G1 - Fato ou Fake</strong>
							</a>

							<div class="navegacao">
								<form class="form-inline my-2 my-lg-0" id="pesquisa">
									<input class="form-control mr-sm-2" id="tipopesquisa" type="search" placeholder="Search" aria-label="Search">
									<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
									<button class="btn btn-outline-success my-2 my-sm-0" id="salvar">Salvar</button>
								</form>
							</div>

						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>

	<main class="container main">

		<div class="row">

			<div class="col-md-9">
				<section class="noticiasrecentes">
					<div class="row A" id="lista-todas-noticias"></div>
				</section>
			</div>

			<div class="col-md-3">
				<section class="historico">
					<div class="list-group" id="lista-pesquisas-salvas">
						<button type="button" class="list-group-item list-group-item-action active disabled">
						 <strong>Pesquisas recentes</strong>
						</button>
					</div>

					<div class="list-group">

						<button type="button" class="list-group-item list-group-item-action active disabled">
						 <strong>Favoritas</strong>
						</button>

						<button type="button" class="list-group-item list-group-item-action" onclick = "query = 'Turismo'; carregarNoticias()">
							<strong>> Turismo</strong>
						</button>

						<button type="button" class="list-group-item list-group-item-action" onclick = "query = 'Negócios'; carregarNoticias()">
							<strong>> Negocios</strong>
						</button>

						<button type="button" class="list-group-item list-group-item-action" onclick = "query = 'Entretenimento'; carregarNoticias()">
							<strong>> Entretenimento</strong>
						</button>

						<button type="button" class="list-group-item list-group-item-action" onclick = "query = 'Saúde'; carregarNoticias()">
							<strong>> Saúde</strong>
						</button>

						<button type="button" class="list-group-item list-group-item-action" onclick = "query = 'Ciência'; carregarNoticias()">
							<strong>> Ciência</strong>
						</button>

						<button type="button" class="list-group-item list-group-item-action" onclick = "query = 'Esportes'; carregarNoticias()">
							<strong>> Esporte</strong>
						</button>

						<button type="button" class="list-group-item list-group-item-action" onclick = "query = 'Tecnologia'; carregarNoticias()">
							<strong>> Tecnologia</strong>
						</button>

					</div>
				</section>
			</div>

		</div>

	</main>

	<footer class="container footer">
		<div class="row">
			<div class="col-12 footer_area">
				<strong>4REAL - Todos os direitos reservados - 2020</strong>
			</div>
		</div>
	</footer>

	<script src="assets/lib/bootstrap/js/popper.min.js"></script>
	<script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
