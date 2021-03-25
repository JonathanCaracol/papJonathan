<?php
include_once("../includes/body.inc.php");
$txt=addslashes($_POST['txt']);
$id=addslashes($_POST['id']);

$sqlbutton="select * from categorias";
$sql ="Select * from servicos inner join utilizadores on servicoUtilizadorId = utilizadorId where (servicoNome LIKE '$txt%') or (servicoId =".$id.")";
$result=mysqli_query($con,$sql);
$resultbutton=mysqli_query($con,$sqlbutton)
?>

<section>
        <?php
        while($dadosbutton=mysqli_fetch_array($resultbutton)){
            ?>
            <button onclick="location='../admin/servicosAdmin.php?id=<?php echo $dadosbutton['categoriaId']?>'" class="btn btn-success"><?php echo $dadosbutton['categoriaNome']?></button>
            <?php
        }
        ?>
    <table class='table table-striped' width="100%">
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
