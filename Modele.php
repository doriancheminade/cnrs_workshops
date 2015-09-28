<?php

// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBdd() {
  try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=cnrs;charset=utf8', 'root', '');
		return $bdd;
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}
}

function addAtelier($theme,$type,$Date_and_Horaires,$Remarque,$Lieu,$Duree_Atelier,$Capacite,$Inscription, $Description,$animateur,$partenaires,$public,$content){
	$connexion = getBdd();
	try{
		$atelier = $connexion -> prepare("INSERT INTO atelier(theme, type, Date_and_Horaires, Remarque, Id_Laboratory, Lieu, Duree_Atelier, Capacite, Inscription, Description, animateur, partenaires, public, content) values
	('".$theme."', '".$type."', '".$Date_and_Horaires."', '".$Remarque."','1', '".$Lieu."', '".$Duree_Atelier."', '".$Capacite."', '".$Inscription."', '".$Description."', '".$animateur."', '".$partenaires."', '".$public."', '".$content."')");
		$atelier -> execute() or die(print_r($atelier->errorInfo(), true));
		echo "Vous avez bien ajouter un atelier aller à <a href= atelier.php> accueil </a>";
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}
}

	function ListerAtelier(){

		$connexion = getBdd();
		try{
			$Liste = $connexion -> prepare("SELECT * From atelier");
			$Liste -> execute() or die(print_r($Liste->errorInfo(), true));
			$Liste->setFetchMode(PDO::FETCH_ASSOC);
			return $Liste;
		}
		catch (Exception $e)
		{
	        die('Erreur : ' . $e->getMessage());
		}
	}

	function suppressionAtelier($DeleteValue){
		$connexion = getBdd();
		try{
			$suppression = $connexion -> prepare("Delete * from atelier where ID_Atelier ='".$DeleteValue."'");
			$suppression -> execute() or die(print_r($suppression->errorInfo(), true));
		}
		catch (Exception $e)
		{
	        die('Erreur : ' . $e->getMessage());
		}
	}

	function ModificationAtelier($theme,$Champ, $newValue, $ID_Atelier){
		$connexion = getBdd();
		try{
			$recuperationID = $connexion -> prepare("select ID_Atelier from atelier where theme = '".$theme."'");
			$suppression = $connexion -> prepare("UPDATE atelier set '".$champ."' = '".$newValue."' where ID_Atelier = '".$recuperation."' ");
			$suppression -> execute() or die(print_r($suppression->errorInfo(), true));
		}
		catch (Exception $e)
		{
	        die('Erreur : ' . $e->getMessage());
		}
	}

?>