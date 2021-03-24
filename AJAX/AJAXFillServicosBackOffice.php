<?php
include_once("../includes/body.inc.php");
$txt=addslashes($_POST['txt']);

$sqlbutton="select * from categorias";
$sql ="Select * from servicos inner join utilizadores on servicoUtilizadorId = utilizadorId where servicoNome LIKE '$txt%'";
$result=mysqli_query($con,$sql);
$resultbutton=mysqli_query($con,$sqlbutton)
?>

<section>
    <table class='table table-striped' width="100%">
        <tr>
    <?php
    while($dadosbutton=mysqli_fetch_array($resultbutton)){
        ?>
        <td><button class="btn btn-success"><?php echo $dadosbutton['categoriaNome']?></button></td>
        <?php
    }
    ?>
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
</section>
