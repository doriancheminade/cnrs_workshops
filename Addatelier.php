<?php
	echo	'<!DOCTYPE html PUBLIC >
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
		
				<title> Salut</title>
			
			</head>

			<body>
			<h2> Bienvenue sur l\'espace Laboratoire </h2>

			<div id="Boutons">
			<h1> Vous avez choisi d\'ajouter un atelier </h1>

			<form name="Ajout" action="AddAtelier.php" method="post">
			theme <input type="text" name="theme" /><br>
			type <input type="text" name="type" /><br>
			Date and Horaires<input type="text" name="Date_and_Horaires" /><br>
			Remarque <input type="text" name="Remarque" /><br>
			Lieu <input type="text" name="Lieu" /><br>
			Duree Atelier <input type="text" name="Duree_Atelier" /><br>
			Capacite <input type="text" name="Capacite" /><br>
			Inscription <input type="text" name="Inscription" /><br>
			Description <input type="text" name="Description" /><br>
			animateur <input type="text" name="animateur" /><br>
			partenaires <input type="text" name="partenaires" /><br>
			public <input type="text" name="public" /><br>
			content <input type="text" name="content" /><br>
			</form>



			</body>
			</html>'

?>