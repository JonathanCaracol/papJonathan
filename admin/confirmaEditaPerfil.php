<?php
include_once ("../includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
$id=intval($_GET['id']);

$email=addslashes($_POST['email']);
$nome=addslashes($_POST['nome']);
$telefone=addslashes($_POST['telefone']);



$sql="Update utilizadores set utilizadorNome='".$nome."'";
$sql.=", utilizadorTelefone='".$telefone."'";
$sql.=", utilizadorEmail='".$email."'";
$sql.=" where utilizadorId=".$id;
mysqli_query($con,$sql);
header("location:../perfil.php");
?>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/custom.js"></script>


