<?php
include_once("includes/body.inc.php");
top(LOGINREGISTAR);
?>

<section>
    <div class="container">
        <div class="text-center">
            <h1>Regista-se</h1>

            <br>

            <p class="lead">Cria uma conta e começa a ajudar pessoas!</p>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12">
                <form id="contact-form" role="form" action="" method="post">
                    <div class="section-title">
                        <h2>Junte-se a nós<small>Faça parte da grande comunidade do voluntariado!</small></h2>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <input type="email" class="form-control" placeholder="Escreva o seu email" name="email" required>

                        <input type="text" class="form-control" placeholder="Escreva o seu nome" name="nome" required>

                        <input type="password" class="form-control" placeholder="Escreva a sua palavra-passe" name="password" required>

                        <input type="text" class="form-control" placeholder="Escreva o seu numero de telemovel" name="telefone" required>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <input type="submit" class="form-control" value="Criar a conta">
                        <input type="submit" class="form-control" onclick="location.href='login.php';" value="Já tem conta? Entra!">
                    </div>

                </form>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="contact-image">
                    <img src="images/lock.png" style="height: 404px; width: 404px" class="img-responsive" alt="Smiling Two Girls">
                </div>
            </div>

        </div>
    </div>
</section>

<?php
bottom();
?>