<?php 

$user = 'root'; 
$pwd = ''; 
$dbname =  'cours_esilv';
try {
	// Test de la connexion
	$db = new PDO('mysql:host=localhost;dbname=cours_esilv', $user, $pwd);
} catch (PDOException $e) {
	// Si erreur, j'affiche l'erreur
	echo 'Erreur de connexion à la BDD : .' . $e->getMessage() . ' ! <br>';
	die();
}
?>
