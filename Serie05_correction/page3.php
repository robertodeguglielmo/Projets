<?php 
$Montitle= 'Mon Title 2';
require 'haut.php' ;

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


<div class="container-fluid">
	<div class="row">
		<header id="header" class="col-lg-10 offset-3">
			<h1>Mon formulaire</h1>
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
					<form action="page3.php" method="post" accept-charset="utf-8">
						<p>Nom :<input type="text" name="NOM" value= <?php echo '"'.$VarNom.'"'; ?> placeholder="Entrez votre nom" ></p>
						<?php echo $VarErrNom ?>
						<p>Email :<input type="text" name="EMAIL" value= <?php echo '"'.$VarEmail.'"'; ?> placeholder="nom.prenom@gmail.com" ></p>
						<?php echo $VarErrEmail ?>
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