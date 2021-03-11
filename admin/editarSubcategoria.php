<?php
$id=intval($_GET['id']);
include_once("../includes/body.inc.php");
topAdmin(OFFERS);

$sql="select * from categorias where categoriaId=".$id;
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>

<section>
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
                <form id="contact-form" role="form" action="confirmaEditaSubcategoria.php" enctype="multipart/form-data" method="post">
                    <div class="section-title">
                        <h2>Editar a Subcategoria</h2>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <input type="hidden" name="id" value="<?php echo $id?>">

                        <input type="text" class="form-control" value="<?php echo $dados['categoriaNome']?>" name="nome" required>

                        <textarea type="text" class="form-control" placeholder="<?php echo $dados['categoriaDescricao']?>" name="descricao" required></textarea>

                        <select class="form-control" name="categoria">
                            <option value="-1">Escolha a categoria...</option>
                            <?php
                            $sql ="Select * from categorias where categoriaCategoriaId is NULL";
                            $result=mysqli_query($con,$sql);
                            while ($dados=mysqli_fetch_array($result)){
                                ?>
                                <option value="<?php echo $dados['categoriaId']?>"><?php echo $dados['categoriaNome']?></option>
                                <?php
                            }
                            ?>
                        </select>

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

