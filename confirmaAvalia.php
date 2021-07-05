<?php
include_once ("includes/config.inc.php");
include_once ("includes/body.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
$avaliacao=intval($_POST['id']);
$nota=intval($_POST['nota']);
$pontos=array(0,0,1,2);
$sql="insert into avaliacoes values(".$avaliacao.",".$pontos[$nota].",now())";
mysqli_query($con,$sql);
$sql="update pedidos set pedidoEstado='avaliado' where pedidoId=".$avaliacao;
mysqli_query($con,$sql);
echo $sql="update utilizadores inner join servicos on utilizadorId = servicoUtilizadorId 
        inner join pedidos on pedidoServicoId = servicoId set utilizadorPontos=utilizadorPontos + ".$pontos[$nota]." where pedidoId=".$avaliacao;
mysqli_query($con,$sql);
echo $sql="update utilizadores
            inner join pedidos on pedidoClienteId = utilizadorId set utilizadorPontos=utilizadorPontos - 1 where pedidoId=".$avaliacao;
mysqli_query($con,$sql);

header("location:perfil.php");
?>

