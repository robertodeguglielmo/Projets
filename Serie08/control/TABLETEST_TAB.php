<?php 
	require_once '../control/core.php' ;
?>


<?php 
	$Tabletest=Model::load("tabletest");
	$Tabletest->read();
	require '../vue/TABLETEST_TAB.php' ;
?>
