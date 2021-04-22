<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$sql="Select * from pedidos inner join servicos on pedidoServicoId = servicoId inner join utilizadores on pedidoClienteId = utilizadorId where servicoUtilizadorId=".$_SESSION['id'];
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
                    <h4><a href="perfilCliente.php?id=<?php echo $dados['utilizadorId']?>"> Nome do cliente: <?php echo $dados['utilizadorNome'] ?></h4>
                    <br><h1 class="badge badge-pill" style="width: 200px;height: 30px;vertical-align: middle;background-color: white; color: green"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 14 12">
                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                    </svg>Aceitar</h1>
                    <h1 class="badge badge-pill" style="margin-left: 30px;width: 200px;height: 30px;vertical-align: middle;background-color: white; color: red"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 14 12">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg>Recusar</h1>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</section>

