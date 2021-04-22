<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$sql="Select * from servicos inner join utilizadores on servicoUtilizadorId = utilizadorId where servicoUtilizadorId=".$_SESSION['id'];
$result=mysqli_query($con,$sql);


?>
<section >

    <?php
    while($dados=mysqli_fetch_array($result)){// enquanto existirem registos no result
        ?>
        <div>
            <div style="background-color: #aff3d8" class="courses-thumb courses-thumb-secondary">
                <div class="courses-detail">
                    <h2><a href="servicoDetalhes.php?id=<?php echo $dados['servicoId']?>"><?php echo $dados['servicoNome']?></a></h2>
                    <h4><?php echo $dados['servicoDescricao']?></h4>
                    <br><p><a href="../papJonathan/admin/editaServico.php?id=<?php echo $dados['servicoId']?>">Editar</a></p>
                    <br><p><a href="../papJonathan/admin/eliminarServico.php?id=<?php echo $dados['servicoId']?>">Apagar</a></p>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</section>
