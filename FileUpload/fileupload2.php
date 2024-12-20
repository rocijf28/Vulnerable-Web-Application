<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="../Resources/hmbct.png" />
</head>
<body>

<div style="background-color:#c9c9c9;padding:15px;">
      <button type="button" name="homeButton" onclick="location.href='../homepage.html';">Home Page</button>
      <button type="button" name="mainButton" onclick="location.href='fileupl.html';">Main Page</button>
</div>
<div align="center">
<form action="" method="post" enctype="multipart/form-data">
    <br>
    <b>Select image : </b> 
    <input type="file" name="file" id="file" style="border: solid;">
    <input type="submit" value="Submit" name="submit">
</form>
	</div>
<?php

// Check if image file is a actual image or fake image
<?php
// Check if image file is an actual image or fake image
if (isset($_POST["submit"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $type = $_FILES["file"]["type"];
    
    // Validate file type
    if ($type != "image/png" && $type != "image/jpeg") {
        echo "JPG, JPEG, and PNG files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 1) {
        // Move the uploaded file
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            // Escapar salida para prevenir XSS
            $safeFileName = htmlspecialchars(basename($_FILES["file"]["name"]), ENT_QUOTES, 'UTF-8');
            echo "File uploaded to /uploads/" . $safeFileName;
        } else {
            echo "There was an error uploading the file.";
        }
    }
}
?>
</body>
</html>
