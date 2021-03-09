<?php
include_once ("../includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
$id=intval($_POST['id']);

$nome=addslashes($_POST['nome']);
$descricao=addslashes($_POST['descricao']);
$categoria=intval($_POST['categoria']);

$sql="Update servicos set servicoNome='".$nome."'";
$sql.=", servicoCategoriaId='".$categoria."'";
$sql.=", servicoDescricao='".$descricao."'";
$sql.=" where servicoId=".$id;


mysqli_query($con,$sql);
header("location:../perfil.php");
?>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/custom.js"></script>