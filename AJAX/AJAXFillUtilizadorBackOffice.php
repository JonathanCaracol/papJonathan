<?php
include_once("../includes/body.inc.php");
$txt=addslashes($_POST['txt']);

$sql ="Select * from utilizadores where ((utilizadorEstado = 'ativo') and (utilizadorNome LIKE '$txt%')) or ((utilizadorEstado = 'inativo') and (utilizadorNome LIKE '$txt%'))";
$sql2 ="Select * from utilizadores where (utilizadorEstado = 'pendente')";
$result=mysqli_query($con,$sql);
$result2=mysqli_query($con,$sql2);
?>

<section>
    <div id="tableContent">
        <table class='table table-striped' width="100%">

            <tr>
                <th width="30%">Nome do utilizador</th>
                <th width="30%">Email do utilizador</th>
                <th width="25%">Estado utilizador</th>
                <th colspan="2" style="text-align: center">Opção</th>
            </tr>
            <?php

            while($dados2=mysqli_fetch_array($result2)){// enquanto existirem registos no result
                ?>
                <tr>
                    <td><?php echo $dados2['utilizadorNome']?></td>
                    <td><?php echo $dados2['utilizadorEmail']?></td>
                    <td><?php echo $dados2['utilizadorEstado']?></td>
                    <td align="center"><a href="ativarUtilizador.php?id=<?php echo $dados2['utilizadorId']?>">Ativar</a></td>
                    <td align="center"><a href="desativarUtilizador.php?id=<?php echo $dados2['utilizadorId']?>">Desativar</a></td>
                </tr>
                <?php
            }
            while($dados=mysqli_fetch_array($result)){// enquanto existirem registos no result
                ?>
                <tr>
                    <td><?php echo $dados['utilizadorNome']?></td>
                    <td><?php echo $dados['utilizadorEmail']?></td>
                    <td><?php echo $dados['utilizadorEstado']?></td>
                    <td align="center"><a href="ativarUtilizador.php?id=<?php echo $dados['utilizadorId']?>">Ativar</a></td>
                    <td align="center"><a href="desativarUtilizador.php?id=<?php echo $dados['utilizadorId']?>">Desativar</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</section>
