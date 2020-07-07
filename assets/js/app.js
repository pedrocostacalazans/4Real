let API_KEY = "56bbdc057c384409ab463d48f7925411";

let pesquisasSalvas = [];

// Função para criar o HTML da notícia principal
templateItemPesquisaSalva = (termo) => {
  return `
  <button type="button" class="list-group-item list-group-item-action" onclick = "query = '${termo}'; carregarNoticias()"><strong>> ${termo}</strong></button>
  `;
}

/*
*	Segue as funções
*/
var insertNoticias = (json) => {

	html = `
		<%for (let index in json.articles) {%>
			<div class="col-12 col-sm-12 col-md-6 col-lg-4 h-100">
				<%if(json.articles[index].urlToImage != null){%>
					<img src="<%=json.articles[index].urlToImage%>" class="card-img-top" alt="">
				<%} else {%>
					<img src="assets/img/svg/sem_img.svg" class="card-img-top" title="Sem imagem" alt="">
				<%}%>
				<div class="card-body h-100">
					<p style="color: blue;"><b><i><%=json.articles[index].publishedAt%></i></b></p>
					<h5 class="card-title"><strong><%=json.articles[index].title%></strong></h5>
					<%if(json.articles[index].description != "" || json.articles[index].description != null){%>
						<p class="card-text"><%=json.articles[index].description%></p>
					<%} else {%>
						<p></p>
					<%}%>
					<a href="<%=json.articles[index].url%>" class="btn btn-warning">Ver mais</a>
				</div>
			</div>
		<%}%>`;

	$("#lista-todas-noticias").append(ejs.render(html, { json: json }));
};

var getJson = (url) => {
	fetch(url)
		.then((response) => {
			response.json().then((data) => {
				insertNoticias(data);
			});
		})
		.catch((err) => {
			console.error("Failed retrieving information", err);
		});
};

var carregarNoticias = () => {
	$("#lista-todas-noticias").html('');

	getJson(`assets/php/queryNewsAPI.php?opcao=${query}`);
}

var recuperarPesquisasSalvas = () => {
  pesquisasSalvas = JSON.parse(localStorage.getItem("pesquisas-salvas")) || [];

  if (pesquisasSalvas.length > 0) {
    $("#pesquisas-salvas-vazio").addClass("hidden");
    pesquisasSalvas.forEach(termo => {
      $("#lista-pesquisas-salvas").append(templateItemPesquisaSalva(termo));
    });
  }
}

var salvarPesquisa = () => {
  $("#pesquisas-salvas-vazio").addClass("hidden");

  let termo = query;
  if (!pesquisasSalvas.includes(termo)) {
    $("#lista-pesquisas-salvas").append(templateItemPesquisaSalva(termo));
    pesquisasSalvas.push(termo);

    localStorage.setItem("pesquisas-salvas", JSON.stringify(pesquisasSalvas));
  }
}

$(() => {
	getJson('assets/php/newsAPI.php');

  recuperarPesquisasSalvas();

  $('#pesquisa').submit(function (event) {
    event.preventDefault();
    query = $('#tipopesquisa').val();
    carregarNoticias();
  });

  $('#salvar').click(function (event) {
    salvarPesquisa();
  });

});
