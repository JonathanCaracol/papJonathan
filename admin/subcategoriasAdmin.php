<?php
$id=intval($_GET['id']);
include_once("../includes/body.inc.php");
topAdmin(OFFERS);
$sqltitulo ="Select * from categorias where categoriaId =".$id;
$resulttitulo=mysqli_query($con,$sqltitulo);
$dadostitulo=mysqli_fetch_array($resulttitulo);

$sql ="Select * from categorias where categoriaCategoriaId =".$id;
$result=mysqli_query($con,$sql);
?>

<section>
    <div class="container">

        <div class="text-center" style="margin-bottom: 5%">
            <h1>Sub categorias de <?php echo $dadostitulo['categoriaNome']?></h1>
            <br>
        </div>

        <div id="tableContent">
            <table class='table table-striped' width="100%">
                <tr>
                    <td colspan="3">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Pesquise">
                            </div>
                        </form>
                    </td>
                    <td   align='center' style="vertical-align: middle">

                        <a class="btn-sm btn-success" href="../admin/adicionaSubCategorias.php">Adiciona</a>
                    </td>
                </tr>
                <tr>
                    <th width="40%">Imagem</th>
                    <th width="60%">Nome do sub serviço</th>
                    <th colspan="2" style="text-align: center">Opções</th>
                </tr>

                <?php
                while($dados=mysqli_fetch_array($result)){// enquanto existirem registos no result
                    ?>
                    <tr>
                        <td><img width="120" src="../<?php echo $dados['categoriaImagemURL']?>"></td>
                        <td><?php echo $dados['categoriaNome']?></td>
                        <td align="center"><a href="editarSubcategoria.php?id=<?php echo $dados['categoriaId']?>">Editar</a></td>
                        <td align="center"><a href="eliminarcategoria.php?id=<?php echo $dados['categoriaId']?>">Apagar</a></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</section>



<?php
bottomAdmin();
?>
