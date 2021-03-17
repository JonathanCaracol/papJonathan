<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$id=intval($_POST['id']);
$sql="Select * from servicos where servicoId=$id";

$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
echo $dados['servicoNome'];
?>
