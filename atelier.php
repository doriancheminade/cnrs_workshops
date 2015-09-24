<?php
	echo	'<!DOCTYPE html PUBLIC >
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
		
				<title> Salut</title>
			
			</head>

			<body>
			<h2> Bienvenue sur l\'espace Laboratoire </h2>

			<div id="Boutons">
			<h1> Vous pouvez soit ajouter un atelier </h1>

			<form name="add" action="AddAtelier.php" method="post">
			<input type="submit" value="Ajout">
			</form>

			<form name="lister" action="ListerAtelier.php" method="post">
			<input type="submit" value="ListerAtelier">
			</form>


			</body>
			</html>'

?>