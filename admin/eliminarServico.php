<?php
include_once ("../includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
$id=intval($_GET['id']);
$sql= "delete from servicos where servicoId=".$id;

mysqli_query($con,$sql);


if(!isset($_SESSION['id'])){
    header("location:servicosAdmin.php");
}else{
    header("location:../perfil.php");
}
?>
