<head>
    <link rel="stylesheet" href="formulaires/css/inscription.css">
    <link rel="shortcut icon" type="image/x-icon" href="../style/images/logov2.png" />
    <meta charset="UTF-8 "name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>



<div class="modal fade" id="modalInscription" tabindex="-1" role="dialog" aria-labelledby="modalInscriptionLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalInscriptionLabel">Inscription</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="formulaires/insertion.php" method="POST">

                    <h2 class="d-flex justify-content-center inscription">Inscription</h2>

                    <div class="emailBox">
                        <div class="inputEmail">
                            <input class="form-control email" name="email" type="email" placeholder="Adresse Electronique" autocomplete="off"/>
                        </div>
                    </div>
                    </br>
                    <div class="usernameBox">
                        <div class="inputUsername">
                            <input class="form-control Username" name="username" type="text" placeholder="Nom d'Utilisateur" autocomplete="off"/>
                        </div>
                    </div>
                    </br>
                    <div class="passwordBox">
                        <div class="inputPassword">
                            <input class="form-control Password" name="password" type="password" placeholder="Mot de passe" autocomplete="off"/>
                        </div>
                    </div>
                    </br>
                    <div class="numBox">
                        <div class="inputNum">
                            <input class="form-control numTel" name="numTelephone" type="phone" maxlength="10" placeholder="Numéro Telephone" autocomplete="off"/>
                        </div>
                    </div>


                    </br>
            <div class="form-group text-center">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck1" required>
                    <label class="form-check-label" for="invalidCheck1">
                        J'accepte les termes, et les conditions
                    </label>
                </br>
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                        Je confirme avoir + de 18 ans
                    </label>
                </div>
                </br>
                    <div class="text-center boutonActions">

                        <button type="submit" value="Ajouter" name="ConfirmationInscription" class="confirmationInscription btn btn-primary">Valider inscription</button>
                    </div>
                </form>
            </br>
                <div class="modal-footer">
                <form action="formulaires/Connexion.php">
                    <button type="button" class="closeBTN btn btn-secondary" data-dismiss="modal">Pas Maintenant</button>
                    <button name="seConnecter" class="btn btn-primary seConnecter">Déjà un compte ? Se connecter</button>
                </form>
                </div>
            </div>

        </div>
    </div>
</div>