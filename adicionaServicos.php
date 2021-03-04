<?php
include_once("includes/body.inc.php");
top(OFFERS);
?>

<section>
    <div class="container">
        <div class="text-center">
            <h1>Adicionar um serviço</h1>

            <br>

            <p class="lead">Crie um serviço para ajudar a comunidade!</p>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12">
                <form id="contact-form" role="form" action="" method="post">
                    <div class="section-title">
                        <h2>Junte-se à nós <small>Faça parte da grande comunidade do voluntariado!</small></h2>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <input type="text" class="form-control" placeholder="Escreva o nome do serviço" name="name" required>

                        <input type="email" class="form-control" placeholder="Escreva o seu email" name="email" required>

                        <textarea class="form-control" rows="6" placeholder="Escreva a descrição" name="message" required></textarea>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <input type="submit" class="form-control" name="send message" value="Adicionar serviço">
                    </div>

                </form>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="contact-image">
                    <img src="images/adicionarservico.png" style="height: 404px; width: 404px" class="img-responsive" alt="Smiling Two Girls">
                </div>
            </div>

        </div>
    </div>
</section>

<?php
bottom();
?>
