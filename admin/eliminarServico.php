<?php
include_once ("../includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
$id=intval($_GET['id']);
$sql= "delete from servicos where servicoId=".$id;

mysqli_query($con,$sql);
header("location:../perfil.php");
?>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/custom.js"></script>
