<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>XAMPP Connection</title>
</head>
<body>

<?php
 $username = "root";
 $servername = "localhost";

 $connection = new mysqli($servername, $username, "");

 if ($connection->connect_error) {
 die("CONNECTION FAILED! TRY AGAIN: " . $connection->connect_error);
 }
 echo "CONNECTION SUCCESSFUL!";
?>
</body>
</html>