<?php 

require_once '../control/core.php' ;

if( isset($_POST['code'])){
	$tmp_utilisateur=Model::load("utilisateurs");
	$tmp_utilisateur->utilisateur_desactive($_POST['code']);
	echo '0';
}else{
	echo '1';
}

?>