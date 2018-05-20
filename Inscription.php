<?php


$nom='';
$prenom='';
$cin='';
$email='';
$verifemail='';
$mdp='';
$verifmdp='';



if(isset($_POST['Valider'])) {
   //$id = htmlspecialchars($_POST['Id']);
   $nom = htmlspecialchars($_POST['Nom']);
   $prenom = htmlspecialchars($_POST['Prenom']);
   $cin = htmlspecialchars($_POST['CIN']);
   $email = htmlspecialchars($_POST['Email']);
   $verifemail = htmlspecialchars($_POST['verifemail']);
   $mdp = ($_POST['Mdp']);
   $verifmdp = ($_POST['verifmdp']);
   if(!empty($_POST['Nom']) AND !empty($_POST['Prenom']) AND !empty($_POST['CIN']) AND !empty($_POST['Email']) AND !empty($_POST['verifemail']) AND !empty($_POST['Mdp']) AND !empty($_POST['verifmdp'])) {
     
            if($email == $verifemail) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
               include ('ConnexionBD.php');
               $reqmail = $bdd->prepare("SELECT * FROM donneur WHERE Email = $email");
               $reqmail->execute(array($email));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($mdp == $verifmdp) {
                    // echo "hello";
                     //$bdd = new PDO('mysql:host=localhost;dbname = espace membre', 'root', '');
                     
                     $query = "INSERT INTO donneur (Nom, Prenom, CIN, Email, Mdp) VALUES ('$nom', '$prenom', '$cin', '$email', '$mdp')";
                     //$query = "INSERT INTO donneur (Non, Prenon, CIN, Email, Mdp) VALUES ('zidani', 'hafid', 'HA5678', 'hafid@z.en', '123456')";
                     $bdd->exec($query);
                     echo "Ajout avec succes";
                     $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                                    }
                                  
                    
                   else {
                     $erreur = "Vos mots de pass ne se correspondent pas !";
							
                  }
               } else {
                  $erreur = "Votre adresse mail est déjà utilisée !";
               }
            } else {
               $erreur = " Adresse mail n'est pas valide !";
            }
         } else {
            $erreur = "Vos adresses mail ne correspondent pas !";
         }
      } 
   else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
   

?>



<!DOCTYPE html>
	<html>
		<head>
			<title> Inscription </title>
			
		</head>

<body>
    <div class="inscription">
         <form method="post" action="#">
		<h1 align="center">S'inscrire</h1>
		

		<table class="table" align="center">
		

		<tr>
			<td>
				<label for="Nom">Nom :</label>
			</td>
			<td>
				<input type="text" id="Nom" name="Nom" maxlength="50" size="30" placeholder="Entrer votre nom">
			</td>
		</tr>
        
        <tr>
			<td>
				<label for="Prenom">Prenom: </label>
			</td>
			<td>
				<input type="text" id="Prenom" name="Prenom" maxlength="50" size="30" placeholder="Entrer votre prénom">
			</td>
		</tr>
        
        
        <tr>
        <td>
		<label for="CIN">CIN:</label>
			</td>
			<td>
				<input type="text" id="CIN" name="CIN" maxlength="50" size="30" placeholder="Entrez votre CIN">
			</td>
		</tr>


        

     <tr>
        <td>
		<label for="Email">Email:</label>
			</td>
			<td>
				<input type="text" id="Email" name="Email" maxlength="50" size="30" placeholder="Exemple@gmail.com">
			</td>
		</tr>
	  
	  
	  
	   <tr>
        <td>
		<label for="verifmail">vérification de l'Email:</label>
			</td>
			<td>
				<input type="text" id="verifemail" name="verifemail" maxlength="50" size="30" placeholder="Exemple@gmail.com">
			</td>
		</tr>



		
		<tr>
			<td>
				<label for=password>Mot de passe:</label>
			</td>
			<td>
				<input type="text" id="Mdp" name="Mdp" maxlength="50" size="30" placeholder="******">
			</td>
		</tr>	
		<tr>
            <tr>
			<td>
				<label for=VérifPassword>Vérification du mot de passe:</label>
			</td>
			<td>
				<input type="text" id= "verifmdp" name="verifmdp" maxlength="50" size="30" placeholder="******">
			</td>
		</tr>	
		<tr>
			<td>
				<input type="submit" name="Valider" value="Valider" class="valider">
			
			</td>
		</tr>

					
		</table>

	
	</form>
			<?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
    </div>
</body>
</html>