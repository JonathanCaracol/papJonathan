<?php
include_once("../includes/body.inc.php");
topAdmin(OFFERS);

$sql ="Select * from categorias";
$result=mysqli_query($con,$sql);
?>

<section>
    <div class="container">

        <div class="text-center">
            <h1>Adicionar nova categoria</h1>
        </div>

        <form action="confirmaNovaCategoria.php" method="post" enctype="multipart/form-data">
            <label>Nome da categoria: </label>
            <input type="text" name="nome"><br>
            <label>Descrição da categoria: </label>
            <input type="text" name="descricao"><br>
            <label>Imagem:</label>
            <input type="file" name="imagem"><br>

            <input type="Submit" value="Adiciona"><br>

    </div>
</section>

<?php
bottomAdmin();
?>
