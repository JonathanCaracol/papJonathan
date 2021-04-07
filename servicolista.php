<?php
include_once("includes/body.inc.php");
top(OFFERS);
$id = $_GET["id"];

$sql2 ="Select * from categorias where categoriaId =".$id;
$result2=mysqli_query($con,$sql2);
$dados2=mysqli_fetch_array($result2)
?>

<input type="hidden" name="id" value="<?php echo $id; ?>" id="id">
<section style="background-color: lightcyan">
    <div class="container">
        <div class="text-center">
            <h1><?php echo $dados2['categoriaNome'] ?></h1>
            <br>
            <p class="lead">Escolha o serviço que precisa no nosso grande catálogo!</p>
        </div>
    </div>
</section>

<section>
    <div class="form-group">
        <input id="search" type="text" class="form-control" placeholder="Pesquise">
    </div>
    <div id="tableContent"></div>
</section>


<?php
bottom();
?>

