<link href='css/addatelier.css' rel='stylesheet' type='text/css'>
<?php
		echo	'<!DOCTYPE html PUBLIC >
		<html xmlns="http://www.w3.org/1999/xhtml">

			<head>
			<img src="images/cnrs.png" width=120px height=120px />
		
				<title>Ajouter un atelier</title>
				<script type="text/javascript" src="js/jquery.js"></script>
     <script type="text/javascript" src="js/bootstrap.js"></script>
     <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			
			</head>

			<body>
			<center>
             <p>
			 <h1>Bienvenue sur l\'espace Laboratoire</h1>
			 </p>
			</center>

			<div id="Boutons">
			<center>
			<h5> Vous avez choisi d\'ajouter un atelier </h5>
</center>
	<form name="add" action="controleur.php" method="post">
			<table align="center">


	<tr>

		<th colspan=2 >Remplir les champs</th>
	</tr>
    <!---------------------------Théme---------------------------------------------->    

	<tr>
		<td>
			<label for="theme">Th&egraveme :</label><br>
			
		</td>
		<td><input type="text" name="theme" id="theme" maxlength=50  ></td>

	</tr>
    <!---------------------------------Type---------------------------------------->    
    <tr>
		<td>
			<label for="type">Type :</label><br>
			
		</td>
		<td><input type="text" name="type" id="type"  ></td>

	</tr>

    <!----------------------------Date--------------------------------------------->    
	<tr>
		<td>
			<label for="Date">Date :</label><br>
			
		</td>
		<td><input type="text" name="Date_and_Horaires" id="date"  ></td>

	</tr>
    <!------------------------------Remarque------------------------------------------->
	<tr>
		<td>
			<label for="remarque">Remarque :</label><br>
			
		</td>
		<td><input type="text" name="Remarque" id="remarque" /></td>
	</tr>
   
    <!----------------------gestion de la date de naissance----------------------->
	<tr>
		<td>
			<label for="lieu">Lieu :</label><br>
			
		</td>
		<td><input type="text" name="Lieu" id="lieu" /></td>
	</tr>
    
    <!---------------------------durée---------------------------------------------->
    <tr>
		<td>
			<label for="durée atelier">Dur&eacutee atelier :</label><br>
			
		</td>
		<td><input type="text" name="Duree_Atelier" id="durée" /></td>
	</tr>
    <!------------------------capacité-------------------------------------------------->
    <tr>
		<td>
			<label for="capacité">Capacit&eacute :</label><br>
			
		</td>
		<td><input type="text" name="Capacite" id="capacité" /></td>
	</tr>

	<!------------------------inscription-------------------------------------------------->
    <tr>
		<td>
			<label for="inscription">Inscription :</label><br>
			
		</td>
		<td><input type="text" name="Inscription" id="inscription" /></td>
	</tr>


	<!------------------------description-------------------------------------------------->
    <tr>
		<td>
			<label for="description">Description :</label><br>
			
		</td>
		<td><input type="text" name="Description" id="description" /></td>
	</tr>
	<!------------------------animateur-------------------------------------------------->
    <tr>
		<td>
			<label for="animateur">Animateur :</label><br>
			
		</td>
		<td><input type="text" name="animateur" id="animateur" /></td>
	</tr>
	<!------------------------partenaire-------------------------------------------------->
    <tr>
		<td>
			<label for="partenaire">Partenaire:</label><br>
			
		</td>
		<td><input type="text" name="partenaires" id="partenaires" /></td>
	</tr>
	<!------------------------public-------------------------------------------------->
    <tr>
		<td>
			<label for="public">Public :</label><br>
			
		</td>
		<td><input type="text" name="public" id="public" /></td>
	</tr>
		<!------------------------content-------------------------------------------------->
    <tr>
		<td>
			<label for="content">Content :</label><br>
			
		</td>
		<td><input type="text" name="content" id="content" /></td>
	</tr>

</table>
<table align="center">
			
			<td align="left"> <button class="btn btn-primary" name="Ajouter" id="Ajouter"  type="submit">Valider</button></td>
			</form>
            <form name="lister" action="atelier.php" method="post">
			<td align="right"> <button class="btn btn-primary" type="submit">retour</button></td>

			</form>

			</body>
			</html>'
   ?>