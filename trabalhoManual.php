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
    <script src="js/custom.js"></script>

</head>
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="index.html" class="navbar-brand">Minha PAP</a>
        </div>

        <!-- MENU LINKS -->
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
</section>

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


<h1 style="margin-left: 26px">Lista de serviços</h1>
<input type="text" id="search" style="margin-left: 30px">
<div id="tableContent">
    <table class='table table-striped' width="100%">
        <tr>
            <td colspan="6" align='right'>
                <a href="adicionaServicos.php">Adiciona</a>
            </td>
        </tr>
        <tr>
            <th>Nome do Serviço</th>
            <th>Nome do Prestador</th>
            <th>Rating</th>
            <th colspan="2">Opções</th>
        </tr>
        <tr>

            <td><a href="servicoDetalhes.php">Madeira estatuas</a></td>
            <td>Jonthan Carajoinas</td>
            <td>3<fieldset class="rating"><input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label></fieldset></td>
            <td><a href="editarServicos.php">Editar</a></td>
            <td>Apagar</td>

        </tr>
    </table>
</div>