<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['nom'])) {
        echo "<p>Vous êtes connecté en tant que " . $_SESSION['nom'] . "</p>";
    } else {
        echo "<p>Non connecté</p>";
    }
    ?>

    <form action="./formLoginTraitement.php" method="POST">
        <label for="email">E-Mail :</label>
        <input type="email" name="email" id="email">
        <label for="password">Mdp :</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Se connecter">
    </form>
</body>

</html>