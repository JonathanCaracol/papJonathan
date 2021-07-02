<?php
$id=intval($_GET['id']);
include_once ("includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
$sql= "update pedidos set pedidoEstado='recusado' where pedidoId=".$id;
mysqli_query($con,$sql);

header("location:pedidos.php");
?>