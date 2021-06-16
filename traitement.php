<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=argonaute;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO argonaute (nom) VALUES(?)');
$req->execute(array($_POST['nom']));


// Redirection du visiteur vers la page du minichat
header('Location: index.php');
?>