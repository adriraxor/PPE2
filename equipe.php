<?php require_once 'header.php' ?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Equipe - BuyYourGames</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="style/bootstrap/css/equipe.css"/>
    <link href="style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="img-container">
        <div class="inner-container">
            <h1 class="BuyYourGames">Buy Your Games</h1>
            <h2 class="BuyYourGamesSubtitle">Notre equipe à votre disposition 24/7</h2>
            </br></br>
            <div class="container">
                <div class="card-deck row justify-content-center">
                <!---------------------------ADRIEN's CARD---------------------------------------------------------------->
                    <div class="card text-white bg-dark">
                        <img class="card-img-top" src="style/images/AdriraxorAdmin.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Adrien FIGUERES</h5>
                            <p class="card-text"><marquee id="Administrateur" behavior="alternate">Administrateur</marquee></p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adrienFIGUERES" data-whatever="@Adrien">Voir plus</button>
                        </div>
                    </div>

                <!---------------------------JIMI's CARD---------------------------------------------------------------->
                    <div class="card text-white bg-dark">
                        <img class="card-img-top" src="style/images/JimiAdmin.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Jimi TRUONG</h5>
                            <p class="card-text"><marquee id="Administrateur" behavior="alternate">Administrateur</marquee></p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#jimiTruong" data-whatever="@Jimi">Voir plus</button>
                        </div>
                    </div>

                <!---------------------------REMI's CARD---------------------------------------------------------------->
                    <div class="card text-white bg-dark">
                        <img class="card-img-top" src="style/images/imageSKY.gif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Rémi RAFFESTIN</h5>
                            <p class="card-text"><marquee id="Administrateur" behavior="alternate">Administrateur</marquee></p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#remiRaffestin" data-whatever="@Remi">Voir plus</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<!----------------------------------------------------------------MODAL PAR PERSONNE------------------------------------------------------------------------------------------>
<!---------------------------ADRIEN MODAL---------------------------------------------------------------->
<div class="modal fade" id="adrienFIGUERES" tabindex="-1" role="dialog" aria-labelledby="adrienFIGUERES" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adrienFIGUERES">Description de Adrien "Adriraxor" FIGUERES</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Developpeur et administrateur du site BYG</p>
                <p><strong>Région :</strong> Occitanie</p>
                <p><strong>Pays :</strong> France</p>
                <p><strong>Age :</strong> 19 ans</p>
                <p><strong>Statut :</strong> Developpeur Etudiant en BTS SIO</p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!---------------------------REMI MODAL---------------------------------------------------------------->
<div class="modal fade" id="remiRaffestin" tabindex="-1" role="dialog" aria-labelledby="#remiRaffestin" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="remiRaffestin">Description de Remi "SKYREX" RAFFESTIN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Developpeur et administrateur du site BYG</p>
                <p><strong>Région :</strong> Occitanie</p>
                <p><strong>Pays :</strong> France</p>
                <p><strong>Age :</strong>18 ans</p>
                <p><strong>Statut :</strong> Developpeur Etudiant en BTS SIO</p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<!---------------------------JIMMI MODAL---------------------------------------------------------------->
<div class="modal fade" id="jimiTruong" tabindex="-1" role="dialog" aria-labelledby="#jimiTruong" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jimiTruong">Description de Jimi "Jimouli" TRUONG</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Developpeur et administrateur du site BYG</p>
                <p><strong>Région :</strong> Occitanie</p>
                <p><strong>Pays :</strong> France</p>
                <p><strong>Age :</strong> 19 ans</p>
                <p><strong>Statut :</strong> Developpeur Etudiant en BTS SIO</p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="style/bootstrap/js/bootstrap.min.js"></script>
<script src="style/bootstrap/js/main.js"></script>
</body>
</html>
