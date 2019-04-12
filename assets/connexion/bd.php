<?php 
try
	{
		// On se connecte à MySQL
		$bdd = new PDO('mysql:host=localhost;dbname=id9273965_cogip;charset=utf8', 'id9273965_becode', 'becode2019');
		$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		$bdd->exec("SET NAMES 'UTF8'");		
		}
			catch(Exception $e)
		{
		// En cas d'erreur, on affiche un message et on arrête tout
		die('Erreur : '.$e->getMessage());
	}

?>