<?php
include_once("../includes/body.inc.php");
topAJAXUtilizador(HOME);
?>

<section>

        <div class="text-center" style="margin-bottom: 5%">
            <h1>Back-office dos utilizadores</h1>
            <br>
        </div>
</section>


    <input id="search" type="text" class="form-control" placeholder="Pesquise">
    <div id="tableContent"></div>
<?php
bottomAJAXUtilizador();
?>

