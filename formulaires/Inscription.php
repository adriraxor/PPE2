<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link href="css/inscription.css" type="text/css" rel="stylesheet"/>
    <link rel="shortcut icon" type="image/x-icon" href="../style/images/logov2.png" />
    <meta charset="UTF-8 "name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>BYG - Inscription</title>
</head>

<body class="inscription">

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-auto" id="rectangle">
                <form action="insertion.php" method="POST">

                    <h2 class="inscription">Inscription</h2>
      
                    <div class="emailBox">
                        <div class="inputEmail">
                          <input class="email" name="email" type="email" placeholder="Adresse Electronique" autocomplete="off"/>
                      </div>
                  </div>
              </br>
              <div class="usernameBox">
                <div class="inputUsername">
                    <input class="Username" name="username" type="text" placeholder="Nom d'Utilisateur" autocomplete="off"/>
                </div>
            </div>
        </br>
        <div class="passwordBox">
            <div class="inputPassword">
                <input class="Password" name="password" type="password" placeholder="Mot de passe" autocomplete="off"/>
            </div>
        </div>
    </br>
    <div class="numBox">
        <div class="inputNum">
          <input class="numTel" name="numTelephone" type="phone" maxlength="10" placeholder="Numéro Telephone" autocomplete="off"/>
      </div>
    </div>


</br>

    <fieldset class="acceptCheckbox">
      <div class="confirmationContratUtilisation">
        <div class="text-center checkBox1">
          <input class="inputCheckBox1" name="checkBox1" type="checkbox" required="required">J'accepte les conditions générales d'utilisation</input>
          <br>
          <a href="../politique.php" class="politiqueInscription"><label for="politiqueInscription">Plus d'informations concernant les conditions générales d'utilisations ainsi que de notre politique</label></a>
        </br>
          <input class="inputCheckBox2" name="checkBox2" type="checkbox" required="required">Je confirme avoir plus de 18 ans</input>
      </div>
    </div>
    </fieldset>


</br>
<button class="confirmationInscription" type="submit" value="Ajouter" name="ConfirmationInscription">Confirmer</button>


</form>
</br>
<form action="Connexion.php">
    <button class="seConnecter">Déjà un compte ? Se connecter</button>
</form>
</br>
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
