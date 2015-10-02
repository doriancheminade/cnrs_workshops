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
					 <?php 
					 $value = $row["theme"];
					 	echo'   <form name="suppression" action="controleur.php" method="post">
									<td align="left"> <button value='.$value.' name="valeur" type="submit">suppression</button></td>
									<input  type="hidden" value= "suppression" name ="suppression" id="suppression"/>
								</form>'
					 ?>
				</div>
				<div id="modification">
					 <?php 
						 	echo'   <form name="suppression" action="controleur.php" method="post">
									<td align="left"> <button value='.$value.' name="valeur" type="submit">modification</button></td>
									<input  type="hidden" value= "modification" name ="modification" id="modification"/>
									</form>'
					 ?>
				</div>
			</div>
		</div>'
		<?php } ?>
		<form name="retour" action="atelier.php" method="post">
		<input type="submit" value="retour">
		</form>
	
	</body>
</html>