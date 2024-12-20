<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS Prevention Example</title>
</head>
<body>
    <form method="GET" action="">
        <p>Your name: <input type="text" name="username"></p>
        <input type="submit" name="submit" value="Submit">
    </form>
    <div>
        <?php
        if (isset($_GET["username"])) {
            // Escapar la salida para prevenir XSS
            $safeUsername = htmlspecialchars($_GET["username"], ENT_QUOTES, 'UTF-8');
            echo "Your name is " . $safeUsername;
        }
        ?>
    </div>
</body>
</html>
