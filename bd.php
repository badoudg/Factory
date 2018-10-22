<!DOCTYPE html>
<html>
  <head>
  </head>

<body>

<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";
//Connection php *mysql

$conn = new PDO("mysql:host=$servername", $username, $password);

$conn->exec($sql);
    echo "Database created successfully<br>";





?>






  
   </body>
</html>
