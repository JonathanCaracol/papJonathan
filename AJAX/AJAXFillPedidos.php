<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$sql="Select * from pedidos inner join servicos on pedidoServicoId = servicoId inner join utilizadores on pedidoClienteId = utilizadorId where servicoUtilizadorId=1";
$result=mysqli_query($con,$sql);


?>
<section >

    <?php
    while($dados=mysqli_fetch_array($result)){// enquanto existirem registos no result
        ?>
        <div>
            <div style="background-color: #aff3d8" class="courses-thumb courses-thumb-secondary">
                <div class="courses-detail">
                    <h2><a href="servicoDetalhes.php?id=<?php echo $dados['servicoId']?>">Nome do serviço: <?php echo $dados['servicoNome']?></a></h2>
                    <h4>Nome do cliente: <?php echo $dados['utilizadorNome'] ?></h4>
                    <br><p><a href="">Aceitar</a></p>
                    <br><p><a href="">Recusar</a></p>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</section>
