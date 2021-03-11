<?php
$id=intval($_GET['id']);
include_once("includes/body.inc.php");
top(OFFERS);

$sql ="Select * from servicos inner join utilizadores on servicoUtilizadorId = utilizadorId where servicoCategoriaId =".$id;
$sql2 ="Select * from categorias where categoriaId =".$id;
$result=mysqli_query($con,$sql);
$result2=mysqli_query($con,$sql2);
$dados2=mysqli_fetch_array($result2)
?>

<section>
    <div class="container">
        <div class="text-center">
            <h1><?php echo $dados2['categoriaNome'] ?></h1>

            <br>

            <p class="lead">Escolha o serviço que precisa no nosso grande catálogo!</p>
        </div>
    </div>
</section>

<section class="section-background">
    <div class="container">
            <div class="row">
                <div id="tableContent">
                    <table class='table table-striped' width="100%">
                        <tr>
                            <td colspan="2">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Pesquise">
                                    </div>
                                </form>
                            </td>
                            <td   align='center' style="vertical-align: middle">

                                <a class="btn-sm btn-success" href="admin/adicionarServico.php?id=1">Adiciona</a>
                            </td>
                        </tr>
                        <tr>
                            <th width="50%">Nome do Serviço</th>
                            <th width="50%">Nome do Prestador</th>
                            <th width="50%">Email do Prestador</th>
                        </tr>
                        <?php
                        while($dados=mysqli_fetch_array($result)){// enquanto existirem registos no result
                            ?>
                            <tr>
                                <td><a href="servicoDetalhes.php?id=<?php echo $dados['servicoId']?>"><?php echo $dados['servicoNome']?></a></td>
                                <td><?php echo $dados['utilizadorNome']?></td>
                                <td><?php echo $dados['utilizadorEmail']?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
    </div>
</section>

<?php
bottom();
?>

