<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" href="../Resources/hmbct.png" />
    <title>CommandExec-1</title>
  </head>
  <body>
    <div style="background-color:#afafaf;padding:15px;border-radius:20px 20px 0px 0px">
      <button type="button" name="homeButton" onclick="location.href='../homepage.html';">Home Page</button>
      <button type="button" name="mainButton" onclick="location.href='commandexec.html';">Main Page</button>
    </div>
    <div style="background-color:#c9c9c9;padding:20px;">
      <h1 align="center">Login as Admin</h1>
    <form align="center" action="CommandExec-1.php" method="$_GET">
      <label align="center">Username:</label><br>
      <input align="center" type="text" name="username" value="Admin"><br>
      <label>Password:</label><br>
      <input align="center" type="password" name="password" value=""><br>
    <input align="center" type="submit" value="Submit">

    </form>
  </div>
  <div style="background-color:#ecf2d0;padding:20px;border-radius:0px 0px 20px 20px" align="center">
    <?php
if (isset($_GET["username"])) {
    $allowedCommands = ['Admin']; // Lista de comandos permitidos
    $inputCommand = $_GET["username"];
    
    if (in_array($inputCommand, $allowedCommands, true)) {
        echo shell_exec($inputCommand);
    } else {
        echo "Command not allowed.";
    }

    if ($inputCommand === "Admin" && $_GET["password"] === "ufoundmypassword") {
        echo "WELLDONE";
    }
}
?>
  </div>
  </body>
</html>
