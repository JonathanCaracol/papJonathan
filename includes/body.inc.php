<?php
include_once ("config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
function top($menu=HOME){
?>

    <!DOCTYPE html>
<html lang="en">
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
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- PRE LOADER -->
<section class="preloader">
    <div class="spinner">

        <span class="spinner-rotate"></span>

    </div>
</section>

<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="index.php" class="navbar-brand">Epris</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                <li <?php if ($menu==HOME) echo "class=\"active\"";?> ><a href="index.php">Home</a></li>
                <li <?php if ($menu==OFFERS) echo "class=\"active\"";?>><a href="offers.php">Serviços</a></li>
                <li <?php if ($menu==CONTACTO) echo "class=\"active\"";?>><a href="contact.php">Contacte-nos</a></li>
                <li <?php if ($menu==MAIS) echo "class=\"active\"";?> class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mais<span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li><a href="about-us.php">Sobre nós</a></li>
                        <li><a href="team.php">Equipa</a></li>
                    </ul>
                </li>
                <li <?php if ($menu==LOGINREGISTAR) echo "class=\"active\"";?>><a href="register.php">Registrar-se/Entrar</a></li>
                <li <?php if ($menu==PERFIL) echo "class=\"active\"";?>><a href="perfil.php">Meu perfil</a></li>
                <li><a href="../papJonathan/admin/offersAdmin.php">Administração</a></li>
            </ul>
        </div>

    </div>
</section>

<?php
}

function bottom(){


?>

<!-- FOOTER -->
<footer id="footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-6">
                <div class="footer-info">
                    <div class="section-title">
                        <h2>Headquarter</h2>
                    </div>
                    <address>
                        <p>212 Barrington Court <br>New York, ABC 10001</p>
                    </address>

                    <ul class="social-icon">
                        <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                    </ul>

                    <div class="copyright-text">
                        <p>Copyright &copy; 2020 Company Name</p>
                        <p>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="footer-info">
                    <div class="section-title">
                        <h2>Contact Info</h2>
                    </div>
                    <address>
                        <p>+1 333 4040 5566</p>
                        <p><a href="mailto:contact@company.com">contact@company.com</a></p>
                    </address>

                    <div class="footer_menu">
                        <h2>Quick Links</h2>
                        <ul>
                            <li ><a href="index.html">Home</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="terms.html">Terms & Conditions</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="footer-info newsletter-form">
                    <div class="section-title">
                        <h2>Newsletter</h2>
                    </div>
                    <div>
                        <div class="form-group">
                            <form action="#" method="get">
                                <input type="email" class="form-control" placeholder="Escreva seu email" name="email" id="email" required>
                                <input type="submit" class="form-control" name="submit" id="form-submit" value="Mandar newsletter">
                            </form>
                            <span><sup>*</sup> Nota - Não iremos mandar spam para o seu email.</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>


<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>
<script>
    $('document').ready(function(){
        fillTableServicos();

        $('#search').keyup(function (){
            fillTableServicos(this.value,$('#id').val());
        });
    })
</script>

</body>
</html>

<?php
}
?>

<?php
include_once ("config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
function topAdmin($menu=HOME){

?>

    <!DOCTYPE html>
<html lang="en">
<head>

    <title>PAP</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../css/style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- PRE LOADER -->
<section class="preloader">
    <div class="spinner">

        <span class="spinner-rotate"></span>

    </div>
</section>

<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a class="navbar-brand">Epris</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                <li <?php if ($menu==OFFERS) echo "class=\"active\"";?>><a href="offersAdmin.php">Categorias Admin</a></li>
                <li <?php if ($menu==CONTACTO) echo "class=\"active\"";?>><a href="servicosAdmin.php">Serviços Admin</a></li>
                <li <?php if ($menu==HOME) echo "class=\"active\"";?>><a href="utilizadorAtivoDesativo.php">Utilizadores Admin</a></li>
                <li><a href="../index.php">Sair da administração</a></li>
            </ul>
        </div>

    </div>
</section>

<?php
}

function bottomAdmin(){


?>

<!-- SCRIPTS -->
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/common.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/custom.js"></script>


</body>
</html>

    <?php
}
    include_once ("config.inc.php");
    $con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
    function topAJAXAdmin($menu=HOME){

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>

        <title>PAP</title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/owl.carousel.css">
        <link rel="stylesheet" href="../css/owl.theme.default.min.css">

        <!-- MAIN CSS -->
        <link rel="stylesheet" href="../css/style.css">

    </head>
    <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">

            <span class="spinner-rotate"></span>

        </div>
    </section>

    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- lOGO TEXT HERE -->
                <a class="navbar-brand">Epris</a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first">
                    <li <?php if ($menu==OFFERS) echo "class=\"active\"";?>><a href="offersAdmin.php">Categorias Admin</a></li>
                    <li <?php if ($menu==CONTACTO) echo "class=\"active\"";?>><a href="servicosAdmin.php">Serviços Admin</a></li>
                    <li <?php if ($menu==HOME) echo "class=\"active\"";?>><a href="utilizadorAtivoDesativo.php">Utilizadores Admin</a></li>
                    <li><a href="../index.php">Sair da administração</a></li>
                </ul>
            </div>

        </div>
    </section>

<?php
}
function bottomAJAXAdmin(){
?>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/common.js"></script>
    <script src="../js/smoothscroll.js"></script>
    <script src="../js/custom.js"></script>

    <script>
        $('document').ready(function(){
            fillTableServicosBackOffice();

            $('#search').keyup(function (){
                fillTableServicosBackOffice(this.value,$('#id').val());
            });
        })
    </script>

    </body>
    </html>

    <?php
}
    include_once ("config.inc.php");
    $con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
    function topAJAXUtilizador($menu=HOME){

    ?>

    <!DOCTYPE html>
<html lang="en">
<head>

    <title>PAP</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../css/style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- PRE LOADER -->
<section class="preloader">
    <div class="spinner">

        <span class="spinner-rotate"></span>

    </div>
</section>

<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a class="navbar-brand">Epris</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                <li <?php if ($menu==OFFERS) echo "class=\"active\"";?>><a href="offersAdmin.php">Categorias Admin</a></li>
                <li <?php if ($menu==CONTACTO) echo "class=\"active\"";?>><a href="servicosAdmin.php">Serviços Admin</a></li>
                <li <?php if ($menu==HOME) echo "class=\"active\"";?>><a href="utilizadorAtivoDesativo.php">Utilizadores Admin</a></li>
                <li><a href="../index.php">Sair da administração</a></li>
            </ul>
        </div>

    </div>
</section>

<?php
}
function bottomAJAXUtilizador(){
?>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/common.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/custom.js"></script>

<script>
    $('document').ready(function(){
        fillTableUtilizadorBackOffice();

        $('#search').keyup(function (){
            fillTableUtilizadorBackOffice(this.value);
        });
    })
</script>

</body>
</html>

<?php
}
?>