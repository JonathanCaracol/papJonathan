<?php
$id=intval($_GET['id']);
include_once("../includes/body.inc.php");
topAdmin(OFFERS);

$sql="select * from categorias where categoriaId=".$id;
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);

?>

    <section style="background-color: lightcyan">
        <div class="container">
            <div class="text-center">
                <h1><?php echo $dados['categoriaNome']?></h1>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">

            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <form id="contact-form" role="form" action="confirmaEditaCategoria.php" enctype="multipart/form-data" method="post">
                        <div class="section-title">
                            <h2>Editar a categoria</h2>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <input type="hidden" name="id" value="<?php echo $id?>">

                            <input type="text" class="form-control" name="nome" required value="<?php echo $dados['categoriaNome']?>"><br>

                            <textarea type="text" class="form-control" name="descricao" required><?php echo $dados['categoriaDescricao']?></textarea><br>

                            <img width="120" src="../<?php echo $dados['categoriaImagemURL']?>">
                            <input type="file" name="imagem"><br>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <input type="submit" class="form-control" value="Editar">
                        </div>

                    </form>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="contact-image">
                        <img src="../images/edit.png" style="height: 404px; width: 404px" class="img-responsive" alt="Smiling Two Girls">
                    </div>
                </div>

            </div>
        </div>
    </section>


<?php
bottomAdmin();
?>