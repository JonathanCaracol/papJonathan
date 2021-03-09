<?php
include_once("../includes/body.inc.php");
topAdmin(OFFERS);

$sql ="Select * from categorias";
$result=mysqli_query($con,$sql);
?>

<section>
    <div class="container">
        <div class="text-center">
            <h1>Adicionar uma nova categoria</h1>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">

        <div class="row">

            <div class="col-md-6 col-sm-12">
                <form id="contact-form" role="form" action="confirmaNovaCategoria.php" enctype="multipart/form-data" method="post">
                    <div class="section-title">
                        <h2>Criar uma categoria</h2>
                    </div>
                    <div class="col-md-12 col-sm-12">

                        <input type="text" class="form-control" placeholder="Nome da categoria" name="nome" required>

                        <textarea type="text" class="form-control" placeholder="Descrição da categoria" name="descricao" required></textarea>

                        <label>Imagem da categoria</label><input type="file" name="imagem">
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <input type="submit" class="form-control" value="Adicionar">
                    </div>

                </form>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="contact-image">
                    <img src="../images/adicionarservico.png" style="height: 404px; width: 404px" class="img-responsive" alt="Smiling Two Girls">
                </div>
            </div>

        </div>
    </div>
</section>



<?php
bottomAdmin();
?>
