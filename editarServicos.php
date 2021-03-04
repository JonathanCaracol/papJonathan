<?php
include_once("includes/body.inc.php");
top(OFFERS);
?>

<section>
    <div class="container">
        <div class="text-center">
            <h1>Editar um serviço</h1>

            <br>

            <p class="lead">Faça as alterações necessárias e continua a ajudar pessoas!</p>
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
                        <input type="text" class="form-control" placeholder="Nome do serviço" name="name" required>

                        <input type="email" class="form-control" placeholder="email@gmail.com" name="email" required>

                        <textarea class="form-control" rows="6" placeholder="Descrição" name="message" required></textarea>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <input type="submit" class="form-control" name="send message" value="Editar serviço">
                    </div>

                </form>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="contact-image">
                    <img src="images/edit.png" style="height: 404px; width: 404px" class="img-responsive" alt="Smiling Two Girls">
                </div>
            </div>

        </div>
    </div>
</section>

<?php
bottom();
?>
