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
                <h1>Editar a categoria: <?php echo $dados['categoriaNome']?></h1>
            </div>

            <form action="confirmaEditaCategoria.php" method="post" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?php echo $id?>">

                <label>Nome da categoria:</label>
                <input type="text" name="nome" value="<?php echo $dados['categoriaNome']?>">
                <br>
                <label>Descrição da categoria:</label>
                <input type="text" name="descricao" value="<?php echo $dados['categoriaDescricao']?>">
                <br>
                <label>Imagem</label><br>
                <img width="120" src="../<?php echo $dados['categoriaImagemURL']?>"><br>
                <input type="file" name="imagem"><br>
                <input type="submit" value="Edita">
            </form>

        </div>
    </section>

<?php
bottomAdmin();
?>