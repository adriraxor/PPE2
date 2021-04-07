<!DOCTYPE html>
<html>
<head>
	<!-- metas pour les appareils mobiles et Internet Explorer -->
	<meta charset="UTF-8 "name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link href="style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style/bootstrap/css/panier.css">
	<link rel="shortcut icon" type="image/x-icon" href="style/images/logov2.png" />
	<link rel="stylesheet" href="style/bootstrap/css/paypal.css">
	<title>Panier - BuyYourGamesFR</title>
</head>
<body>
	<?php require_once '_require.php'; ?>

	<form method="post" action="panier.php">
		<div class="container">
			<table id="cart" class="table table-hover table-condensed">
				<thead>
					<tr>
						<th style="width:50%">Produits</th>
						<th style="width:8%; text-align: center;">Quantité</th>
						<th style="width:12%; text-align: center;" class="text-center">Prix HT</th>
						<th style="width:12%; text-align: center;" class="text-center">Prix TTC</th>
						<th style="width:18%; text-align: center;">Actions</th>
					</tr>
				</thead>

				<?php
				$ids = array_keys($_SESSION['panier']);
				if(empty($ids)){
					$produits = array();
				}else{
					$produits = $DB->query('SELECT * FROM byg_produit WHERE idProduit IN ('.implode(',',$ids).')');
				}

				foreach ($produits as $produit): ?>


					<tbody>
						<tr>
							<td data-th="Produit">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="style/imgJeux/Catalogue/<?= $produit->jaquette ?>" alt="Jaquette du jeu <?= $produit->nomProduit ?>" class="img-fluid"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin"><?= $produit->nomProduit; ?></h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facere, aliquam quas eveniet beatae praesentium quaerat nesciunt. Aliquid rem corporis, est, maiores aperiam libero nesciunt temporibus quisquam cum esse ducimus!</p>
									</div>
								</div>
							</td>

							<td data-th="Quantité">
								<input type="number" min="1" max="100" name="panier[quantity][<?= $produit->idProduit ?>]" class="form-control text-center" value="<?= $_SESSION['panier'][$produit->idProduit]; ?>">
							</td>
							<td data-th="HT" class="text-center"><?= number_format($produit->prix,2,',',' '); ?> €</td>
							<td data-th="TTC" class="text-center"><?= number_format($produit->prix * 1.2,2,',',' '); ?> €</td>
							<td class="text-center" data-th="actions">
								<button type="submit" min="1" max="100" class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
								<a href="panier.php?delPanier=<?= $produit->idProduit; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>								
							</td>
						</tr>
					</tbody>

				<?php endforeach; ?>

				<tfoot>
					<tr>
						<td><a href="catalogue.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Retourner au catalogue</a></td>
						<td colspan="2" class="hidden-xs"></td>
						<td class="hidden-xs text-center"><strong>Total<br> <?= number_format($panier->total() * 1.2,2,',',' '); ?> €</strong></td>
						<?php if(isset($_SESSION['connectEmail'])){
							// Set up a container element for the button
							echo '<td><div id="paypal-button-container"></div></td>';
						}else {
							echo '<td><a href="" data-toggle="modal" data-target="#modalInscription"><img class ="img-fluid" src="style/images/fakeBoutonSiNoConnectPanier.jpg" alt="Veuillez vous connecter ou vous inscrire !!!"></a>';
							echo '<p><strong>Vous devez être inscrit ou connecter pour pouvoir effectuer un achat</strong></p>';
						} ?>
					</tr>
				</tfoot>
			</table>
		</div>
	</form>


	<!-- Include the PayPal JavaScript SDK -->
	<script src="https://www.paypal.com/sdk/js?client-id=AXSU0UuR8WqxpmBXcwU3XUlrRHfYg9G6WriUr_3sx5G068r2RO0iOiDx61NqJMjG-h23mf1ScGEDIKqI&currency=EUR"></script>

	<script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({
             // Set up the transaction
             createOrder: function(data, actions) {
             	return actions.order.create({
             		purchase_units: [{
             			amount: {
             				value: '<?= number_format($panier->total() * 1.2);?>'
             			}
             		}]
             	});
             },

            // Finalize the transaction
            onApprove: function(data, actions) {
            	return actions.order.capture().then(function(details) {
                    // Show a success message to the buyer
                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                });
            }
        }).render('#paypal-button-container');
    </script>
</body>
</html>