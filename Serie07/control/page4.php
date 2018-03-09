<?php 
	$Montitle= 'Mon Title 2';
	require '../control/core.php' ;
	require '../vue/haut.php' ;
?>


<?php 
	$perso1= new Personnage(50,5); 
	$perso2= new Personnage(100,23); 
	$perso1->frapper($perso2); 
	$perso1->gagnerExperience(); 
	$perso2->frapper($perso1); 
	$perso2->gagnerExperience(); 

	$monFormulaire = new Form('Formulaire','post','http://dero-promsocatc.alwaysdata.net/index.php');
	$monFormulaire->setText('NOM :','NOM','NOM','',true,'Entrez ici votre nom');
	$monFormulaire->setEmail('Email :','EMAIL','EMAIL','',true,'nom.prenom@fournisseur.be');
	$monFormulaire->setSubmit('VALIDER','Valider');

	require '../vue/page4.php' 
?>

<?php 
	require '../vue/bas.php' ;
?>