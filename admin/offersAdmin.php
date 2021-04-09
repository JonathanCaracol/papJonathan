<?php
include_once("../includes/body.inc.php");
topAdmin(OFFERS);

$sql ="Select * from categorias where categoriaCategoriaId is NULL";
$result=mysqli_query($con,$sql);
?>

<section>
        <div class="container">

            <div class="text-center" style="margin-bottom: 5%">
                <h1>Back-office categorias</h1>
                <br>
            </div>
        </div>

            <div id="tableContent">
                <table class='table table-striped' width="100%">
                    <tr>
                        <td colspan="4"  align='center' style="vertical-align: middle">

                            <a class="btn-sm btn-success" href="../admin/adicionaCategorias.php">Adicionar nova categoria</a>
                        </td>
                    </tr>
                    <tr>
                        <th width="40%">Imagem</th>
                        <th width="40%">Nome da categoria</th>
                        <th colspan="2" style="text-align: center">Opções</th>
                    </tr>

<?php
while($dados=mysqli_fetch_array($result)){// enquanto existirem registos no result
    ?>
                    <tr>
                        <td><img width="120" src="../<?php echo $dados['categoriaImagemURL']?>"></td>
                        <td><?php echo $dados['categoriaNome']?></td>
                        <td align="center"><a href="editarcategoria.php?id=<?php echo $dados['categoriaId']?>">Editar</a></td>
                        <td align="center"><a href="eliminarcategoria.php?id=<?php echo $dados['categoriaId']?>">Apagar</a></td>
                    </tr>
    <?php
}
?>
                </table>
            </div>
    </section>

<?php
bottomAdmin();
?>

