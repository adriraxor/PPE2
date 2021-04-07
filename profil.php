<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style/bootstrap/css/profil.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="style/images/logov2.png" />
    <meta charset="UTF-8 "name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style/bootstrap/css/style.css"/>

  <title>Buy Your Games / Mon profil</title>
</head>
<body>
  <!----Entete---->
  <?php
  require 'header.php';

  ?>
  <!---Profil---->
  <div class="background">

    <div class="container">
      <div class="row">
        <div class="infoProfil col-md-12">
          <h2 class="titleProfil"> Mon Profil</h2>
            <div class="container">
                <div class="row">
                    <div class="profile-header-container">
                        <div class="profile-header-img">
                            <img class="img-circle" src="style/images/photoProfil.jpg" />
                            <!-- badge -->
                            <div class="rank-label-container">
                              <!-----------------RECUPERATION DES DONNEES DE LA SESSION LANCE POUR POUVOIR AFFICHER LES INFORMATIONS DE L'USER--------------------------->
                                <span class="label label-default rank-label">
                                    <?php
                                    $Email = $_SESSION['connectEmail'];
                                    $db = new PDO('mysql:host=localhost;dbname=buy_your_games','root','');
                                    $sql = ("SELECT * FROM byg_membre WHERE email = '$Email'");
                                    $reponse = $db->query($sql);

                                    while ($data = $reponse->fetch())
                                    {
                                        echo $data['username'];
                                    }






                                    ?>


                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <?php

          $Email = $_SESSION['connectEmail'];



 //Ouverture connexion bdd
          $db = new PDO('mysql:host=localhost;dbname=buy_your_games','root','');


  //preparation requete
          $sql = ("SELECT * FROM byg_membre WHERE email = '$Email'");

          $reponse = $db->query($sql);

  //echo $sql;

  //Chercher la ligne qui correspond à la SESSION on se base sur l'email 
          while ($data = $reponse->fetch())
          {
           echo "<b>Adresse Electronique :  </b>".$data['email']. "</br>";
           echo "<b>Numero Telephone : +33</b>".$data['numTelephone']."</br>";
           echo "<b>Mot de passe :  </b>".preg_replace('~[âàèêéìôòûùA-Za-z0-9,.\s+]~', '*', $data['password']). "</br>";
         }
         ?>
            <br>
            <h3>Ma wishlist : </h3>
            <marquee direction="right">Coming Soon</marquee>
        </br>


       </div>
     </div>
   </div>


</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="style/bootstrap/js/bootstrap.min.js"></script>
<script src="style/bootstrap/js/main.js"></script>
 </body>
 </html> 
