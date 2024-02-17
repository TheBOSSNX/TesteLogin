<?php 

include("protect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <p>
        Seja bem-vindo, <?php echo $_SESSION['username']; ?>
    </p>

    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>