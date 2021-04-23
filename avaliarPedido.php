<?php
include_once("includes/body.inc.php");
top(PERFIL);
$sql= "Select * from servicos inner join utilizadores on servicoUtilizadorId = utilizadorId where servicoId=".$_SESSION['servicoId'];
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>

<section style="background-color: lightcyan">
    <div class="container">
        <div class="text-center">
            <h1><?php echo $dados['servicoNome']?></h1>

            <br>

        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12">
                <form id="contact-form" role="form" action="pedidoCriar.php" method="post">
                    <div class="section-title">
                        <h2>Requisite este serviço <small>Contacta esta pessoa e ela irá ajudar!</small></h2>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <input type="hidden" name="id" value="<?php echo $id?>">

                        <input readonly type="text" class="form-control" placeholder="<?php echo $dados['utilizadorNome']?>" name="name" required>

                        <input readonly type="email" class="form-control" placeholder="<?php echo $dados['utilizadorEmail']?>" name="email" required>

                        <input readonly type="email" class="form-control" placeholder="<?php echo $dados['utilizadorTelefone']?>" name="email" required>

                        <textarea readonly class="form-control" rows="6" placeholder="<?php echo $dados['servicoDescricao']?>" name="message" required></textarea>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <input type="submit" class="form-control" value="Requisitar o serviço">
                    </div>

                </form>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="contact-image">
                    <img src="images/emaillogo.png" style="height: 404px; width: 404px" class="img-responsive">
                </div>
            </div>

        </div>
    </div>
</section>

<?php
bottom();
?>