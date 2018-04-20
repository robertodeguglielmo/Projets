<?php
class Utilisateur{
	public static function Authentification($pUtilisateur,$pMdp){
		$utilisateurs=Model::load("utilisateurs");
		$utilisateurs->id=$pUtilisateur;
		$utilisateurs->read();
		if($utilisateurs->data[0]->code==$pMdp){
			return true;
		}
		else{
			return false;
		}
	}

}

?>