<?php
$id=intval($_GET['id']);
include_once("../includes/body.inc.php");
topAdmin(OFFERS);

$sql ="Select * from servicos";
$result=mysqli_query($con,$sql);
?>

<section>
    <div class="container">

        <div class="text-center">
            <h1>Adicionar novo servico</h1>
        </div>

        <form action="confirmaNovoServico.php" method="post" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?php echo $id?>">

            <label>Nome da servico: </label>
            <input type="text" name="nome"><br>
            <label>Descrição do servico: </label>
            <input type="text" name="descricao"><br>
            <select name="categoria">
                <option value="-1">Escolha a categoria...</option>
                <?php
                $sql="select * from categorias order by categoriaNome";
                $result=mysqli_query($con,$sql);
                while ($dados=mysqli_fetch_array($result)){
                ?>
                <option value="<?php echo $dados['categoriaId']?>"><?php echo $dados['categoriaNome']?></option>
                    <?php
                }
                ?>
            </select>
            <input type="Submit" value="Adiciona"><br>

    </div>
</section>

<?php
bottomAdmin();
?>

