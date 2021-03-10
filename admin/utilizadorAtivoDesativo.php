<?php
include_once("../includes/body.inc.php");
topAdmin(OFFERS);

$sql ="Select * from utilizadores";
$result=mysqli_query($con,$sql);
?>

<section>
    <div class="container">

        <div class="text-center" style="margin-bottom: 5%">
            <h1>Back-office dos utilizadores</h1>
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
                </tr>
                <tr>
                    <th width="40%">Nome do utilizador</th>
                    <th width="60%">Email do utilizador</th>
                    <th style="text-align: center">Opção</th>
                </tr>

                <?php
                while($dados=mysqli_fetch_array($result)){// enquanto existirem registos no result
                    ?>
                    <tr>
                        <td><?php echo $dados['utilizadorNome']?></td>
                        <td><?php echo $dados['utilizadorEmail']?></td>
                        <td align="center"><a href="editarcategoria.php?id=<?php echo $dados['categoriaId']?>">Desativar</a></td>
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

