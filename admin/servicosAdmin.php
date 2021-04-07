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


    <input id="search" type="text" class="form-control" placeholder="Pesquise">
<form method="post">
<?php
while($dadosbutton=mysqli_fetch_array($resultbutton)){
    ?>
    <button  type="submit" name="submit1" value="<?php echo $dadosbutton['categoriaId'] ?>" class="btn btn-success"><?php echo $dadosbutton['categoriaNome']?></button>
    <?php
    if(isset($_POST["Submit1"])){ ?>
        <input onload="window.location.href=window.location.href" type="hidden" name="id" value="<?php echo $dadosbutton['categoriaId'] ?>" id="id">
   <?php
    }
}
?>
</form>
    <div id="tableContent"></div>

<?php
bottomAJAXAdmin();
?>

