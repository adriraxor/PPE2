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
    $valueUsername = $_POST['username'];
    $valuePassword =  $_POST['password'];
    $valueemail = $_POST['email'];
    $valuenumTelephone = $_POST['numTelephone'];
    $key = "";
    $longueurKey = 12;
    var_dump($pseudo, $password, $email);
    
    //execution de la requête préparée SI TOUS LES CHAMPS DU FORMULAIRE NE SONT PAS VIDDES
    if($valueUsername !="" && $valuePassword !="" && $valueemail != "" && $valuenumTelephone != "")
    {
        

        //ouverture d'une connexion à la base de donnée formulaire
        $objetPdo = new PDO('mysql:host=localhost;dbname=buy_your_games','root','');

        //######   4 prochaines lignes pour rechercher si mail existe deja AVANT d'INSERER  #########
        $sql = ("SELECT * FROM byg_membre where email  = '$valueemail' ");
        $sql = ("SELECT * FROM byg_membre where username  = '$valueUsername' ");            
        $result = $objetPdo->prepare($sql);
        $result->execute();
        
        if($result->rowCount() == 0)
        {
            for($i=1;$i<$longueurKey;$i++)
            {
                $key.= mt_rand(0,9);
            }




            $pdoStat = $objetPdo->prepare('INSERT INTO byg_membre VALUES(0,:pseudo, :mdp, :email, :numtel, :confirmKey, 0)');
            



            /////////afficher la requête pour voir au cas ou si un bug est présent
            /////////echo "INSERT INTO membres VALUES(0,".$valueUsername.", ".$valuePassword.", ".$valueemail.", ".$valuenumTelephone.", ".$key.", 0)";
                
                $message =
                '

                <a href="http://localhost/BuyYourGamesV3/formulaires/confirmation.php?username='.urlencode($valueUsername).'&key='.$key.'">Confirmez votre compte</a>
    
                ';

            //liaison de chaque marqueur à une valeur
            $pdoStat->bindValue(':pseudo', $valueUsername, PDO::PARAM_STR);
            $pdoStat->bindValue(':mdp', $valuePassword, PDO::PARAM_STR);
            $pdoStat->bindValue(':email', $valueemail, PDO::PARAM_STR);
            $pdoStat->bindValue(':numtel', $valuenumTelephone, PDO::PARAM_INT);
            $pdoStat->bindValue(':confirmKey', $key, PDO::PARAM_INT);
            $confirmAccount = mail( $valueemail , "Buy Your Games" , $message );
            $InsertIsOk = $pdoStat->execute();
			
            if($InsertIsOk && $confirmAccount){
                //$message = 'Compte enregistrée dans la BDD';
                echo "<h1 id='title-se-connecter'>Inscription réussi</h1>";
                echo "<u><p class='ConfirmationInscription'>Vous avez bien été inscrit, veuillez verifiez votre compte dans votre boite mail avant de vous connecté : </u></p>";
                echo "<hr size='4' color='black'/>";
            }

            else{
                //$message = 'Echec de l\insertion';
                echo "<u><p class='EchecInscription'>Echec d/insertion dans la base de donnée ! </u></p>";


               }
        } 
        else {
            echo "<p class='existedeja'>adresse email ou pseudo existe déjà veuillez tentez de vous connectez avec le compte ou bien de changez les informations</p>";
        }//##### FIN BLOC email trouve
    }
    else {
        //$message = 'le formulaire comporte au moins un champ vide';
         echo "<u><p class='ConfirmationInscription'>Le formulaire comporte au moins un champs vide</u></p>";
         echo "<a href='Inscription.php'>Cliquez ici pour revenir au formulaire</a>"; 
    }

    //echo "<br>".$message."<br>";
?>
    </body>
</html>