<?php
$id=intval($_GET['id']);
include_once ("../includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
$sql= "delete from categorias where categoriaId=".$id;
$sql1= "delete from servicos where servicoCategoriaId=".$id;
$sql2= "delete from avaliacao inner join servicos on avaliacaoServicoId=servicoId where servicoCategoriaId=".$id;
$sql3= "delete from pedidos inner join servicos on pedidoServicoId=servicoId where servicoCategoriaId=".$id;

mysqli_query($con,$sql2);
mysqli_query($con,$sql3);
mysqli_query($con,$sql1);
mysqli_query($con,$sql);
header("location:../admin/offersAdmin.php");
?>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/custom.js"></script>