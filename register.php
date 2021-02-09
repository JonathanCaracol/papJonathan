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
                <li><a href="offers.html">Serviços</a></li>
                <li><a href="contact.html">Contacte-nos</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mais<span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li><a href="about-us.html">Sobre nós</a></li>
                        <li><a href="team.html">Equipa</a></li>
                    </ul>
                </li>
                <li class="active"><a href="register.php">Registrar-se/Entrar</a></li>
            </ul>
        </div>

    </div>
</section>

<div class="card" style="width: 100%; margin-top: 5%">
    <div class="card-body" style="width: 300px">
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword">Palavra-passe</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>
            </div>
            <div class="form-group" style="margin-left: 15px">
                <label for="inputNumber">Número de telemóvel</label>
                <input type="text" class="form-control" id="inputNumber" placeholder="Número">
            </div>
            <div class="form-group" style="margin-left: 15px">
                <label for="inputAddress">Morada</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Morada">
            </div>
            <button type="submit" class="btn btn-success" style="margin-left: 15px">Regista-se</button>
            <button type="submit" class="btn btn-primary"><a href="login.php">Já tem conta? Entre</a></button>
        </form>
    </div>
</div>