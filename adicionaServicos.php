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
            <h1>Adicionar novo serviço</h1>
            <br>
            <p class="lead">Nunca foi tão fácil ajudar pessoas, junte-se a nós!.</p>
        </div>
    </div>
</section>


<?php
echo "<div style='width: 25%'>";
echo "<form action=\"confirmaNovoServico.php\" method=\"post\" enctype=\"multipart/form-data\">";
echo "<label>Nome do serviço: </label>";
echo "<input type=\"text\" name=\"  \"><br>";
echo "<label>Nome do/a prestador/a: </label>";
echo "<input type=\"text\" name=\"  \"><br>";
echo "<label>Descrição: </label>";
echo "<input type=\"text\" name=\"  \"><br>";
echo "<label>Horas de serviço que quer prestar: </label>";
echo "<input type=\"number\" id=\"quantity\" name=\"quantity\" min=\"1\" max=\"20\">";
echo "<br><select class=\"form-select\" aria-label=\"Default select example\">
      <option selected>Vai querer mostar o numero aos clientes?</option>
        <option value=\"1\">Sim</option>
        <option value=\"2\">Não</option>
    </select>";
echo "<input type=\"Submit\" value=\"Adiciona\"><br>";
echo "</div>";

?>
