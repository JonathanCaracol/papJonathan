<?php
include_once("../includes/body.inc.php");
topPerfil(PERFIL);

$sql ="Select * from servicos";
$result=mysqli_query($con,$sql);

if(!isset($_SESSION['id'])){
    header("location:../login.php?conetar");
}
?>

<section style="background-color: lightcyan">
<div class="container">
<div class="text-center">
    <h1>Adicionar novo servico</h1>
</div>
</div>
</section>

<section id="contact">
    <div class="container">

        <div class="row">

            <div class="col-md-6 col-sm-12">
                <form id="contact-form" role="form" action="confirmaNovoServico.php" enctype="multipart/form-data" method="post">
                    <div class="section-title">
                        <h2>Crie um serviço<small>Ajude mais pessoas criando mais serviços!</small></h2>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <input type="hidden" name="id" value="<?php echo $_SESSION['id']?>">

                        <input type="text" class="form-control" placeholder="Nome do serviço" name="nome" required>

                        <textarea type="text" class="form-control" placeholder="Descrição do serviço" name="descricao" required></textarea>

                        <select class="form-control" name="categoria">
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

