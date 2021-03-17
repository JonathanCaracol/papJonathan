<?php
$id=intval($_GET['id']);
include_once("../includes/body.inc.php");
topAdmin(OFFERS);


$sql="select * from servicos where servicoId=".$id;
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);

?>

    <section style="background-color: lightcyan">
        <div class="container">
            <div class="text-center">
                <h1><?php echo $dados['servicoNome']?></h1>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">

            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <form id="contact-form" role="form" action="confirmaEditaServico.php" enctype="multipart/form-data" method="post">
                        <div class="section-title">
                            <h2>Editar o serviço</h2>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <input type="hidden" name="id" value="<?php echo $id?>">

                            <input type="text" class="form-control" name="nome" required value="<?php echo $dados['servicoNome']?>"><br>

                            <textarea type="text" class="form-control" name="descricao" required placeholder="<?php echo $dados['servicoDescricao']?>"></textarea><br>

                            <select class="form-control" name="categoria" required>
                                <option value="-1">Escolha a categoria...</option>
                                <?php
                                $sql="select * from categorias order by categoriaNome";
                                $result=mysqli_query($con,$sql);
                                while ($dados=mysqli_fetch_array($result)){
                                    ?>
                                    <option value="<?php echo $dados['categoriaId']?>"><?php echo $dados['categoriaNome']?></option>
                                    <?php
                                }
                                ?>
                            </select>
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