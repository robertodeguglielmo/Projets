<?php 
require_once '../control/core.php' ;
?>


<?php 

$VarPrenom 	 ="";
$where		 ="";
if (isset($_POST['PRENOM'])){
	$VarPrenom=$_POST['PRENOM'];
	if($where!=""){
		$where.=" and ";
	}
	$where.=" upper(prenom)  like upper('%".$VarPrenom."%' )";
}

$monFormulaire = new Form('Formulaire','post','?');
$monFormulaire->addText('Prénom :','PRENOM','PRENOM',$VarPrenom,false,'Entrez ici le prénom recherché');
/*$monFormulaire->addSubmit('VALIDER','Valider');*/
echo $monFormulaire->getForm();

$Tabletest=Model::load("tabletest");
$Tabletest->read(null,$where);
require '../vue/TABLETEST_TAB.php' ;



?>
