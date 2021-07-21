<?php
include_once("includes/body.inc.php");
top();


$sql ="SELECT * FROM servicos inner join categorias on servicoCategoriaId = categoriaId GROUP BY servicoCategoriaId ORDER BY COUNT(servicoId) DESC LIMIT 3";
$result=mysqli_query($con,$sql);
?>


     <!-- HOME -->
     <section id="home">
          <div class="row">
               <div class="owl-carousel owl-theme home-slider">
                   <?php
                        $sqlSlide="select * from slideshow";
                        $resultSlide= mysqli_query($con, $sqlSlide);
                        while ($dadosSlide=mysqli_fetch_array($resultSlide)){
                   ?>
                    <div class="item item-first" style="background-image: url(<?php echo $dadosSlide['UrlSlideShow'] ?>)">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>O que precisa num click!</h1>
                                         <a href="offers.php" class="section-btn btn btn-default">Serviços</a>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <?php
                       }
                    ?>
               </div>
          </div>
     </section>

     <main>
          <!-- Sobre Nós-->
          <section>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="text-center">
                                   <h2>Sobre nós</h2>
                                   <br>
                                   <p class="lead">Este site foi criado com objetivo de reúnir as pessoas e ajudarmo-nos, sobretudo num tempo cheio de egoísmo. Por essa mesma razão, os serviços propostos aqui não vão ser pagos por dinheiro ou trocas mas por tempo. Prestadores dedicam um número de horas tal como um serviço. Clientes poderão a seguir pedir uma porção dessas horas para o serviço que o prestador está pronto a dar.</p>
                              </div>
                         </div>
                    </div>
               </div>
          </section>

          <!-- Serviços-->
         <section class="section-background">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12 col-sm-12">
                         <div class="text-center">
                             <h2>Categorias destacadas</h2>
                             <br>
                             <p class="lead">As categorias com mais serviços aparecem aqui para o cliente estar sempre atualizado e saber quais são as categorias do momento!</p>
                         </div>
                     </div>
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

     </main>

<?php
bottom();
?>