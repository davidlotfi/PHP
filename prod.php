<?php

  try{

    $dbd=new PDO('mysql:host=localhost;dbname=datephp','root','');

  }catch(Exception $e){

     die('Erreur :'.$e->getMessage());
  }

  $reponse=$dbd->query('SELECT * FROM prod ORDER BY id DESC ');


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>PHP Date</title>
  </head>
  <body>
      <header>
        <nav class="navbar navbar-inverse bg-primary navbar-dark navbar-expand">
           <div class="container">
               <a href="#" class="navbar-brand ">Date php</a>
      	       <!-- Navbar Search -->

           </div><!-- container -->
       </nav>
      </header>

<br><br>
    <div class="container">
      <form class="" action="post.php" method="post">
        <input class="form-control" type="text" name="name" value="" placeholder="Name"><br>
        <input class="form-control" type="text" name="prix" value="" placeholder="Prix">
        <input type="submit" name="" value="Submit">
      </form><br>


   <?php
    while ($donnes = $reponse->fetch()) {
      $datetime1 = $donnes['date'];
      $datetimecurrent = date("Y-m-d H:i:s");
      $interval=$datetimecurrent - $datetime1;

   ?>

      <div class="col-lg-3 col-md-6 mb-3">
          <div class="card">
             <img class="card-img-top" src="image.png" alt="" style="height:150px">
           <div class="card-body">
             <h5 class="text-success"><?php echo  $donnes['prix']; ?> DA</h5>
             <p class="card-text"><?php echo  $donnes['name']; ?>. </p>
             <small class="text-muted" style="float:right"><?php echo  $donnes['date']; ?></small><br>
             <small class="text-muted" style="float:right"><?php $interval; ?> mins</small>

           </div>
         </div>
       </div>


   <?php
        }
    ?>


  </body>
</html>
