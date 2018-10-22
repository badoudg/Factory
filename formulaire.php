<!DOCTYPE html>
<html>
  <head>
  	<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
  
  	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  </head>
  
  <body>

<div class="container-fluid">
  <h2>Editez votre profil</h2>

<!-- Colonne Edit your profile -->
<div class="row"> 
	<div class="col-sm-3">
    <div class="row">
    <label class="control-label col-sm-2"></label><img src="IMAGE-DE-PHOTO-DE-PROFIL-VIDE.png" class="img-circle" alt="profil" width="100" height="100">
  </div>
    <div class="col-sm-3">
        <input type="password" class="" id="username" placeholder="Enter password">
        </div>
    </div>

<!--Colonne Personal info -->
  <div class="col-sm-9">	

    <form class="form-horizontal"  method="post" action="cv.php">
 	 	<div class="alert alert-info"><span class="glyphicon glyphicon-envelope""></span>
    	<strong>Info!</strong> This is an <strong>.alert</strong>. Use to show important messages to the user
  	</div>
      <h3>Informations Personnelles</h3>

  <div class="row">
      
    <!-- 1ere ligne -->
    <div class="form-group">
      <label class="control-label col-sm-2 for="Prénom">Prénom:</label>
  
      <div class="col-sm-9">
      <input type="text" class="form-control" name="Prenom" placeholder="Entrer votre prénom ">

      </div>
    </div>
     
     <!-- 2eme ligne -->
    <div class="form-group">
      <label class="control-label col-sm-2 for="Nom">Nom:</label>
  
      <div class="col-sm-9">
      <input type="text" class="form-control" name="Nom" placeholder="Entrer votre nom">
      </div>
    </div>
      
      <!-- 3eme ligne -->
    <div class="form-group">
      <label class="control-label col-sm-2 for="Adresse">Adresse:</label>
  
      <div class="col-sm-9">
      <input type="text" class="form-control" name="Adresse" placeholder="Entrer votre adresse">
      </div>
    </div>

      <!-- 4éme ligne -->
    <div class="form-group">
        <label class="control-label col-sm-2 for="Téléphone">Téléphone:</label>

        <div class="col-sm-9">
        <input type="number" class="form-control" name="Telephone" placeholder="Entrer votre numéro de téléphone">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2 for="Email">Email:</label>

        <div class="col-sm-9">
        <input type="email" class="form-control" name="Email" placeholder="Entrer votre email">
        </div>
    </div>





      <!-- 5éme ligne -->
      <div class="form-group">
        <label class="control-label col-sm-2 for="Date de naissance">Date de naissance:</label>

        <div class="col-sm-9">
        <input type="date" class="form-control" name="Datedenaissance" placeholder="date de naissance">
        </div>
      </div>

      <!-- 6éme ligne --> 
      <div class="form-group">
        <label class="control-label col-sm-2 for="Formation">Formation:</label>

        <div class="col-sm-9">
        <input type="text" class="form-control" name="Formation" placeholder="formation">
        </div>
      </div>


      <div class="form-group">
        <label class="control-label col-sm-2 for="Formation1">Formation1:</label>

        <div class="col-sm-9">
        <input type="text" class="form-control" name="Formation1" placeholder="Renseigner votre formation">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2 for="Formation1">Formation2:</label>

        <div class="col-sm-9">
        <input type="text" class="form-control" name="Formation2" placeholder="Renseigner vos formations si tel est le cas">
        </div>
      </div>

  
        <!-- 7éme ligne -->     
      <div class="form-group">
        <label class="control-label col-sm-2 for="Experiences professionelles:">Expèriences professionelles:</label>

        <div class="col-sm-9">
        <input type="text" class="form-control" name="EP" placeholder="Renseigner votre expèrience professionelle">
        </div>
      </div>

       <div class="form-group">
        <label class="control-label col-sm-2 for="Experiences professionelles1:">Expèriences professionelles1:</label>

        <div class="col-sm-9">
        <input type="text" class="form-control" name="EP1" placeholder="Renseigner votre expèrience professionelle">
        </div>
      </div>

      <!-- 8éme ligne -->
      <div class="form-group">
        <label class="control-label col-sm-2 for="Compétences">Compétences:</label>

        <div class="col-sm-9">
        <input type="text" class="form-control" name="Competences" placeholder="Vos compétences">
        </div>
      </div> 


      <div class="form-group">
        <label class="control-label col-sm-2 for="CentresInteret">Centres d’intérêt:</label>

        <div class="col-sm-9">
        <input type="text" class="form-control" name="CentresInteret" placeholder="Centres d’intérêt">
        </div>
      </div> 


      <!-- Save  changes -->
      <div class="form-group">
        <label class="control-label col-sm-2"></label>

        <div class="col-sm-9">
          <button type="submit" class="btn btn-primary">Save changes</button>
          <button type="" class="btn btn-default">Cancel</button>
        </div>
        
      </div>
        </form>
    </div> 

  </div>

 </div>   

</div>

        




         
   
			
</div>	
</body>
</html>
