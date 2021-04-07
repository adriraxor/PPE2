<?php 
class DB{
	private $host = 'localhost';
	private $username = 'root';
	private $password = '';
	private $database = 'buy_your_games';
	private $db;

	public function __construct($host = null, $username = null, $password = null, $database = null){
		if ($host != null){
			$this->host = $host;
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;
		}

		try{
			$this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, $this->password, 
				array(
					PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
					PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
				)
			);
		}catch(PDOException $e){
			die('Impossible de se connecter a la BDD');
		}
	}

	// fonction
	public function getCnx(){
		if ($this->db instanceof PDO) {
			 return $this->db;
			 //retourne la variable de la connexion à la bdd
		}
	}

	public function query($sql, $data = array()){
		$req =$this->db->prepare($sql);
		$req->execute($data);
		return $req->fetchAll(PDO::FETCH_OBJ);
	}

	public function prepare(){
		
	}

	
}

?>




