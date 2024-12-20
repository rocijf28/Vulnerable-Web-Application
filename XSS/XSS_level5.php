<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure XSS Example Level 5</title>
</head>
<body>
    <form method="GET" action="">
        <p>Your name: <input type="text" name="username" required></p>
        <input type="submit" name="submit" value="Submit">
    </form>
    <div>
        <?php
        if (isset($_GET["username"])) {
            // Validar y sanitizar la entrada del usuario
            $username = trim($_GET["username"]); // Eliminar espacios en blanco
            $safeUsername = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');

            // Mostrar salida segura
            echo "Your name is " . $safeUsername;
        }
        ?>
    </div>
</body>
</html>
