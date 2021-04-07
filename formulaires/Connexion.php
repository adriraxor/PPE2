<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/x-icon" href="../style/images/logov2.png" />
    <link rel="stylesheet" type="text/css" href="css/connexion.css"/>
    <meta charset="UTF-8 "name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../style/bootstrap/css/style.css"/>

    <title>BYG - Connexion</title>
</head>

<body>
    <div class="container">  
        <div class="row justify-content-md-center">    
            <div class="col-md-auto" id="rectangle">
                <form action="login.php" method="post" class="login">

                    <h2 class="connexion">Connexion</h2>

                    <div class="emailBox">
                        <div class="connectInputEmail">
                          <i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input class="email" name="connectEmail" type="email" placeholder="Adresse Electronique" autocomplete="off"/>
                      </div>
                  </div>
              </br>
              <div class="passwordBox">
                <div class="connectInputPassword">
                    <i class="fa fa-lock"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input class="connectPassword" name="connectPassword" type="password" placeholder="Mot De Passe" autocomplete="off"/>
                </div>
            </div>
        </br>
        <div class="connectButton">
            <button class="Connect" type="submit" name="connect">
              Se connecter
          </button>
      </div>
  </form>  
</br>
<div class="indexButton">
    <form action="../index.php">
        <button class="retourIndex">Revenir à la page d'accueil</button>
    </form>
</div>


</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../style/bootstrap/js/bootstrap.min.js"></script>
<script src="../style/bootstrap/js/main.js"></script>

</body>
</html>