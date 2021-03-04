<?php
include_once ("config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);


$nome=addslashes($_POST['nome']);
$descricao=addslashes($_POST['descricao']);
$imagem=$_FILES['imagem']['name'];
$novoNome="images/".$imagem;

copy($_FILES['imagem']['tmp_name'],$novoNome);

echo $sql="insert into categorias(categoriaNome,categoriaDescricao,categoriaImagemURL) values('".$nome."','.$descricao.','images/".$imagem."');";
mysqli_query($con,$sql);
//header("location:../admin/offersAdmin.php");
?>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/custom.js"></script>