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

if(Control_util::isAjax()){
	$monFormulaire = new Form('FormUtilisateur_tab','post','?');
	$monFormulaire->addText('Prénom :','PRENOM','PRENOM',$VarPrenom,false,'Entrez ici le prénom recherché');
	/*$monFormulaire->addSubmit('VALIDER','Valider');*/
	echo $monFormulaire->getForm();

}

$Utilisateurs=Model::load("utilisateurs");
$Utilisateurs->read(null,$where);
require '../vue/utilisateurs_tab.php' ;



?>
