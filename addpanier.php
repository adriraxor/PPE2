<?php
require_once '_require.php';

if (isset($_GET['idProduit'])) {
	$produit = $DB->query('SELECT idProduit FROM byg_produit WHERE idProduit= :idProduit', array('idProduit' => $_GET['idProduit']));
	if(empty($produit)){
		die("Ce produit n'est pas encore dans notre catalogue :(");
	}
	$panier->add($produit[0]->idProduit);
	die('Le produit à été enregistré dans le panier <a href="javascript:history.back()"> retouner au catalogue </a>');
}else{die("Vous n'avez pas ajouté de produit dans le panier" );}

?>