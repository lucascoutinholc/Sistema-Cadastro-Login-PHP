<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sistema</title>
</head>
<body>
    <?php
        session_start();
        if (!$_SESSION['$nome']) {
            header('Location: index.php');
            exit();
        }
    ?>
    <h1> Bem vindo ao sistema, <?php session_start(); echo $_SESSION['$nome']; ?> </h1>
    <a href="sair.php"> Sair </a>
</body>
</html>