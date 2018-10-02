<?php
require_once('connexion.php');
if(isset($_POST['submit'])){



	$check = $_POST['choix'];
	

	for($i=0; $i < count($check); $i++){
    echo "Selectionné  :  " . $check[$i] . "<br/>";

		 $req= ('SELECT id FROM candidat WHERE id = $candidat[id]');
		
		$nom = "SELECT nom FROM electeur WHERE id = '1'";

		$mjs= "UPDATE electeur set vote=true WHERE nom=$nom" ;

	/*
	transmettre les id des candidats coches 
	incrmente de 1 nembre de voix du candidat 
	et mets a vrai le champ vote dans electeur
	*/


		}

}


?>