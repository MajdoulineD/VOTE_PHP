<?php


$hostname = "mysql:host=localhost;dbname=election";
$username = "root";
$password = "";

  try {
 		$bd = new  PDO($hostname,$username,$password);
 		$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 		echo "Votre connexion réussie !!! ".'</br>';
 	 }
 	catch(PDOException $e){
	 echo 'Erreur lors de la connexion';
	}
?>