<?php
include_once("../includes/body.inc.php");
topAJAXAdmin(MAIS);


$sql ="Select * from slideshow";
$result=mysqli_query($con,$sql);
?>

<section>
    <div class="container">

        <div class="text-center" style="margin-bottom: 5%">
            <h1>Back-office categorias</h1>
            <br>
        </div>
    </div>

    <div id="tableContent">
        <table class='table table-striped' width="100%">
            <tr>
                <td colspan="4"  align='center' style="vertical-align: middle">

                    <a class="btn-sm btn-success" href="../admin/adicionaSlideShow.php">Adicionar nova imagem</a>
                </td>
            </tr>
            <tr>
                <th width="40%">Imagem</th>
                <th width="40%">Id da imagem</th>
                <th colspan="2" style="text-align: center">Opções</th>
            </tr>

            <?php
            while($dados=mysqli_fetch_array($result)){// enquanto existirem registos no result
                ?>
                <tr>
                    <td><img width="120" src="../<?php echo $dados['UrlSlideShow']?>"></td>
                    <td><?php echo $dados['idslideShow']?></td>
                    <td align="center"><a href="editarSlideShow.php?id=<?php echo $dados['idslideShow']?>"><svg xmlns="http://www.w3.org/2000/svg" color="green" width="26" height="26" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/></svg></a></td>
                    <td align="center"><a onclick="confirmaElimina(<?php echo $dados['idslideShow'] ?>)"><svg xmlns="http://www.w3.org/2000/svg" color="green" width="26" height="26" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</section>
<script>
    function confirmaElimina(id){
        if (confirm('Tem a certeza que quer eliminar esta imagem?')) {
            window.location.href ="eliminarSlideShow.php?id="+id;
        }
    }
</script>
<?php
bottomAdmin();
?>
