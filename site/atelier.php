<link href='css/atelier.css' rel='stylesheet' type='text/css'>
<?php
	echo	'<!DOCTYPE html PUBLIC >
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			<img src="images/cnrs.png" width=120px height=120px />


				<title> Acceuil </title>
				<script type="text/javascript" src="js/jquery.js"></script>
     <script type="text/javascript" src="js/bootstrap.js"></script>
     <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


			</head>

			<body>
			<center>
             <p>
			<h1> Bienvenue sur l\'espace Laboratoire </h1>
			</p>
          </center>

			<div id="Boutons">
			<center>
			<br></br>
			<br></br>

			<h3> Vous pouvez soit : </h3>

			<table align="center">
			<form name="add" action="AddAtelier.php" method="post">
			<td align="left"> <button class="btn btn-primary"  type="submit">Ajouter atelier</button></td>
			</form>
            <form name="lister" action="controleur.php" method="post">
			<td align="right"> <button class="btn btn-primary" name="Lister" id="Lister" type="submit">Lister atelier</button></td>

			</form>
 </center>


			</body>
			</html>'

?>