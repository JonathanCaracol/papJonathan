<?php
    include_once("includes/body.inc.php");
    top(PERFIL);

    $sql ="Select * from utilizadores where utilizadorId =".$_SESSION['id'];
    $result=mysqli_query($con,$sql);
    $dados=mysqli_fetch_array($result);

    $sqlNotif="select count(pedidoId) from pedidos inner join servicos on pedidoServicoId=servicoId where servicoUtilizadorId=".$_SESSION['id'];
    $resultnotif=mysqli_query($con,$sqlNotif);
    $dadosNotif=mysqli_fetch_array($resultnotif);
    $notif=(int)$dadosNotif['count(pedidoId)'];
    $sqlNotif2="select count(avaliacaoId) from avaliacao where avaliacaoClienteId=".$_SESSION['id'];
    $resultnotif2=mysqli_query($con,$sqlNotif2);
    $dadosNotif2=mysqli_fetch_array($resultnotif2);
    $notif2=(int)$dadosNotif2['count(avaliacaoId)'];
    $notificacao= $notif+$notif2;
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
                                    <a href="pedidos.php?id="<?php echo $dados['utilizadorId']?> class="badge badge-pill" style="background-color: white;color: #29ca8e"><span class="badge badge-pill" style="background-color: white; color: #29ca8e"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                                        </svg><?php echo $notificacao; ?></span></a>
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


    </section>
<?php
    bottomPerfil();
?>