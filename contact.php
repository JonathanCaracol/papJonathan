<?php
include_once("includes/body.inc.php");
top(CONTACTO);
?>

     <section style="background-color: powderblue">
          <div class="container">
               <div class="text-center">
                    <h1>Contacte-nos</h1>

                    <br>

                    <p class="lead">Alguma dúvida? Alguma sugestão? É só nos mandar uma mensagem!</p>
               </div>
          </div>
     </section>


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
                              <img src="images/contact-1-600x400.jpg" style="height: 404px; width: 404px" class="img-responsive" alt="Smiling Two Girls">
                         </div>
                    </div>

               </div>
          </div>
     </section>

<?php
bottom();
?>