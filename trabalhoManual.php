<?php
include_once("includes/body.inc.php");
top(OFFERS);
?>

<section>
    <div class="container">

        <div class="text-center">
            <h1>Serviços</h1>

            <br>

            <p class="lead">Escolha o serviço que precisa no nosso grande catálogo!</p>
        </div>

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
                    <td align='center' style="vertical-align: middle">

                        <a class="btn-sm btn-success" href="adicionaServicos.php">Adiciona</a>
                    </td>
                </tr>
                <tr>
                    <th width="40%">Nome do Serviço</th>
                    <th width="50%">Nome do Prestador</th>
                    <th  width="10%">Rating</th>
                </tr>
                <tr>

                    <td><a href="servicoDetalhes.php">Estatuas de madeira</a></td>
                    <td>Jonthan Carajoinas</td>
                    <td>3<fieldset class="rating"><input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label></fieldset></td>

                </tr>
            </table>
        </div>
    </div>
</section>


<?php
bottom();
?>