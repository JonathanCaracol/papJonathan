<?php
include_once("../includes/body.inc.php");
topAJAXAdmin(CONTACTO);
$sqlbutton="select * from categorias";
$resultbutton=mysqli_query($con,$sqlbutton)
?>
<section>
    <div class="container">

        <div class="text-center" style="margin-bottom: 5%">
            <h1>Back-office serviços</h1>
            <br>
        </div>
    </div>
</section>



<div>
    <input id="search" type="text" class="form-control" style="width: 70%; float: left" placeholder="Pesquise">
    &nbsp;

    <select id="id" name="id" class="form-select" aria-label="Default select example">
        <option selected>Categorias</option>
        <?php
        while($dadosbutton=mysqli_fetch_array($resultbutton)){
            ?>
            <option value="<?php echo $dadosbutton['categoriaId'] ?>"><?php echo $dadosbutton['categoriaNome']?></option>
            <?php
        }
        ?>
    </select>
</div>
    <div id="tableContent"></div>

<?php
bottomAJAXAdmin();
?>