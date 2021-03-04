<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once ("../includes/config.inc.php");
 $con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
echo "<pre>";
print_r($_FILES);

$nome=addslashes($_POST['nome']);
$descricao=addslashes($_POST['descricao']);
$imagem=$_FILES['imagem']['name'];
$novoNome="../images/".$imagem;

copy($_FILES['imagem']['tmp_name'],$novoNome);

echo $sql="insert into categorias(categoriaNome,categoriaDescricao,categoriaImagemURL) values('".$nome."','.$descricao.','images/".$imagem."');";
mysqli_query($con,$sql);

echo mysqli_error($con);
//header("location:../admin/offersAdmin.php");
?>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/custom.js"></script>