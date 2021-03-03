<?php
include_once("includes/body.inc.php");
top();
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
          <section>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="section-title text-center">
                                   <h2>Serviços mais procurados<small>Procure o que necessite nos nossos temas variados!</small></h2>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="courses-thumb courses-thumb-secondary">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img href="trabalhoManual.php" src="images/trabalhoManual.jpg" class="img-responsive" alt="">
                                        </div>
                                   </div>

                                   <div class="courses-detail">
                                        <h3><a href="trabalhoManual.php">Trabalho Manual</a></h3>
                                        <br><p>De construções em madeira até instalação de ladrilho, temos tudo aqui!</p>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="courses-thumb courses-thumb-secondary">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img href="arte.php" src="images/arte.jpg" class="img-responsive" alt="">
                                        </div>
                                   </div>

                                   <div class="courses-detail">
                                        <h3><a href="arte.php">Arte </a></h3>
                                        <br><p>Quer aprender a tocar um novo instrumento? Precisa de um artista para pintar um quadro? Não espere mais!</p>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="courses-thumb courses-thumb-secondary">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="images/babysitting.jpg" class="img-responsive" alt="">
                                        </div>
                                   </div>

                                   <div class="courses-detail">
                                        <h3><a href="babysitting.php">Baby-sitting</a></h3>
                                        <br><p>Precisa de alguém que tome conta das suas crianças? Não procure mais!</p>
                                   </div>
                              </div>
                         </div>
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