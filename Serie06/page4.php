<?php 
$Montitle= 'Mon Title 2';
require 'haut.php' ;
?>


<div class="container-fluid">
	<div class="row">
		<header id="header" class="col-lg-10 offset-3">
			<h1>Combat !</h1>
		</header>	
	</div>
</div>
<div class="container">

	<div class="row">
		<section class="col-lg-10">
			<div class="row">					
				<article class="col-sm-9">


					<h2>Que le combat commence !</h2>
					
					<?php 
						$perso1= new Personnage(50,5); 
						$perso2= new Pesronnage(100,23); 
						$perso1->frapper($perso2); 
						$perso1->gagnerExperience(); 
						$perso2->frapper($perso1); 
						$perso2->gagnerExperience(); 
						


						echo 'Le personnage 1 a ', $perso1->getforce(), ' de force, contrairement au personnage 2 qui a ', $perso2->getforce(), ' de force.<br />';

						echo 'Le personnage 1 a ', $perso1->getexperience(), ' d\'expérience, contrairement au personnage 2 qui a ', $perso2->getexperience(), ' d\'expérience.<br />';

						echo 'Le personnage 1 a ', $perso1->getdegats(), ' de dégâts, contrairement au personnage 2 qui a ', $perso2->getdegats(), ' de dégâts.<br />';

					?>

				</article>

				<article class="col-sm-3">

					
					<h2>Test de formulaire</h2>
					
					<?php 
						$monFormulaire = new Form('Formulaire','post','http://dero-promsocatc.alwaysdata.net/index.php');
						$monFormulaire->setText('NOM :','NOM','NOM','',true,'Entrez ici votre nom');
						$monFormulaire->setEmail('Email :','EMAIL','EMAIL','',true,'nom.prenom@fournisseur.be');
						$monFormulaire->setSubmit('VALIDER','Valider');
						echo $monFormulaire->getForm();

					?>

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