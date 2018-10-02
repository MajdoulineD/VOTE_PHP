<html>
<head>
<title>Candidat</title>
</head>
<body>
<h1>Liste des Candidats</h1>

<form action="vote.php" method="POST">

	<?php
	
	require_once('connexion.php');

	$requete= "SELECT nom,prenom,id,voix FROM candidat ";
	$requete1= $bd->prepare($requete);
	$requete1->execute();
	
	while ($donnees = $requete1->fetch())
	{
	echo"Nombres de voix :  ". $donnees['voix'] .'<br>'." Candidat N° : ".$donnees['id'].'<br/>'.'<input type="checkbox" name="choix[]" />'. $donnees['nom'] ." " . $donnees['prenom'] . "<br><br>";

	
}

?>
	<input type="submit" name="submit" value="Valider">  
	<input type="button" name="resultat" value="resultat">
</form>

</body>
</html>
