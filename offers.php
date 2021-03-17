<?php
include_once("includes/body.inc.php");
top(OFFERS);

$sql ="Select * from categorias";
$result=mysqli_query($con,$sql);
?>

     <section style="background-color: lightcyan">
          <div class="container">
               <div class="text-center">
                    <h1>Serviços</h1>

                    <br>

                    <p class="lead">Escolha o serviço que precisa no nosso grande catálogo!</p>
               </div>
          </div>
     </section>

     <section class="section-background">
          <div class="container">
               <div class="row">
                   <?php
                   while($dados=mysqli_fetch_array($result)){// enquanto existirem registos no result
                   ?>
                   <div class="col-md-4 col-sm-4">
                       <div class="courses-thumb courses-thumb-secondary">
                           <div class="courses-top">
                               <div class="courses-image">
                                   <img src="<?php echo $dados['categoriaImagemURL'] ?>" class="img-responsive" alt="">
                               </div>
                           </div>

                           <div class="courses-detail">
                               <h3><a href="servicolista.php?id=<?php echo $dados['categoriaId']?>"><?php echo $dados['categoriaNome'] ?></a></h3>
                               <br><p><?php echo $dados['categoriaDescricao']?></p>
                           </div>
                       </div>
                   </div>
                       <?php
                   }
                   ?>

               </div>
          </div>
     </section>

<?php
bottom();
?>
