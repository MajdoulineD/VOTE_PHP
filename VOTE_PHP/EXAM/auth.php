<?php
require_once('connexion.php');
/*
$nom= isset($_POST['nom'])? $_POST['nom']: " ";
$prenom= isset($_POST['prenom'])? $_POST['prenom']: " ";
$pass= isset($_POST['pass'])? $_POST['pass']: " ";


$select_vote="SELECT vote FROM electeur";//selectionner les votes
$requete=$bd->prepare($select_vote);
$requete->execute();
$resultat=$requete->fetch();

if ($nom==" ") {
	
	header('Location: form.html'); 	
	echo "Vueillez remplir le champ nom !";
}
elseif ($prenom==" ") {
	
	header('Location: form.html'); 	
	echo "Vueillez remplir le champ prenom!";
}
elseif ($pass==" ") {
	
	header('Location: form.html '); 	
	echo "Vueillez remplir le champ password !";
} 
elseif ($resultat==false) {

	echo $resultat;
	
	
	$NOM=$_POST['nom'];
	$PRENOM=$_POST['prenom'];
	$PASS=$_POST['pass'];


	$req = $bd->prepare('INSERT INTO electeur(id,nom, prenom, pass) VALUES(:nom, :prenom, :pass)');
	$req->execute(array(
	'nom' => $NOM,
	'prenom' => $PRENOM,
	'pass' => $PASS
	));

	header('Location: candidat.php '); 	
} 
*/
if(isset($_POST['submit'])){


	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$pass=$_POST['pass'];
	//$VOTE=false;


	$req = $bd->prepare('INSERT INTO electeur(nom, prenom, pass) VALUES(:nom, :prenom, :pass )');
	$req->execute(array(
	'nom' => $nom,
	'prenom' => $prenom,
	'pass' => $pass
	//'vote' => $VOTE
	));


$select_vote="SELECT vote FROM electeur";//selectionner les votes
$requete=$bd->prepare($select_vote);
$requete->execute();
$resultat=$requete->fetch();

if ($resultat==false) {

	echo $resultat;
	
	
	$NOM=$_POST['nom'];
	$PRENOM=$_POST['prenom'];
	$PASS=$_POST['pass'];


	$req = $bd->prepare('INSERT INTO electeur(id,nom, prenom, pass) VALUES(:nom, :prenom, :pass)');
	$req->execute(array(
	'nom' => $NOM,
	'prenom' => $PRENOM,
	'pass' => $PASS
	));

	header('Location: candidat.php '); 	
} 


}

?>