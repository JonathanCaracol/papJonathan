<?php
include_once ("../includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);


$nome=addslashes($_POST['nome']);
$descricao=addslashes($_POST['descricao']);
$categoria=intval($_POST['categoria']);
$imagem=$_FILES['imagem']['name'];
$novoNome="../images/".$imagem;

copy($_FILES['imagem']['tmp_name'],$novoNome);

echo $sql="insert into categorias(categoriaNome,categoriaDescricao,categoriaImagemURL,categoriaCategoriaId) values('$nome','$descricao','images/".$imagem."','$categoria');";
mysqli_query($con,$sql);

header("location:../admin/offersAdmin.php");
?>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/custom.js"></script>
