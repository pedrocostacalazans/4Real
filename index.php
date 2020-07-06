<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <title>4REAL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="estilos.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="home.js"></script>

</head>


<body>
    <header class="container header">

        <div class="row">

            <div class="col-12 header_area">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-2">
                        <img src="fotos/logo2.png" class="logo">
                    </div>
                    <div class="col-12 col-sm-12 col-md-8 col-lg-10 memu_area">
                        <nav class="nav nav-pills flex-column flex-sm-row">
                            <a class="flex-sm-fill text-sm-center nav-link" href="http://noticias-da-hora.herokuapp.com/"
                            ><strong>Notícias nacionais</strong></a>
                            <a class="flex-sm-fill text-sm-center nav-link" href="#"
                            onclick = "query = 'Futebol'; carregarNoticias()"><strong>Home</strong></a>
                            <a class="flex-sm-fill text-sm-center nav-link" href="#"
                            onclick = "query = 'Saúde'; carregarNoticias()"><strong>Saúde</strong></a>
                            <a class="flex-sm-fill text-sm-center nav-link" href="#"
                            onclick = "query = 'Música'; carregarNoticias()"><strong>Música</strong></a>
                            <a class="flex-sm-fill text-sm-center nav-link" href="#"
                            onclick = "query = 'Tecnologia'; carregarNoticias()"><strong>Tecnologia</strong></a>
                             <div class="navegacao">   
                                <form class="form-inline my-2 my-lg-0" id="pesquisa">
                                        <input class="form-control mr-sm-2" id="tipopesquisa" type="search" placeholder="Search"
                                            aria-label="Search">
                                        <button class="btn btn-outline-success my-2 my-sm-0 search" type="submit"><strong>Search</strong></button>
                                        <button class="btn btn-outline-success my-2 my-sm-0 save" id="salvar"><strong>Salvar</strong></button>
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
                    <div class="row A" id="lista-todas-noticias">
                    </div>
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
                         <strong>Mais pesquisadas</strong>
                        </button>
                        <button type="button" class="list-group-item list-group-item-action" onclick = "query = 'Futebol'; carregarNoticias()"><strong>> Futebol</strong></button>
                        <button type="button" class="list-group-item list-group-item-action" onclick = "query = 'Tecnologia'; carregarNoticias()"><strong>> Tecnologia</strong></button>
                        <button type="button" class="list-group-item list-group-item-action" onclick = "query = 'Bolsa de valores'; carregarNoticias()"><strong>> Bolsa de valores</strong></button>
                        <button type="button" class="list-group-item list-group-item-action" onclick = "query = 'Esportes'; carregarNoticias()"><strong>> Esportes</strong></button>
                        <button type="button" class="list-group-item list-group-item-action" onclick = "query = 'Saúde'; carregarNoticias()"><strong>> Saúde</strong></button>
                        <button type="button" class="list-group-item list-group-item-action" onclick = "query = 'Política'; carregarNoticias()"><strong>> Política</strong></button>
                        <button type="button" class="list-group-item list-group-item-action" onclick = "query = 'Economia'; carregarNoticias()"><strong>> Economia</strong></button>
                        <button type="button" class="list-group-item list-group-item-action" onclick = "query = 'E-sports'; carregarNoticias()"><strong>> E-sports</strong></button>
                        <button type="button" class="list-group-item list-group-item-action" onclick = "query = 'Gastronomia'; carregarNoticias()"><strong>> Gastronomia</strong></button>
                        <button type="button" class="list-group-item list-group-item-action" onclick = "query = 'Covid'; carregarNoticias()"><strong>> Covid-19</strong></button>
                        <button type="button" class="list-group-item list-group-item-action" onclick = "query = 'Games'; carregarNoticias()"><strong>> Games</strong></button>
                        <button type="button" class="list-group-item list-group-item-action" onclick = "query = 'Educação'; carregarNoticias()"><strong>> Educação</strong></button>
                        <button type="button" class="list-group-item list-group-item-action" onclick = "query = 'Fofoca'; carregarNoticias()"><strong>> Fofoca</strong></button>
                        <button type="button" class="list-group-item list-group-item-action" onclick = "query = 'Arte'; carregarNoticias()"><strong>> Arte</strong></button>
                        <button type="button" class="list-group-item list-group-item-action" onclick = "query = 'BBB'; carregarNoticias()"><strong>> BBB</strong></button>
                      </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <footer class="container footer">

        <div class="row">
            <div class="col-4 footer_area">
                <strong>Contato +55(31)98361-1000</strong>
            </div>
            <div class="col-4 footer_area">
                <strong>4REAL - Todos os direitos reservados - 2020</strong>
            </div>
            <div class="col-4 footer_area redes">
                <strong><a href="https://www.instagram.com/ph_barcelos/?hl=pt-br">Instagram</a></strong>
                <strong><a href="https://twitter.com/ph_barcelos">Twitter</a></strong>
                <strong><a href="https://www.facebook.com/pedrinho.barceloss">Facebook</a></strong>
            </div>
            



        </div>

    </footer>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>


</html>