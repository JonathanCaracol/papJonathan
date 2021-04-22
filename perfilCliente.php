<?php
include_once("includes/body.inc.php");
top(PERFIL);
$id=intval($_GET['id']);
$sql="select * from utilizadores where utilizadorId =".$id;
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>

    <section style="background-color: powderblue">
        <div class="container">
            <div class="text-center">
                <h1>Perfil de <?php echo  $dados['utilizadorNome']?></h1>

                <br>

            </div>
        </div>
    </section>


    <!-- CONTACT -->
    <section id="contact">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <form id="contact-form" role="form" action="" method="post">
                        <div class="section-title">
                            <h2>Contacte-nos <small>Adoramos conversar, mande-nos uma mensagem!</small></h2>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <input type="email" class="form-control" value="<?php echo $dados['utilizadorEmail']?>" name="email" required>

                            <input type="text" class="form-control" value="<?php echo $dados['utilizadorNome']?>" name="nome" required>

                            <input type="text" value="<?php echo $dados['utilizadorTelefone']?>" class="form-control" name="telefone" required>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <input type="submit" class="form-control" name="send message" value="Voltar">
                        </div>

                    </form>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="contact-image">
                        <img src="images/contact-1-600x400.jpg" style="height: 404px; width: 404px" class="img-responsive" alt="Smiling Two Girls">
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php
bottom();
?>