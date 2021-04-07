<?php 
class panier{
	
	private $DB;

	public function __construct($DB){
		if(!isset($_SESSION)){
			session_start();
		}
		if(!isset($_SESSION['panier'])) {
			$_SESSION['panier'] = array();
		}
		$this->DB = $DB;

		if (isset($_GET['delPanier'])){
			$this->del($_GET['delPanier']);
		}

		if (isset($_POST['panier']['quantity'])) {
			$this->recalc();
		}
	}

	public function recalc(){
		foreach ($_SESSION['panier'] as $produit_ID => $quantity) {
			if (isset($_POST['panier']['quantity'][$produit_ID])) {
				$_SESSION['panier'][$produit_ID] = $_POST['panier']['quantity'][$produit_ID];
			}
		}
		
	}

	public function total(){
		$total = 0;
		$ids = array_keys($_SESSION['panier']);
		if(empty($ids)){
			$produits = array();
		}else{
			$produits = $this->DB->query('SELECT idProduit, prix FROM byg_produit WHERE idProduit IN ('.implode(',',$ids).')');
		}
		foreach ($produits as $produit) {
			$total += $produit->prix * $_SESSION['panier'][$produit->idProduit];
		}
		return $total;
	}

	public function add($produit_ID){
		if (isset($_SESSION['panier'][$produit_ID])){
			$_SESSION['panier'][$produit_ID]++;
		}else{
			$_SESSION['panier'][$produit_ID] = 1;
		}
		
	}

	public function del($produit_ID){
		unset($_SESSION['panier'][$produit_ID]);
	}

}