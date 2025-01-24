<?php
session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <div class="container">
        <h1>Bienvenue sur le site de gestion des utilisateurs</h1>
        
        <?php if (isset($_SESSION['user'])): ?>
            <!-- Si l'utilisateur est connecté -->
            <p>Bonjour, <strong><?php echo htmlspecialchars($_SESSION['user']['username']); ?></strong> !</p>
            <p>Que souhaitez-vous faire ?</p>
            <a href="pages/users.php">Voir la liste des utilisateurs</a>
            <a href="pages/logout.php">Se déconnecter</a>
        <?php else: ?>
            <!-- Si l'utilisateur n'est pas connecté -->
            <p>Bienvenue sur notre site ! Veuillez vous connecter ou créer un compte pour commencer.</p>
            <a href="pages/login.php">Se connecter</a>
            <a href="pages/register.php">Créer un compte</a>
        <?php endif; ?>
    </div>
</body>
</html>
