<?php


//session_start();


//**verif si formlulaire bien rempli


if(isset($_POST['connectEmail']) && isset($_POST['connectPassword']))
{
	//**connecte base
	$db = new PDO('mysql:host=localhost;dbname=buy_your_games','root','');

	$Email = $_POST['connectEmail'];
	$Password = $_POST['connectPassword'];

		//**verifier si le usser et paswwd existent
		$sql = ("SELECT * FROM byg_membre where email  = '$Email' and password = '$Password' and confirmer = 1 ");
		$result = $db->prepare($sql);
		$result->execute();
		//** si la ligne a été trouvé dans la base
		if ($result->rowCount() > 0) {
			$data = $result->fetchAll();
			session_start(); //**on demarre la session ici !
			$_SESSION['connectEmail'] = $Email; // on sauvegarde en session le mail

			header('Location: ../index.php'); //puis on va sur accueil
		} //** pas de ligne trouvé, donc user et passwd inconnus = retour formulaire
		else {
			header('location: Connexion.php');

		}
	
}

?>
