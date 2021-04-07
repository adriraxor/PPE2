<!-- Connexion à la BDD + appel des fonctions,etc -->
<?php require_once '_require.php';
require_once 'formulaires/modal-inscription.php';
?>

<header>
    <link rel="stylesheet" type="text/css" href="style/bootstrap/css/style.css"/>
    <link href="style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!---------------------------------------------NAV BAR AVEC BOOTSTRAP--------------------------------------------------------------------------------->
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <h1 class="navbar-brand" style="color: #FF9900;">Buy Your Games</h1>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav nav-fill">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="catalogue.php">Produits</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                A propos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="equipe.php">Equipe de Buy Your Games</a>
                                <a class="dropdown-item" href="politique.php">Politique</a>
                            </div>
                        </li>


                    <!----------------------------------SI UNE SESSION EST LANCER ON VA REMPLACER DEUX LIENS PAR DEUX AUTRES LIENS SI NON ON LAISSE COMME TEL PAR DEFAUT------------------------------------------>
                        <?php
                                    //**Si user connecté =donc session ouverte
                        if(isset($_SESSION['connectEmail']))
                        {
                            echo "<li class='nav-item'><a href='formulaires/deconnexion.php' class='nav-link deconnexion'>Déconnexion</a></li>";
                            echo "<li class='nav-item'><a class='nav-link' href='profil.php'>Mon Profil</a></li>";
                        }
                                    //Ici user non connecté = donc pas de session en cours, donc public
                        else
                        {
                            echo "<li class='nav-item'><a class='nav-link' href='formulaires/connexion.php'>Connexion</a></li>";
                            echo "<li class='nav-item'><a class='nav-link' href='' data-toggle='modal' data-target='#modalInscription' data-whatever='Inscription'>Inscription</a></li>";

                        }
                        ?>
                    </ul>

                <!-----------------------------------------------PANIER------------------------------------------------------------------------------>
                    <ul class="panier nav nav-bar ml-auto">
                        <li class="nav-item">
                            <a href="panier.php">
                            <!--                                 si le panier est vide alors la couleur de son logo est blanche sinon orange --> 
                                <i class="fa fa-shopping-cart fa-2x <?php if ($panier->total() != 0) { echo('style="color:#ff9900;"');}else{echo('style="color:white;"');}; ?>"></i>
                            </a>
                            <?php if ($panier->total() != 0) {	?>
                                <span class="badge badge-pill badge-danger notif-panier">
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>
    </div>
</header>
