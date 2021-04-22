<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$txt=addslashes($_POST['txt']);
$id=intval($_POST['id']);
$sql="Select * from servicos inner join utilizadores on servicoUtilizadorId = utilizadorId where servicoNome LIKE '$txt%'";
if($id>0){
    $sql="Select * from servicos inner join utilizadores on servicoUtilizadorId = utilizadorId where servicoNome LIKE '$txt%' and servicoCategoriaId=".$id;
}

$result=mysqli_query($con,$sql);

?>
<section >

            <?php
            while($dados=mysqli_fetch_array($result)){// enquanto existirem registos no result
                ?>
                <a href="servicoDetalhes.php?id=<?php echo $dados['servicoId']?>"><div>
                    <div style="background-color: #aff3d8" class="courses-thumb courses-thumb-secondary">
                        <div class="courses-detail">
                            <h3><?php echo $dados['servicoNome'] ?></h3>
                            <br><p><?php echo $dados['utilizadorNome']?></p>
                            <br><p><?php echo $dados['utilizadorEmail']?></p>
                        </div>
                    </div>
                </div></a>
                <?php
            }
            ?>
</section>
