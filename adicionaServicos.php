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

<section style="padding-bottom: 20px">
    <div class="container">
        <div class="text-center">
            <h1>Adicionar novo serviço</h1>
            <br>
            <p class="lead">Nunca foi tão fácil ajudar pessoas, junte-se a nós!.</p>
        </div>
    </div>
    <hr>
</section>


<?php
echo "<div style='width: 25%; padding-bottom: 70px; padding-left: 25px'>";
echo "<form action=\"confirmaNovoServico.php\" method=\"post\" enctype=\"multipart/form-data\">";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Nome do serviço</span>
  </div>
  <input type=\"text\" class=\"form-control\" aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Nome do/a prestador/a</span>
  </div>
  <input type=\"text\" class=\"form-control\" aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div style='padding-bottom: 20px' class=\"input-group\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\">Descrição</span>
  </div>
  <textarea class=\"form-control\" aria-label=\"With textarea\"></textarea>
</div>";
// Falta meter borders a volta da barra de "scroll" horizontal
echo "<div style='padding-top:10px' class='border border-2'><div class=\"bd-example\"><label style='padding-bottom: 15px' for=\"customRange3\"class=\"form-label\">Escolhe um numero de horas (Max.20h):</label>
      <input type=\"range\" class=\"form-range\" min=\"0\" max=\"5\" step=\"0.5\" id=\"customRange3\"></div></div>";
echo "<br><div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <label class=\"input-group-text\" for=\"inputGroupSelect01\">Numero</label>
  </div>
  <select class=\"custom-select\" id=\"inputGroupSelect01\">
    <option selected>Quer disponibilizar seu numero?</option>
    <option value=\"1\">Sim</option>
    <option value=\"2\">Não</option>
  </select>
</div>";
echo "<div style='padding-top: 15px'><input class='btn-success' type=\"Submit\" value=\"Adicionar\"></div><br>";
echo "</div>";

?>
