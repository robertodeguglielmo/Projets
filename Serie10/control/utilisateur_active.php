<?php 

require_once '../control/core.php' ;

if( isset($_POST['code'])){
	$tmp_utilisateur=Model::load("utilisateurs");
	$tmp_utilisateur->utilisateur_active($_POST['code']);
	echo '1';
}else{
	echo '0';
}

?>