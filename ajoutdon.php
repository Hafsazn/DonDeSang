<?php
//echo 'Le don a été ajouté';
$type = '';
   $duree= '';
   $salle = '';
   $date = '';
   $heure = '';
   $centre = '';
   $id='';
   
if(isset($_POST['Ajouter'])) {
    $id = htmlspecialchars($_POST['Id_Don']);
   $type = htmlspecialchars($_POST['Type']);
   $duree= htmlspecialchars($_POST['Duree']);
   $salle = htmlspecialchars($_POST['Salle']);
   $date = htmlspecialchars($_POST['Date']);
   $heure = htmlspecialchars($_POST['Heure']);
   $centre = htmlspecialchars($_POST['Centre']);
   if(!empty($_POST['Id_Don']) AND !empty($_POST['Type']) AND !empty($_POST['Duree']) AND !empty($_POST['Salle']) AND !empty($_POST['Date']) AND !empty($_POST['Heure']) AND !empty($_POST['Centre'])) {
            
                    include ('connexionBD.php');
            try{
                    // echo "hello";
                     //$bdd = new PDO('mysql:host=localhost;dbname = espace membre', 'root', '');
                 
                     $query = "INSERT INTO don (Id_Don, Type, Duree, Salle, Date, Heure, Centre) VALUES ('$id', '$type', '$duree', '$salle', '$date', '$heure', '$centre')";
                     //$query = "INSERT INTO donneur (Non, Prenon, CIN, Email, Mdp) VALUES ('zidani', 'hafid', 'HA5678', 'hafid@z.en', '123456')";
                     $bdd->exec($query);
                     echo "Ajout avec succes";
                     $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     header("Location:afficherdon.php");
            }
            catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
   }
   else {
     $erreur="veuillez remplir tous les champs svp !";
     echo $erreur;
    
   }
}
   
   ?>
