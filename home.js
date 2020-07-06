var pesquisasSalvas = [];

// Função para criar o HTML da notícia principal
function templateItemPesquisaSalva(termo) {
  return `
  <button type="button" class="list-group-item list-group-item-action" onclick = "query = '${termo}'; carregarNoticias()"><strong>> ${termo}</strong></button>
  `;
}
var query = "Saude";
function templateNoticia({
  img,
  titulo,
  subtitulo,
  link,
}) {
  return `
    <div class="col-12 col-sm-12 col-md-6 col-lg-4 h-100" >
                            <img src="${img}" class="card-img-top" alt="">
                            <div class="card-body h-100">
                              <h5 class="card-title">${titulo}</h5>
                              <p class="card-text">${subtitulo}</p>
                              <a href="${link}" class="btn btn-warning"><strong>Ver mais</strong></a>
                              <div class="like">
                              <button type="button" class="btn btn-success likee"input type="button" onclick="alert('Sua avaliação foi enviada!')"><strong>Like</strong></button>
                              <button type="button" class="btn btn-danger dislike"<input type="submit"onclick="alert('Sua avaliação foi enviada!')"><strong>Dislike</strong></button>
                              </div>
                              <div class="form-group coments">
                              <label for="exampleFormControlTextarea1"><strong>Deixe aqui a sua opinião</strong></label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>                           
      <input type="submit" class="btn btn-primary send" onclick="alert('Sua opinião foi enviada!')">
    </div>
                              </form>
                            </div>
                            </div>
                          </div>
    `;
}
async function carregarNoticias(tema) {

  console.log("=== INICIO DA PAGINA ===");

  let API_KEY = "dba2483bd9844fdc899f4aa55979c43b"
  let url = `newsapi.org/v2/everything?q=${query}&apiKey=${API_KEY}`;
  const resultadoDaApi = await fetch(url, {
    method: 'GET'
  });

  const resultadoComoJson = await resultadoDaApi.json();
  const artigoPrincipal = resultadoComoJson.articles[0];
  const artigos = resultadoComoJson.articles.slice(0, 15);

  console.log(artigoPrincipal);
  console.log(artigos);


  const listaDeNoticias = artigos.map(artigo => {
    return templateNoticia({
      img: artigo.urlToImage,
      data: artigo.publishedAt,
      titulo: artigo.title,
      subtitulo: artigo.description,
      link: artigo.url,
    });
  })
  $('#lista-todas-noticias').html("");

  listaDeNoticias.forEach(noticia => {
    $('#lista-todas-noticias').append(noticia);
  });

};
async function recuperarPesquisasSalvas() {
  pesquisasSalvas = JSON.parse(localStorage.getItem("pesquisas-salvas")) || [];

  if (pesquisasSalvas.length > 0) {
    $("#pesquisas-salvas-vazio").addClass("hidden");
    pesquisasSalvas.forEach(termo => {
      $("#lista-pesquisas-salvas").append(templateItemPesquisaSalva(termo));
    });
  }
}

async function salvarPesquisa() {
  $("#pesquisas-salvas-vazio").addClass("hidden");

  const termo = query;
  if (!pesquisasSalvas.includes(termo)) {
    $("#lista-pesquisas-salvas").append(templateItemPesquisaSalva(termo));
    pesquisasSalvas.push(termo);

    localStorage.setItem("pesquisas-salvas", JSON.stringify(pesquisasSalvas));
  }
}
$(async function () {
  recuperarPesquisasSalvas();
  carregarNoticias();
  $("#pesquisa").submit(function (event) {
    event.preventDefault();
    query = $("#tipopesquisa").val();
    carregarNoticias();
  });
  $("#salvar").click(function (event) {
    salvarPesquisa();
  });
});
