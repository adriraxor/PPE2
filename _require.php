<?php
	require_once 'class/db.class.php';
	require_once 'class/panier.class.php';
	$DB = new DB();
	$panier = new panier($DB);
?>