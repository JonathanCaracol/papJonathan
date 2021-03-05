<?php
include_once ("../includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);


$nome=addslashes($_POST['nome']);
$descricao=addslashes($_POST['descricao']);
$categoria=intval($_POST['categoria']);
$utilizadorId=intval($_POST['id']);

echo $sql="insert into servicos(servicoNome,servicoCategoriaId,servicoDescricao,servicoUtilizadorId) values('$nome','$categoria','$descricao','$utilizadorId')";


mysqli_query($con,$sql);
header("location:../perfil.php");
?>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/custom.js"></script>