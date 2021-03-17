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
                    <div class="item item-first">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>O que precisa num click!</h1>
                                         <a href="offers.php" class="section-btn btn btn-default">Serviços</a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-second">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>De fácil utilização para a maior satisfação possível!</h1>
                                        <a href="offers.php" class="section-btn btn btn-default">Serviços</a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-third">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Completamente gratuito, só precisamos do seu tempo!</h1><br>
                                        <a href="offers.php" class="section-btn btn btn-default">Serviços</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <main>
          <!-- Sobre Nós-->
          <section style="background-color: lightcyan">
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
                             <h2>Categorias destaquadas</h2>
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

     <!-- CONTACT -->
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="" method="post">
                              <div class="section-title">
                                   <h2>Contacte-nos <small>Adoramos conversar, mande-nos uma mensagem!</small></h2>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Escreva o seu nome inteiro" name="name" required>
                    
                                   <input type="email" class="form-control" placeholder="Escreva o seu email" name="email" required>

                                   <textarea class="form-control" rows="6" placeholder="Escreva a sua mensagem" name="message" required></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="send message" value="Mandar mensagem">
                              </div>

                         </form>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="images/contact-1-600x400.jpg" class="img-responsive" alt="Smiling Two Girls">
                         </div>
                    </div>

               </div>
          </div>
     </section>

<?php
bottom();
?>