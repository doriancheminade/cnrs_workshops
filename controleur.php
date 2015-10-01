<?php
	
	require 'Modele.php';
	if (isset($_POST['Lister']))
	{
		try{
		$Liste = ListerAtelier();
		require 'ListerAtelier.php';
		}
		catch(Exception $e){
			echo '.$e->getMessage().';
		}
	}

	if (isset($_POST['Ajouter'])){

		try{
			addAtelier($_POST['theme'],$_POST['type'],$_POST['Date_and_Horaires'],$_POST['Remarque'], $_POST['Lieu'],$_POST['Duree_Atelier'],$_POST['Capacite'],$_POST['Inscription'], $_POST['Description'], $_POST['animateur'],$_POST['partenaires'],$_POST['public'],$_POST['content']);
			}

		catch(Exception $e){
			echo '.$e->getMessage().';
		}
	}

	if (isset($_POST['suppression'])){
		try{	
			suppressionAtelier($_POST['valeur']);
		}
		catch(Exception $e){
				echo '.$e->getMessage().';
		}
	}
	if (isset($_POST['modification'])){
		try{	
			$Select_Ligne = SelectionAtelier($_POST['valeur']);
			header('Location: modification_atelier.php?Theme='.$Select_Ligne['theme']."&Type=".$Select_Ligne['type']."&Date=".$Select_Ligne['Date_and_Horaires']."&Remarque=".$Select_Ligne['Remarque']."&Lieu=".$Select_Ligne['Lieu']."&Duree_Atelier=".$Select_Ligne['Duree_Atelier']."&Capacite=".$Select_Ligne['Capacite']."&Inscription=".$Select_Ligne['Inscription']."&Description=".$Select_Ligne['Description']."&animateur=".$Select_Ligne['animateur']."&partenaires=".$Select_Ligne['partenaires']."&public=".$Select_Ligne['public']."&content=".$Select_Ligne['content']);
	 		
		}
		catch(Exception $e){
			echo '.$e->getMessage().';
		}
	}

	if (isset($_POST['modification_update'])){
		try{
			ModificationAtelier($_POST['theme'],$_POST['type'],$_POST['Date_and_Horaires'],$_POST['Remarque'], $_POST['Lieu'],$_POST['Duree_Atelier'],$_POST['Capacite'],$_POST['Inscription'], $_POST['Description'], $_POST['animateur'],$_POST['partenaires'],$_POST['public'],$_POST['content']);
		}
		catch(Exception $e){
			echo '.$e->getMessage().';
		}
	}
	
?> 