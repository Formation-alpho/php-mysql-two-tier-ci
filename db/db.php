<?php
// db.php : Connexion à la base de données
$host = 'db'; // Serveur
$dbname = 'user_management'; // Nom de la base
$username = 'user'; // Utilisateur par défaut pour WAMP
$password = 'password'; // Mot de passe vide par défaut

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
