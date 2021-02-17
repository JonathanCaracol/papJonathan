<head>

    <title>PAP</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    <script src="js/custom.js"></script>


</head>

<nav class="navbar navbar-dark bg-dark">
    <a href="index.html" class="navbar-brand">Minha PAP</a>
    <li><a href="offers.html">Serviços</a></li>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<!--
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            lOGO TEXT HERE
            <a href="index.html" class="navbar-brand">Minha PAP</a>
        </div>

         MENU LINKS
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                <li><a href="index.html">Home</a></li>
                <li class="active"><a href="offers.html">Serviços</a></li>
                <li><a href="contact.html">Contacte-nos</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mais<span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li><a href="about-us.html">Sobre nós</a></li>
                        <li><a href="team.html">Equipa</a></li>
                    </ul>
                </li>
                <li><a href="register.php">Registrar-se/Entrar</a></li>
            </ul>
        </div>

    </div>
</section> -->

<section>
    <div class="container">
        <div class="text-center">
            <h1>Trabalho manual</h1>

            <br>

            <p class="lead">Lista dos serviços relacionados ao trabalho manual.</p>
        </div>
    </div>
</section>

<!--
<script>
    function confirmaElimina(id) {
        $.ajax({
            url:"AJAX/AJAXGetNameEmpresa.php",
            type:"post",
            data:{
                idEmpresa:id
            },
            success:function (result){
                if(confirm('Confirma que deseja eliminar a empresa:'+result+"?"))
                    window.location="eliminaEmpresa.php?id=" + id;
            }
        })
    };




    $('document').ready(function (){
        $('#search').keyup(function (){
            fillTableEmpresas(this.value);
        });
        fillTableEmpresas();
    })
</script>
-->



<div id="tableContent">
    <table class='table table-striped' width="100%">
        <tr>
            <td>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                        <button class="btn btn-primary" type="submit">Pesquisar</button>
                    </form>
            </td>
            <td colspan="3" align="right">
                <div>
                    <button class="btn btn-success" type="button"><a href="adicionaServicos.php" style="color: #1b1e21">Adicionar novo serviço</a></button>
                </div>
            </td>
        </tr>
        <tr>
            <th>Nome do Serviço</th>
            <th>Nome do Prestador</th>
            <th>Rating</th>
            <th colspan="2" align="right">Opções</th>
        </tr>
        <tr>

            <td><a href="servicoDetalhes.php">Madeira estatuas</a></td>
            <td>Jonthan Carajoinas</td>
            <td>3<fieldset class="rating"><input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label></fieldset></td>
            <td><a href="editarServicos.php">Editar</a>/Apagar</td>
        </tr>
    </table>
</div>