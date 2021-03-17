<?php
include_once("../includes/body.inc.php");
topAdmin(OFFERS);


?>

<section style="background-color: lightcyan">
    <div class="container">
        <div class="text-center">
            <h1>Adicionar uma nova Subcategoria</h1>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">

        <div class="row">

            <div class="col-md-6 col-sm-12">
                <form id="contact-form" role="form" action="confirmarAdicionaSubcategorias.php" enctype="multipart/form-data" method="post">
                    <div class="section-title">
                        <h2>Criar uma Subcategoria</h2>
                    </div>
                    <div class="col-md-12 col-sm-12">

                        <input type="text" class="form-control" placeholder="Nome da categoria" name="nome" required>

                        <textarea type="text" class="form-control" placeholder="Descrição da categoria" name="descricao" required></textarea>

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

                        <label>Imagem da Subcategoria</label><input type="file" name="imagem">
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
