<?php
$id=intval($_GET['id']);
include_once ("includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
$sql= "delete from pedidos where pedidoId=".$id;

mysqli_query($con,$sql);
header("location:pedidos.php");
?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/common.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>