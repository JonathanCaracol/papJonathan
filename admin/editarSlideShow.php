<?php
$id=intval($_GET['id']);
include_once("../includes/body.inc.php");
topAJAXAdmin(MAIS);
$sql="select * from slideshow where idslideShow=".$id;
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
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
            <h1>Editar imagem para o slideshow</h1>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">

        <div class="row">

            <div class="col-md-6 col-sm-12">
                <form id="contact-form" role="form" action="confirmaEditaSlideShow.php" enctype="multipart/form-data" method="post">
                    <div class="section-title">
                        <h2>Editar a imagem</h2>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <input type="hidden" name="id" value="<?php echo $id?>">

                        <label for="nome">Capa</label><br>
                        <img id="output_image" width="120" src="../<?php echo $dados['UrlSlideShow']?>">
                        <input style="margin-top: 10px" type="file" class="custom-file-input" onchange="preview_image(event)"  name="imagem">
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <input type="submit" class="form-control" value="Editar">
                    </div>

                </form>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="contact-image">
                    <img src="../images/edit.png" style="height: 404px; width: 404px" class="img-responsive" alt="Smiling Two Girls">
                </div>
            </div>

        </div>
    </div>
</section>
<?php
bottomAdmin();
?>