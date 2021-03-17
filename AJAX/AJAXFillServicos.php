<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$txt=addslashes($_POST['txt']);
$sql="Select * from servicos inner join utilizadores on servicoUtilizadorId = utilizadorId where servicoNome LIKE '$txt%'";

$result=mysqli_query($con,$sql);

?>
<section>

    <div id="tableContent">
        <table class='table table-striped'>
            <tr>
                <td colspan="2">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Pesquise">
                        </div>
                    </form>
                </td>
                <td align='center' style="vertical-align: middle">
                    <a class="btn-sm btn-success" href="admin/adicionarServico.php?id=1">Adiciona</a>
                </td>
            </tr>
            <tr>
                <th width="40%">Nome do Serviço</th>
                <th width="40%">Nome do Prestador</th>
                <th width="40%">Email do Prestador</th>
            </tr>
            <?php
            while($dados=mysqli_fetch_array($result)){// enquanto existirem registos no result
                ?>
                <tr>
                    <td><a href="servicoDetalhes.php?id=<?php echo $dados['servicoId']?>"><?php echo $dados['servicoNome']?></a></td>
                    <td><?php echo $dados['utilizadorNome']?></td>
                    <td><?php echo $dados['utilizadorEmail']?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</section>