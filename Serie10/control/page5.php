<?php 
	$Montitle= 'Mon Title 2';
	require_once '../control/core.php' ;
	if(Control_util::isAjax()){
		require '../vue/haut.php' ;
	}

	
?>



<?php 
	/*echo $_SERVER['HTTP_X_REQUESTED_WITH'];*/
	require '../control/utilisateurs_tab.php' ;
?>

<?php
	/*if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {*/
	if(Control_util::isAjax()){
		require '../vue/bas.php' ;
	}
?>