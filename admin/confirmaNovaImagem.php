<?php
include_once ("../includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);

$imagem=$_FILES['imagem']['name'];
$novoNome="../images/".$imagem;

copy($_FILES['imagem']['tmp_name'],$novoNome);

echo $sql="insert into slideshow(UrlSlideShow) values('images/".$imagem."');";
mysqli_query($con,$sql);

header("location:../admin/slideBackOffice.php");
?>
