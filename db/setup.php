<?php
// Configuration de la connexion MySQL
$host = 'db'; // Serveur WAMP (localhost par défaut)
$username = 'user'; // Nom d'utilisateur MySQL par défaut
$password = 'password'; // Mot de passe WAMP par défaut (vide)
$dbname = 'user_management'; // Nom de la base de données

try {
    // Connexion au serveur MySQL sans spécifier de base
    $pdo = new PDO("mysql:host=$host", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Création de la base de données si elle n'existe pas
    $pdo->exec("CREATE DATABASE IF NOT EXISTS `$dbname` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci");

    // Connexion à la base de données nouvellement créée
    $pdo->exec("USE `$dbname`");

    // Création de la table "users" si elle n'existe pas
    $sql = "
        CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) NOT NULL,
            email VARCHAR(100) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );
    ";
    $pdo->exec($sql);

    // Confirmation de succès
    echo "Base de données et table 'users' créées avec succès ! 🎉";

} catch (PDOException $e) {
    // Gestion des erreurs avec un message explicite
    die("Erreur lors de la création de la base de données ou des tables : " . $e->getMessage());
}
?>
