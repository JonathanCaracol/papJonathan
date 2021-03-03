<?php
    include_once("includes/body.inc.php");
    top();
?>

<section>
        <div class="container">

            <div class="text-center">
                <h1>Meu perfil</h1>

                <br>

                <p class="lead">Pode ver seus serviços aqui</p>
            </div>

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

                            <a class="btn-sm btn-success" href="adicionaServicos.php">Adiciona</a>
                        </td>
                    </tr>
                    <tr>
                        <th width="40%">Nome do Serviço</th>
                        <th width="60%">Nome do Prestador</th>
                        <th colspan="2" style="text-align: center">Opções</th>
                    </tr>
                    <tr>

                        <td><a href="servicoDetalhes.php">Madeira estatuas</a></td>
                        <td>Jonthan Carajoinas</td>
                        <td align="center"><a href="editarServicos.php">Editar</a></td>
                        <td align="center">Apagar</td>

                    </tr>
                </table>
            </div>
        </div>
    </section>

<?php
    bottom();
?>