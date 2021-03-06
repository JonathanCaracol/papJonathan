<?php
include_once("../includes/body.inc.php");
topAJAXAdmin(MAIS);
?>
<script>
    function preview_image(event)
    {
        var reader = new FileReader();
        reader.onload = function()
        {
            var output = document.getElementById('output_image');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

<section style="background-color: lightcyan">
    <div class="container">
        <div class="text-center">
            <h1>Adicionar uma nova imagem para o slideshow</h1>
        </div>
    </div>
</section>


<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <form id="contact-form" role="form" action="confirmaNovaImagem.php" enctype="multipart/form-data" method="post">
                    <div class="section-title">
                        <h2>Adicionar uma imagem</h2>
                    </div>
                    <div style="margin-top: 10%" class="col-md-12 col-sm-12">
                        <label>Imagem da categoria</label><br>
                        <img id="output_image" width="120">
                        <input style="margin-top: 10px" type="file" class="custom-file-input" onchange="preview_image(event)"  name="imagem">
                    </div>

                    <div style="margin-top: 10%" class="col-md-12 col-sm-12">
                        <input type="submit" class="form-control" value="Adicionar">
                    </div>

                </form>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="contact-image">
                    <img src="../images/adicionarservico.png" style="height: 404px; width: 404px" class="img-responsive" alt="Smiling Two Girls">
                </div>
            </div>
        </div>
    </div>
</section>



<?php
bottomAdmin();
?>
