<?php
$id=intval($_GET['id']);
include_once ("../includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);



echo $sql="update utilizadores set utilizadorEstado ='inativo' where utilizadorId=".$id;
mysqli_query($con,$sql);

header("location:utilizadorAtivoDesativo.php");
?>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/custom.js"></script>