<?php
class Model{
	protected $table;
	protected $connection;
	Public $id ;
	Public $data ;
	Public $dump_sql ;
	
	function __construct() {
		
		try {

		  $dns = 'mysql:host=127.0.0.1;dbname=test';
		  $utilisateur = "root";
		  $motDePasse = '';
		 
		  // Options de connection
		  $options = array(
			PDO::MYSQL_ATTR_INIT_COMMAND    => "SET NAMES utf8"
		  );
		 
		  // Initialisation de la connection
		  $this->connection = new PDO( $dns, $utilisateur, $motDePasse, $options );
		} catch ( Exception $e ) {
		  echo "Connection à MySQL impossible : ", $e->getMessage();
		  die();
		}
	}

	public function read($fields=null,$where=''){
		
		if($fields==null){
			$fields = '*';
		}
		if ($this->id== null){
			$sql= 'SELECT '.$fields.' from '.$this->table ;
			if ($where!= ''){
				$sql.=' where '.$where;
			}
			
		}
		else{
			$sql= 'SELECT '.$fields.' from '.$this->table .'  where '.$this->PK." = '" .$this->id."'" ;
		}
		
		
		try {
		  // On envois la requète
			if($this->dump_sql==true){
				echo $sql;
			}
		  
		  $select = $this->connection->query($sql);
		 
		  // On indique que nous utiliserons les résultats en tant qu'objet
		$select->setFetchMode(PDO::FETCH_OBJ);
		$this->data = new stdClass();
		$this->data = $select->fetchall();

		} catch ( Exception $e ) {
		  echo 'Une erreur est survenue lors de la récupération des créateurs';
		}
		
	}
	static function load($name){
		require ('../model/'.$name.'.php');
		return new $name();
	}
	

}
?>