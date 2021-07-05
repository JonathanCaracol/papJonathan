<?php
include_once("../includes/body.inc.php");
$txt=addslashes($_POST['txt']);
$id=intval($_POST['id']);


$sql ="Select * from servicos inner join utilizadores on servicoUtilizadorId = utilizadorId where (servicoNome LIKE '%$txt%') or (utilizadorNome LIKE '%$txt%')";
if($id>0){
    $sql ="Select * from servicos inner join utilizadores on servicoUtilizadorId = utilizadorId where (servicoNome LIKE '$txt%' or utilizadorNome LIKE '%$txt%')and servicoCategoriaId=".$id;
}
$result=mysqli_query($con,$sql);
?>

<section>

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
                <td><a href="eliminarServico.php?id=<?php echo $dados['servicoId']?>"><svg xmlns="http://www.w3.org/2000/svg"  color="green" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg></a></td>
            </tr>
            <?php
        }
        ?>
    </table>
</section>


