<!DOCTYPE html>
<html>
<body>

<?php
//Ne pas executer le bloc si la variable n'est pas renseigné
if(isset($_POST['Prenom']) AND isset($_POST['Nom'])AND isset($_POST['Adresse'])
	AND isset($_POST['Telephone'])AND isset($_POST['Datedenaissance'])AND isset($_POST['Formation'])
	AND isset($_POST['Formation1'])AND isset ($_POST['Formation2'])AND isset($_POST['EP'])
	AND isset($_POST['EP1'])AND isset($_POST['Competences'])AND isset($_POST['CentresInteret']))
{

$p=$_POST['Prenom'];

$n=$_POST['Nom'];

$a=$_POST['Adresse'];

$t=$_POST['Telephone'];

$m=$_POST['Email'];

$d=$_POST['Datedenaissance'];

$f=$_POST['Formation'];

$f1=$_POST['Formation1'];

$f2=$_POST['Formation2'];

$e=$_POST['EP'];

$e1=$_POST['EP1'];

$c=$_POST['Competences'];

$c1=$_POST['CentresInteret'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

//Connection php *mysql

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


$sql = "INSERT INTO Users(Prenom, Nom, Adresse, Telephone,Email,Datedenaissance,Formation,Formation1,Formation2,EP,EP1,Competences,CentresInteret)
VALUES ('$p','$n','$a','$t','$m','$d','$f','$f1','$f2','$e','$e1','$c','$c1')";

// use exec() because no results are returned
    $conn->exec($sql);

    echo "New record created successfully";

    

$reponse =$conn->query("SELECT * FROM Users");

$donnees = $reponse->fetch();

//debugg

var_dump($donnees);




}





?>





</body>
</html