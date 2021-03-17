<?php
include_once("../includes/body.inc.php");
topAdmin(CONTACTO);

$sql ="Select * from servicos inner join utilizadores on servicoUtilizadorId = utilizadorId";
$result=mysqli_query($con,$sql);
?>

<section>
    <div class="container">

        <div class="text-center" style="margin-bottom: 5%">
            <h1>Back-office serviços</h1>
            <br>
        </div>
    </div>

    <div id="tableContent">
        <table class='table table-striped' width="100%">
            <tr>
                <td colspan="4">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Pesquise">
                        </div>
                    </form>
                </td>
            </tr>
            <tr>
                <th width="10%">Id</th>
                <th width="40%">Nome do serviço</th>
                <th width="40%">Nome do prestador</th>
                <th width="20%">Opção</th>
            </tr>

            <?php
            while($dados=mysqli_fetch_array($result)){// enquanto existirem registos no result
                ?>
                <tr>
                    <td style="margin-left: 5%"><?php echo $dados['servicoId']?></td>
                    <td><a href="../servicoDetalhes.php?id=<?php echo $dados['servicoId']?>"><?php echo $dados['servicoNome']?></a></td>
                    <td><?php echo $dados['utilizadorNome']?></td>
                    <td><a href="eliminarServico.php?id=<?php echo $dados['servicoId']?>">Apagar</a></td>
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

