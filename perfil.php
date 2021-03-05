<?php
    include_once("includes/body.inc.php");
    top(PERFIL);
    $sql ="Select * from servicos inner join utilizadores on servicoUtilizadorId = utilizadorId";
    $result=mysqli_query($con,$sql);
    $dados=mysqli_fetch_array($result);
?>

<section>
    <div class="container">

            <div class="text-center">
                <h1>Meu perfil</h1>

                <br>

                <p class="lead">Pode ver seus serviços aqui</p>
            </div>

        <div class="container col-12">
            <div class="row">
            <div id="tableContent">
                <table class='table table-striped' width="100%">
                    <tr>
                        <td colspan="3">
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
                        <th width="40%">Nome do Serviço</th>
                        <th width="60%">Nome do Prestador</th>
                        <th colspan="2" style="text-align: center">Opções</th>
                    </tr>
                    <?php
                    while($dados=mysqli_fetch_array($result)){// enquanto existirem registos no result
                        ?>
                        <tr>
                            <td><?php echo $dados['servicoNome']?></td>
                            <td><?php echo $dados['utilizadorNome']?></td>
                            <td align="center"><a href="editarcategoria.php?id=<?php echo $dados['categoriaId']?>">Editar</a></td>
                            <td align="center"><a href="../papJonathan/admin/eliminarServico.php?id=<?php echo $dados['servicoId']?>">Apagar</a></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
            </div>
            <div class="row">

                <section id="contact">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-6 col-sm-12">
                                <form id="contact-form" role="form" action="admin/confirmaEditaPerfil.php?id=<?php echo $dados['utilizadorId']?>" enctype="multipart/form-data" method="post">
                                    <div class="section-title">
                                        <h2>Meu perfil<small>Aqui pode ver seu perfil e editar as suas informações!</small></h2>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <input type="email" class="form-control" value="<?php echo $dados['utilizadorEmail']?>" name="email" required>

                                        <input type="text" class="form-control" value="<?php echo $dados['utilizadorNome']?>" name="nome" required>

                                        <input type="text" value="<?php echo $dados['utilizadorTelefone']?>" class="form-control" name="telefone" required>
                                    </div>

                                    <div class="col-md-12 col-sm-12">
                                        <input type="submit" class="form-control" value="Editar">
                                    </div>

                                </form>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="contact-image">
                                    <img src="images/lock.png" style="height: 404px; width: 404px" class="img-responsive" alt="Smiling Two Girls">
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</section>

<?php
    bottom();
?>