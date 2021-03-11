<?php
include_once ("../includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);

$nome=addslashes($_POST['nome']);
$id=intval($_POST['id']);
$descricao=addslashes($_POST['descricao']);
$categoria=intval($_POST['categoria']);
$imagem=$_FILES['imagem']['name'];
$novoNome="../images/".$imagem;

$sql="Update categorias set categoriaNome='".$nome."'";
$sql.=", categoriaDescricao='".$descricao."'";
if($imagem!=''){
    $sql.=", categoriaImagemURL='imagens/".$imagem."'";
    copy($_FILES['imagem']['tmp_name'],$novoNome);
}
$sql.=", categoriaCategoriaId='".$categoria."'";
$sql.=" where categoriaId=".$id;
mysqli_query($con,$sql);
header("location:../admin/offersAdmin.php");
?>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/custom.js"></script>
