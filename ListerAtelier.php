<!DOCTYPE html PUBLIC >
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<img src="images/cnrs.png" width=120px height=120px />
		<title>Ajouter un atelier</title>
		<script type="text/javascript" src="js/jquery.js"></script>
     	<script type="text/javascript" src="js/bootstrap.js"></script>
     	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
     	<link href="css/ListerAtelier.css" rel="stylesheet" type="text/css">
     	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>

	<body>
		<div id="Boutons">
			<h1> Vous avez choisi de lister les ateliers </h1>
		</div>

		<?php foreach ($Liste as $row) { ?>
		<div id="listage">
			<div id="ListeAtelier">
				<?php echo $row["theme"] ?>
			</div>
			<div id="cadre">
					
				<div id="suppression">
					<img src="images/del.gif" />
				</div>
				<div id="modification">
					<img src="images/edit.gif" />
				</div>
			</div>
		</div>'
		<?php } ?>
		<form name="retour" action="atelier.php" method="post">
		<input type="submit" value="retour">
		</form>
	
	</body>
</html>