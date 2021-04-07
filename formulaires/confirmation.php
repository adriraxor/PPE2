<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="favicon.ico" />
        <link rel="shortcut icon" type="image/x-icon" href="style/images/logov2.png" />
        <meta charstet="utf-8" />
        <title>BYG / En Attente D'inscription</title>
        <link type="text/css" rel="stylesheet" href="css/inscription.css">     <!--Cible-->
    </head>
     
    <body>
    <?php
    $username = $_GET['username'];
    $valuekey =  $_GET['key'];
   
    
    //execution de la requête préparée SI TOUS LES CHAMPS DU FORMULAIRE NE SONT PAS VIDDES
    if($username !="" && $valuekey != "")
    {
        

        //ouverture d'une connexion à la base de donnée formulaire
        $objetPdo = new PDO('mysql:host=localhost;dbname=buy_your_games','root','');


        //######   4 prochaines lignes pour rechercher si mail existe deja AVANT d'INSERER  #########
        $sql = ("UPDATE byg_membre SET confirmer=1 where username  = '$username' AND confirmKey  = '$valuekey'");
        $result = $objetPdo->prepare($sql);
        $result->execute();
     
       if($result->rowCount() > 0)
        {

                echo "<h1 id='title-se-connecter'>Réussi</h1>";
                echo "<form action='../index.php' method='POST'><button type='submit' name='confirmAccountBTN'>Confirmer la création du compte</button>";
                echo "<hr size='4' color='black'/>";
        }

        else{
                //$message = 'Echec de l\insertion';
                echo "<u><p class='EchecInscription'>donnes non valides ou deja existantes dans la base de donnée ! </u></p>";


        }
      
    }
    else {
        //$message = 'le formulaire comporte au moins un champ vide';
         echo "<u><p class='ConfirmationInscription'>Champs vides</u></p>";
         echo "<a href='Inscription.php'>Cliquez ici pour vous inscrire</a>"; 
    }

    //echo "<br>".$message."<br>";
?>
    </body>
</html>