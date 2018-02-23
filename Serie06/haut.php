<?php 
session_start(); 
require_once 'Personnage.php';
require_once 'Form.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $Montitle; ?></title>
	<link rel="stylesheet" href="css/page.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
</head>
<body>
	<nav class="navbar navbar-inverse" id="haut">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Le site d'actualité</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="Page1.php">Régions</a></li>
				<li><a href="Page2.php">Foot</a></li>
				<li><a href="Page3.php">Formulaire</a></li>
				<li><a href="Page4.php">Combat</a></li>
			</ul>
		</div>
	</nav>
		<?php 
		if(isset($_SESSION['UTILISATEUR_OK']) && $_SESSION['UTILISATEUR_OK'] == 1 && isset($_SESSION['UTILISATEUR_NOM'])){
			Echo '<h2> Bonjour '.$_SESSION['UTILISATEUR_NOM'].'
				<form action="session_destroy.php" method="post" accept-charset="utf-8">
					<input type="submit" name="" value="Se déconnecter">

				</form></h2>';

		}

	?>
