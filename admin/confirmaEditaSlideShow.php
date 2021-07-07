<?php
include_once ("../includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);

$id=intval($_POST['id']);
$imagem=$_FILES['imagem']['name'];
$novoNome="../images/".$imagem;

$sql="Update slideshow set ";
if($imagem!=''){
    $sql.="UrlSlideShow='images/".$imagem."'";
    copy($_FILES['imagem']['tmp_name'],$novoNome);
}

$sql.=" where idslideShow=".$id;
echo $sql;
mysqli_query($con,$sql);
header("location:../admin/slideBackOffice.php");