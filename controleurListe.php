<?php
	
	require 'Modele.php';
	try{
		$Liste = ListerAtelier();
		require 'ListerAtelier.php';
	}
	catch(Exception $e){
		echo '.$e->getMessage().';
	}
?> 