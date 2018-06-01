<?php
class utilisateurs extends Model{
	protected $table = "utilisateurs";	
	protected $PK = "utilisateur";

	function utilisateur_active($Utilisateur){
		$sql= "call Utilisateur_activ ('".$Utilisateur."') ";
		$this->connection->query($sql);
	}

	function utilisateur_desactive($Utilisateur){
		$sql= "call Utilisateur_desactiv ('".$Utilisateur."') ";

		$this->connection->query($sql);
	}

	function utilisateur_create($Utilisateur,$Code,$Nom,$Prenom,$Admin,$Actif){
		$sql= "insert into utilisateurs values( '".$Utilisateur."' , '".$Code."', '".$Nom."', '".$Prenom."',  ".$Admin." ,  ".$Actif." ) ";
		$this->connection->query($sql);
	}

	function utilisateur_update($Utilisateur,$Code,$Nom,$Prenom,$Admin,$Actif){
		$sql= "update utilisateurs set code = '".$Code."', nom = '".$Nom."', prenom = '".$Prenom."', admin = ".$Admin." , actif = ".$Actif."  where utilisateur = '".$Utilisateur."' ";
		$this->connection->query($sql);
	}

}

?>