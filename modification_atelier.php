<link href='css/addatelier.css' rel='stylesheet' type='text/css'>
		<!DOCTYPE html PUBLIC >
		<html xmlns="http://www.w3.org/1999/xhtml">

			<head>
			<link rel="icon" type="image/png" href="images/cnrs.png" /> 
			<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]--> 
			<a href="atelier.php">
			<img src="images/cnrs.png" width=120px height=120px />
		</a>
				<title>Ajouter un atelier</title>
				<script type="text/javascript" src="js/jquery.js"></script>
     <script type="text/javascript" src="js/bootstrap.js"></script>
     <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			
			</head>

			<body>
			<?php 
			if(isset($_GET['Theme'])) 
			{ 
				$theme =  $_GET['Theme']; 
				$type =   $_GET['Type']; 
				$Date_and_Horaires =  $_GET['Date']; 
				$Remarque =  $_GET['Remarque'];
				$Lieu =  $_GET['Lieu'];
				$Duree_Atelier = $_GET['Duree_Atelier'];
				$Capacite =  $_GET['Capacite'];
				$Inscription =  $_GET['Inscription'];
				$Description =  $_GET['Description'];
				$animateur =  $_GET['animateur'];
				$partenaires =  $_GET['partenaires'];
				$public =  $_GET['public'];
				$content =  $_GET['content'];
			} 
			else{
				echo 'saltusalsaudfjef';
			}
			?>
			<center>
             <p>
			 <h1>Bienvenue sur l\'espace Laboratoire</h1>
			 </p>
			</center>

			<div id="Boutons">
			
 <?php echo'<form name="modifier" action="controleur.php" method="post">' ?>
			<table align="center">


	<tr>

		<th colspan=2 >Vous pouvez modifer votre atelier</th>
	</tr>
    <!---------------------------Theme---------------------------------------------->    

	<tr>
		<td>
			<label for="theme">Th&egraveme :</label><br>
			
		</td>
		<td><input type="text" name="theme" id="theme" value= "<?php echo $_GET['Theme'];?>"   maxlength=50  >  </td>

	</tr>
    <!---------------------------------Type---------------------------------------->    
    <tr>
		<td>
			<label for="type">Type :</label><br>
			
		</td>
		<td><input type="text" name="type" value= "<?php echo $_GET['Type'];?>" id="type"  ></td>

	</tr>

    <!----------------------------Date--------------------------------------------->    
	<tr>
		<td>
			<label for="Date">Date :</label><br>
			
		</td>
		<td><input type="text" name="Date_and_Horaires" value= "<?php echo $_GET['Date'];?>"  id="Date_and_Horaires"  ></td>

	</tr>
    <!------------------------------Remarque------------------------------------------->
	<tr>
		<td>
			<label for="remarque">Remarque :</label><br>
			
		</td>
		<td><input type="text" name="Remarque" value= "<?php echo $_GET['Remarque'];?>" id="Remarque" /></td>
	</tr>
   
    <!----------------------gestion de la date de naissance----------------------->
	<tr>
		<td>
			<label for="lieu">Lieu :</label><br>
			
		</td>
		<td><input type="text" name="Lieu" value= "<?php echo $_GET['Lieu'];?>" id="Lieu" /></td>
	</tr>
    
    <!---------------------------durée---------------------------------------------->
    <tr>
		<td>
			<label for="durée atelier">Dur&eacutee atelier :</label><br>
			
		</td>
		<td><input type="text" name="Duree_Atelier" value= "<?php echo $_GET['Duree_Atelier'];?>"  id="Duree_Atelier" /></td>
	</tr>
    <!------------------------capacité-------------------------------------------------->
    <tr>
		<td>
			<label for="capacité">Capacit&eacute :</label><br>
			
		</td>
		<td><input type="text" name="Capacite" value= "<?php echo $_GET['Capacite'];?>"  id="Capacite" /></td>
	</tr>

	<!------------------------inscription-------------------------------------------------->
    <tr>
		<td>
			<label for="inscription">Inscription :</label><br>
			
		</td>
		<td><input type="text" name="Inscription" value= "<?php echo $_GET['Inscription'];?>" id="Inscription" /></td>
	</tr>


	<!------------------------description-------------------------------------------------->
    <tr>
		<td>
			<label for="description">Description :</label><br>
			
		</td>
		<td><input type="text" name="Description" value= "<?php echo $_GET['Description'];?>" id="Description" /></td>
	</tr>
	<!------------------------animateur-------------------------------------------------->
    <tr>
		<td>
			<label for="animateur">Animateur :</label><br>
			
		</td>
		<td><input type="text" name="animateur" value= "<?php echo $_GET['animateur'];?>"  id="animateur" /></td>
	</tr>
	<!------------------------partenaire-------------------------------------------------->
    <tr>
		<td>
			<label for="partenaire">Partenaire :</label><br>
			
		</td>
		<td><input type="text" name="partenaires" value= "<?php echo $_GET['partenaires'];?>"  id="partenaires" /></td>
	</tr>
	<!------------------------public-------------------------------------------------->
    <tr>
		<td>
			<label for="public">Public :</label><br>
			
		</td>
		<td><input type="text"  value= "<?php echo $_GET['public'];?>" name="public" id="public" /></td>
	</tr>
		<!------------------------content-------------------------------------------------->
    <tr>
		<td>
			<label for="content">Content :</label><br>
			
		</td>
		<td><input type="text" name="content" value= "<?php echo $_GET['content'];?>" id="content" /></td>
	</tr>

</table>
<table align="center">
	 		<?php echo '
	 		<td align="left"> <button class="btn btn-primary" type="submit">Valider</button></td>
	 		<input  type="hidden" value= "modification_update" name ="modification_update" id="modification_update"/>
			</form>

			<form name="add" action="atelier.php" method="post">
			<td align="right"> <button class="btn btn-primary" type="submit">Retour</button></td>
			</form>
 
			' ?>
			</body>
			</html>'