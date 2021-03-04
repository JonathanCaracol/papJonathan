<?php
include_once("../includes/body.inc.php");
topAdmin(OFFERS);

$sql ="Select * from categorias";
$result=mysqli_query($con,$sql);
?>

    <section>
        <div class="container">

            <div class="text-center">
                <h1>Back-office categorias</h1>
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

                            <a class="btn-sm btn-success" href="../admin/adicionaCategorias.php">Adiciona</a>
                        </td>
                    </tr>
                    <tr>
                        <th width="40%">Imagem</th>
                        <th width="60%">Nome do serviço</th>
                        <th colspan="2" style="text-align: center">Opções</th>
                    </tr>

<?php
while($dados=mysqli_fetch_array($result)){// enquanto existirem registos no result
    ?>
                    <tr>
                        <td><img width="120" src="../<?php echo $dados['categoriaImagemURL'] ?>"></td>
                        <td><?php echo $dados['categoriaNome']?></td>
                        <td align="center"><a href="editarServicos.php">Editar</a></td>
                        <td align="center">Apagar</td>
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