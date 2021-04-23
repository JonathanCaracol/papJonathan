<?php
include_once("includes/body.inc.php");
top(PERFIL);
?>

<section style="background-color: powderblue">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h1>Pedidos</h1>

                <br>

                <p class="lead">Pode ver os serviços que foram requisitados por clientes.</p>
            </div>
        </div>
    </div>
</section>
<section style="padding-left: 20%;padding-right: 20%;">
    <div id="tableContent">
</section>
<?php
bottomPedidos();
?>