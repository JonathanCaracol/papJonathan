<?php
session_start();
$id=intval($_POST['id']);
$cliente=$_SESSION['id'];
include_once("includes/body.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
top(OFFERS);


$sql="insert into pedidos(pedidoServicoId,pedidoClienteId) values('$id','$cliente');";
mysqli_query($con,$sql);

header("location:offers.php");
?>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/custom.js"></script>