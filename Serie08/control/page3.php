<?php 
$Montitle= 'Mon Title 2';
require '../control/core.php' ;
require '../vue/haut.php' ;

$VarNom 	 ="";
$VarEmail 	 ="";

$VarErrNom 	 ="";
$VarErrEmail ="";

if (isset($_POST['NOM'])){
	$VarNom=$_POST['NOM'];
	if(strpos($_POST['NOM'], ',')==false){
		$VarErrNom 	 ='<div class="alert alert-warning"> La zone doit contenir une virgule entre le nom et le prénom </div>';
	}
}


if (isset($_POST['EMAIL'])){
	$VarEmail=$_POST['EMAIL'];

	if (!preg_match("#[a-zA-Z0-9\.]{1,}[@][a-zA-Z0-9\.]{1,}[\.][a-zA-Z0-9\.]{1,}#", $VarEmail)){
		$VarErrEmail ='Email non conforme';
	}


	if(strpos($_POST['EMAIL'], '.')==false){
		$VarErrEmail .='La zone doit contenir un point';
	}

	if(strpos($_POST['EMAIL'], '@')==false){
		if($VarErrEmail!=''){
			$VarErrEmail .=	'<br/>';
		}
		$VarErrEmail .='La zone doit contenir un @';
	}

	if($VarErrEmail!=''){
		$VarErrEmail =	'<div class="alert alert-warning">'.$VarErrEmail.'</div>';
	}

	
}

if($VarErrNom=='' && $VarErrEmail=='' && $VarNom!=''){
	$_SESSION['UTILISATEUR_NOM'] 	= $VarNom;
	$_SESSION['UTILISATEUR_OK'] 	=  1;
}


?>

<?php 
require '../vue/page3.php' ;
require '../vue/bas.php' ;
?>