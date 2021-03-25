<?php
include_once("../includes/body.inc.php");
topAJAXAdmin(CONTACTO);
$id=intval($_GET['id']);

?>

<section>
    <div class="container">

        <div class="text-center" style="margin-bottom: 5%">
            <h1>Back-office serviços</h1>
            <br>
        </div>
    </div>
</section>


    <input id="search" type="text" class="form-control" placeholder="Pesquise">
    <div name="idcategoria" value="<?php echo $id?>" id="tableContent"></div>

<?php
bottomAJAXAdmin();
?>

