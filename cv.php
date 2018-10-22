<!DOCTYPE html>
<html>
  <head>
  	
	<link rel="stylesheet" href="style.css" />
  	<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
  	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faire un cv en ligne</title>
  </head>
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

    //echo "New record created successfully";

    

$reponse =$conn->query("SELECT * FROM Users");

$donnees = $reponse->fetch();

//debugg

//var_dump($donnees);
while ($donnees)

{

?>
<div class="container">
		<div class="row">
<h2 class="text-center"><strong><?php echo $donnees['Prenom']; ?></strong></h2>

</div>
				<!-- Détails -->

		<div class="panel panel-primary">
  		<div class="panel-heading"><h4>Détails</h4></div>
  		
  			<div class="panel-body">
  				<div class="row">
					<div class="col-sm-4">
  						<p><strong>Adresse</strong></p>
  					</div>
  					<div class="col-sm-6">
  						<p><?php echo $donnees['Adresse']; ?></p>
  						
  					</div>
  					<div class="col-sm-2">
  						<img src="img/pp.jpg" class="img-thumbnail img-responsive" alt="photo">
  					</div>
  				</div>	

  				<div class="row">
					<div class="col-sm-4">
  					<strong>Téléphone</strong></div>
  					<div class="col-sm-6"><?php echo $donnees['Telephone']; ?></div>
  				</div>	

  				<div class="row">
					<div class="col-sm-4">
  					<strong>Email</strong></div>
  					<div class="col-sm-6"><?php echo $donnees['Email']; ?></div>
  				</div>	
  					

				<div class="row">
					<div class="col-sm-4">
  					<strong>Date de naissance</strong></div>
  					<div class="col-sm-6"><?php echo $donnees['Datedenaissance']; ?></div>
  				</div>	
  					
  					<div class="col-sm-3">
  						<img src="">
  					</div>
  					</div>
  			</div>




	

<!-- Formations -->
		<div class="panel panel-primary"">
  		<div class="panel-heading"><h4>Formations</h4></div>
  		
  			<div class="panel-body">
  				<div class="row">
  					<div class="col-sm-4">
  						<p><strong>Diplomes obtenus</strong></p>
  					</div>
  					<div class="col-sm-6">
  						<p><strong><?php echo $donnees['Formation']; ?></strong></p>
						
  					</div>
  				</div>
  				<div class="row">
  					<div class="col-sm-4">
  						<p><strong>Diplomes obtenus</strong></p>
  					</div>
  					<div class="col-sm-6">
  						<p><strong><?php echo $donnees['Formation1']; ?></strong></p>
						
  					</div>
  				</div>
			</div>

		</div>

	
<!-- Experiences -->


		<div class="panel panel-primary"">
  		<div class="panel-heading"><h4>Expèriences Professionnelles</h4></div>
  		
  			<div class="panel-body">
  				<div class="row">
  					<div class="col-sm-4">
  						<p><strong></strong></p>
  					</div>
  					<div class="col-sm-6">
  						<p><strong><?php echo $donnees['EP'];?></strong></p>
						
					</div>
				</div>

			
				<div class="row">
  					<div class="col-sm-4">
  						<p><strong></strong></p>
  					</div>
  					<div class="col-sm-6">
  						<p><strong><?php echo $donnees['EP1']; ?></strong></p>
				
				</div>

			</div>
		</div>

<!-- Compétences -->

		<div class="panel panel-primary"">
  		<div class="panel-heading"><h4>Compétences</h4></div>
  		
  			<div class="panel-body">
  				<div class="row">
  					<div class="col-sm-4">
  						<p><strong><?php echo $donnees['Competences'];?></strong></p>
  					</div>
  					<div class="col-sm-6"><p><strong><?php echo $donnees['Competences'];?></strong></p>
  						<p class="text-muted"></p>
						
					</div>
				</div>

			
				<div class="row">
  					<div class="col-sm-4">
  						<p><strong></strong></p>
  					</div>
  					<div class="col-sm-6">
  					<p class="text-muted"></p>	
					</div>
				</div>

				
				<div class="row">
  					<div class="col-sm-4">
  						<p><strong></strong></p>
  					</div>
  					<div class="col-sm-6">
  					<p class="text-muted"></p>	
					</div>
				</div>

				<div class="row">
  					<div class="col-sm-4">
  						<p><strong></strong></p>
  					</div>
  					<div class="col-sm-6">
  					<p class="text-muted"></p>	
					</div>
				</div>

			</div>

		</div>



		<div class="panel panel-primary"">
  		<div class="panel-heading"><h4>Centre d'intéret</h4></div>
  		
  			<div class="panel-body">
  				<div class="row">
  					<div class="col-sm-4"><strong><?php echo $donnees['CentresInteret'];?></strong>
  						</div>
  				</div>
			</div>
		</div>
		</div>



<?php
}



}





?>
	
		
		


</body>