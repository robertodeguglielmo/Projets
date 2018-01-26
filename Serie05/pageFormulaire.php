<?php 
	$Montitle= 'Mon Title 2';
	require 'haut.php' ;
	$VarNom		= "";
	$VarEmail	= "";
	$Lst_err['NOM']="";
	$Lst_err['EMAIL']="";
	
	$VarDebutErr = '<p class="alert alert-warning">';
	$VarFinErr = "</p>";

	if(isset($_POST['NOM'])){
		$VarNom=$_POST['NOM'];
		if( !strstr($VarNom, ',' )) { 
			$Lst_err['NOM']=$VarDebutErr." Le nom et le prénom ne sont pas séparés par une virgule".$VarFinErr;

		}
	}

	if(isset($_POST['EMAIL'])){
		$VarEmail=$_POST['EMAIL'];
		if( !strstr($VarEmail, '@' ) || !strstr($VarEmail, '.' ) ) { 
			$Lst_err['EMAIL']=$VarDebutErr." L' adresse Email ne contient pas d'@ ni de '.' ".$VarFinErr;
		}
	}

	if($Lst_err['NOM']=='' && $Lst_err['EMAIL']=='' && $VarNom!=''){
		$_SESSION['UTILISATEUR_NOM']=$VarNom	;
		$_SESSION['UTILISATEUR_OK']=1	;
		
	}
?>
	<div class="container-fluid">
		<div class="row">
			<header id="header" class="col-lg-10 offset-3">
				<h1>Mon Formulaire</h1>
			</header>	
		</div>
	</div>
	<div class="container">
		
		<div class="row">
			<section class="col-lg-10">
				<div class="row">
					<article class="col-sm-6">
						<h2>Inscrivez-vous</h2>
						<p>Inscrivez-vous ici pour ceçevoir chaque semaine votre comparatif!</p>
						<!--<form action="http://dero-promsocatc.alwaysdata.net/index.php" method="post" accept-charset="utf-8">-->
						<form action="pageFormulaire.php" method="post" accept-charset="utf-8">
							<p>Nom et prénom :<input type="text" name="NOM" value=<?php echo '"'.$VarNom.'"'; ?> placeholder="Nom, Prénom" required></p>
							<?php if($Lst_err['NOM']!='') echo $Lst_err['NOM']; ?>
							<p>Email :<input type="text" name="EMAIL" value=<?php echo '"'.$VarEmail.'"'; ?> placeholder="nom.prenom@gmail.com" ></p>
							<?php if($Lst_err['EMAIL']!='') echo $Lst_err['EMAIL']; ?>
							<p><input type="submit" name="" value="Envoyer"></p>
						</form>
					</article>

				</div>
			</section>
			<aside class="col-lg-2">
				<h2>Fil d'actualité</h2>
				<ul>
					<li>Aujourd'hui à 21:07 VIDÉO | Des feux d’artifice «silencieux» au nouvel an pour respecter les animaux?</li>
					<li>Aujourd'hui à 21:04 Liban: le Premier ministre démissionnaire à Paris</li>
					<li>Aujourd'hui à 21:02 Charles Michel avec des étudiants Erasmus en Suède</li>
					<li>Aujourd'hui à 20:47 Accident avec un taxi: on recherche le témoin</li>
					<li>Aujourd'hui à 20:26 Drame à Huccorgne: une maman et une fillette décédées</li>

				</ul>
			</aside>
		</div>
	</div>
<?php 
	require 'bas.php' ;
?>