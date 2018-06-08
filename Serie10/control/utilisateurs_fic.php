<?php 
require_once '../control/core.php' ;

$VarUtilisateur 	="";
$VarCode 	 		="";
$VarPrenom 	 		="";
$VarNom 	 		="";
$VarAdministrateur 	=0;
$VarActif 	 		=0;
$VarMode 	 		="C";

$Utilisateurs=Model::load("utilisateurs");
$Utilisateurs->dump_sql=true;

/*SI je suis dans un mode, c'est que je dois effectuer une action DB*/
if(isset($_POST['MODE'])){
	
	$VarMode = "U";

	if(isset($_POST['ADMINISTRATEUR'])){
		$VarAdministrateur 	= $_POST['ADMINISTRATEUR'];	
	}
	if(isset($_POST['ACTIF'])){
		$VarActif 	= $_POST['ACTIF'];	
	}

	switch ($_POST['MODE']) {
		case 'C':
			$Utilisateurs->utilisateur_create($_POST['UTILISATEUR'],$_POST['CODE'],$_POST['NOM'],$_POST['PRENOM'],$VarAdministrateur,$VarActif);
			break;
		case 'U':
			$Utilisateurs->utilisateur_update($_POST['UTILISATEUR'],$_POST['CODE'],$_POST['NOM'],$_POST['PRENOM'],$VarAdministrateur,$VarActif);
		default:
			break;
	}
}else{
	/* Je dois juste afficher l'utilisateur passé en paramètre*/
	if (isset($_POST['UTILISATEUR'])){
		$VarUtilisateur=$_POST['UTILISATEUR'];
		$VarMode = "U";
		$Utilisateurs->id=$VarUtilisateur;
		$Utilisateurs->read();

		if(isset($Utilisateurs->data[0]->utilisateur)){
			$VarUtilisateur 	= $Utilisateurs->data[0]->utilisateur;
			$VarCode 	 		= $Utilisateurs->data[0]->code;
			$VarPrenom 	 		= $Utilisateurs->data[0]->prenom;
			$VarNom 	 		= $Utilisateurs->data[0]->nom;
			$VarAdministrateur 	= $Utilisateurs->data[0]->admin;
			$VarActif 	 		= $Utilisateurs->data[0]->actif;
		}

	}
}
$monFormulaire = new Form('Formulaire','post','utilisateurs_fic.php');
$monFormulaire->addHidden('MODE','MODE',$VarMode);
$monFormulaire->addText('Utilisateur :','UTILISATEUR','UTILISATEUR','',false,'Entre ici votre utilisateur',$VarUtilisateur);
$monFormulaire->addPassword('Mot de passe :','CODE','CODE','',false,'Entre ici votre mot de passe',$VarCode);
$monFormulaire->addText('Prénom :','PRENOM','PRENOM','',false,'Entrez ici votre prénom',$VarPrenom);
$monFormulaire->addText('Nom :','NOM','NOM','',false,'Entrez ici votre nom',$VarNom);
$monFormulaire->addCheckbox('Administrateur :','ADMINISTRATEUR','ADMINISTRATEUR',$VarAdministrateur);
$monFormulaire->addCheckbox('Actif :','ACTIF','ACTIF',$VarActif);
$monFormulaire->addSubmit('VALIDER','Valider');
echo $monFormulaire->getForm();
?>