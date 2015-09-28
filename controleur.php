<?php
	
	require 'Modele.php';
	try{
		require 'recupAtelier.php';
		addAtelier($theme,$type,$Date_and_Horaires,$Remarque,$Lieu,$Duree_Atelier,$Capacite,$Inscription, $Description,$animateur,$partenaires,$public,$content);
		
	}
	catch(Exception $e){
		echo '.$e->getMessage().';
	}
?> 