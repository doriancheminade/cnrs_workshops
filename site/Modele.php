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
			$suppression = $connexion -> prepare("DELETE from atelier where theme='".$DeleteValue."'");
			$suppression -> execute() or die(print_r($suppression->errorInfo(), true));
			echo "Vous avez bien supprime votre atelier. <a href= atelier.php> accueil </a>";
		}
		catch (Exception $e)
		{
	        die('Erreur : ' . $e->getMessage());
		}
	}

	function ModificationAtelier($theme,$type,$Date_and_Horaires,$Remarque,$Lieu,$Duree_Atelier,$Capacite,$Inscription, $Description,$animateur,$partenaires,$public,$content){
			$connexion = getBdd();
			try{
			$recuperationID = $connexion -> prepare("SELECT ID_Atelier from atelier where theme = '".$theme."'");
			$update = $connexion -> prepare
				("UPDATE atelier SET type = '" . $type . "', Date_and_Horaires = '" . $Date_and_Horaires .
			 "', Remarque = '" . $Remarque . "', Lieu = '" . $Lieu .
			  "', Duree_Atelier = '" . $Duree_Atelier . "', Capacite = '" . $Capacite .
			   "', Inscription = '" . $Inscription . 
			   	 "', Description = '" . $Description . "', animateur = '" . $animateur .
			   	  "', partenaires = '" . $partenaires . "', public = '" . $public .
			   	 "', public = '" . $public . "', content = '" . $content . "'
			   WHERE theme = '" . $theme . "' ") ;


			$update -> execute() or die(print_r($update->errorInfo(), true));
			echo " Votre modification à bien ete effectue. <a href='atelier.php'> Accueil </a>";
		}
		catch (Exception $e)
		{
	        die('Erreur : ' . $e->getMessage());
		}
	}

	function SelectionAtelier($theme){
		$connexion = getBdd();
		try{
			$requete = $connexion -> prepare("SELECT * from atelier where theme = '".$theme."'");
			$requete -> execute() or die(print_r($requete->errorInfo(), true));
			$recuperationAtelier = $requete-> fetch();
			return $recuperationAtelier;
		}
		catch (Exception $e)
		{
	        die('Erreur : ' . $e->getMessage());
		}
	}

?>