<?php
    include_once("includes/body.inc.php");
    top(PERFIL);
    $sql ="Select * from utilizadores where utilizadorId = '1'";
    $sql2="Select * from servicos inner join utilizadores on servicoUtilizadorId = utilizadorId where servicoUtilizadorId='1'";
    $result2=mysqli_query($con,$sql2);
    $result=mysqli_query($con,$sql);
    $dados=mysqli_fetch_array($result);
?>

<section style="background-color: powderblue">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h1>Meu perfil</h1>

                <br>

                <p class="lead">Pode ver seus serviços aqui</p>
            </div>
        </div>
    </div>
</section>
<section style="padding-left: 20%;padding-right: 20%;">
            <section id="contact">

                    <div class="row">

                        <div style="margin-left: 10%" class="col-md-6 col-sm-12">
                            <form id="contact-form" role="form" action="admin/confirmaEditaPerfil.php?id=<?php echo $dados['utilizadorId']?>" enctype="multipart/form-data" method="post">
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

                        <div>
                            <div class="contact-image">
                                <img src="images/lock.png" style="height: 300px; width: 300px" class="img-responsive" alt="Smiling Two Girls">
                            </div>
                        </div>

                    </div>

            </section>

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
                    while($dados2=mysqli_fetch_array($result2)){// enquanto existirem registos no result
                ?>
                        <tr>
                            <td><a href="servicoDetalhes.php?id=<?php echo $dados2['servicoId']?>"><?php echo $dados2['servicoNome']?></a></td>
                            <td><?php echo $dados2['utilizadorNome']?></td>
                            <td align="center"><a href="../papJonathan/admin/editaServico.php?id=<?php echo $dados2['servicoId']?>">Editar</a></td>
                            <td align="center"><a href="../papJonathan/admin/eliminarServico.php?id=<?php echo $dados2['servicoId']?>">Apagar</a></td>
                        </tr>
                <?php
                    }
                ?>
                </table>
            </div>
    </section>
<?php
    bottom();
?>