<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8 "name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style/bootstrap/css/style.css"/>
	<link rel="stylesheet" type="text/css" href="style/bootstrap/css/catalogue.css">
	<link rel="shortcut icon" type="image/x-icon" href="style/images/logov2.png" />
	<title>Catalogue - BuyYourGames</title>
</head>
<body>
	<?php 
	require_once 'header.php';
	require_once 'class/db.class.php';

	?>

	<!-------------------------------FILTRE-------------------------------------->    
    <aside id="sidebar">
        <div class="text-left" name="FiltrageContenu">
    <h3 class="TitleFiltre">Recherche Avancée</h3>
    <form action="catalogue.php" method="POST">
        <div class="form-group d-flex justify-content-center">
<!------------------FILTRE CATEGORIE PLATEFORME----------------------------------------------->
            <select class="form-control" id="filtre" name="OPTIONS">
                <option value="#">Tous</option>
                <option value="2">PC</option>
                <option value="3">Sony</option>
                <option value="4">Microsoft</option>
                <option value="5">Nintendo</option>
            </select>
        </div>
    <div class="d-flex justify-content-center">
        <button class="btn btn-info  filtrageOPTIONS" type="submit" value="rechercher" name="filtrageOPTIONS">
            Rechercher Plateforme
        </button>
    </div>
    </form>
        <br>
        <!--------------------FILTRE SOUS CATEGORIE TYPE DE JEU----------------------------------->
            <form method="POST" action="catalogue.php">
                <div class="form-group d-flex justify-content-center">
        <select class="form-control" id="filtre" name="OPTIONS2" class="filtre2">
            <option value="#">Tous</option>
            <option value="2">FPS</option>
            <option value="3">Aventure</option>
            <option value="4">Courses</option>
            <option value="5">Sandbox</option>
            <option value="6">Musique</option>
            <option value="7">Action/Aventure</option>
            <option value="7">Multijoueur/Voitures/Football</option>
        </select>
                </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-info  filtrageOPTIONS" type="submit" value="rechercher" name="filtrageOPTIONS">
                Rechercher Type De Jeux
            </button>
        </div>
        </div>
    </form>
        </div>
    </aside>


	<!-- Récupération des produits de la BDD... -->
	<?php $produits = $DB->query('SELECT * FROM byg_produit');


	        if(isset($_POST['OPTIONS']))
            {
                $selectOptions = $_POST['OPTIONS']; echo $selectOptions;
                $sqq = "";
                if($selectOptions != "#") { $sqq = " WHERE idCategorie = '".$selectOptions."'"; }   //A partir de la valeur récupérer on execute la requpete
                $sqq = "SELECT * FROM byg_produit" . $sqq;  //Suite et fin de la requête
                $produits = $DB->query($sqq);
            }

	        if(isset($_POST['OPTIONS2']))
            {
                $selectOptions2 = $_POST['OPTIONS2']; echo $selectOptions2;
                $sqq2 = "";
                if($selectOptions2 != "#"){ $sqq2 = " WHERE idSousCategorie = '".$selectOptions2."'"; }
                $sqq2 = "SELECT * FROM byg_produit" . $sqq2;
                $produits = $DB->query($sqq2);
            }



    ?>

	
	<div class="container grille-jeux">
		<!-- Utilise le card grid de bootstrap pour front-end -->
		<div class="card-deck row">

			<!-- Affiche les produits avec une boucle -->
			<?php foreach ($produits as $produit): ?>

				<!-- Insère la page type pour les produits -->
				<!-- col-md-12 = entiereté du parent / 4(produit par ligne) = 3 -->
				<div class="col-sm-4 col-md-3 jeu">

					<div class="card shadow">

						<a href="jeu.php?idProduit=<?=$produit->idProduit ?>">
							<img src="style/imgJeux/Catalogue/<?= $produit->jaquette ?>" class="card-img-top" alt="Jaquette du jeu <?= $produit->nomProduit ?>">
						</a>
						<!-- affiche le prix sous l'image avec un badge bootstrap (warning) -->
						<span class="badge badge-warning"><?= number_format($produit->prix,2,',',' '); ?> €</span>


						<div class="card-body">

							<a href="">
								<h5 class="card-title text-truncate"><?= $produit->nomProduit; ?></h5> <!-- Récupère nom produit -->
							</a>
							<p class="card-text text-truncate"><?= $produit->description ?></p> <!-- Récupère description produit -->
							<a href="addpanier.php?idProduit=<?= $produit->idProduit;?>" class="btn btn-primary">Ajouter au panier</a> <!-- Redirige vers la page addPanier pour ajouter au panier -->

						</div>

					</div>

				</div>

			<?php endforeach; ?>

		</div>
	</div>
	<!-- pagination (non-fonctionelle) de bootstrap -->
	<nav aria-label="Page navigation example">
		<ul class="pagination justify-content-center">
			<li class="page-item disabled">
				<a class="page-link" href="#" tabindex="-1">Previous</a>
			</li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item">
				<a class="page-link" href="#">Next</a>
			</li>
		</ul>
	</nav>







<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="style/bootstrap/js/bootstrap.min.js"></script>
<script src="style/bootstrap/js/main.js"></script>

</body>
</html>