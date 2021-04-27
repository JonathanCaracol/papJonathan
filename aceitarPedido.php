<?php
$id=intval($_GET['id']);
include_once ("includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
$sql= "select * from pedidos where pedidoId=".$id;
$result= mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
$cliente=$dados['pedidoClienteId'];
$servico=$dados['pedidoServicoId'];
$insert="insert into avaliacao(avaliacaoClienteId,avaliacaoServicoId) values('$cliente','$servico');";

mysqli_query($con,$insert);



$delete ="delete from pedidos where pedidoId=".$id;
mysqli_query($con,$delete);
header("location:pedidos.php");
?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/common.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>