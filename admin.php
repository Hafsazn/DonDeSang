<?php

if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = ($_POST['mdpconnect']);
   //echo $mailconnect;
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
     if ($_POST['mailconnect'] == "admin@gmail.com" AND $_POST['mdpconnect'] == "admin"){
        
       // echo "Coucou";

         header("Location: AdminAcc.php");
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}



?>

<html>
   <head>
      <title>Connexion pou Admin</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Connexion de l'Admin</h2>
         <br /><br />
         <form method="POST" action="admin.php">
            <input type="email" name="mailconnect" placeholder="Mail" />
            <input type="password" name="mdpconnect" placeholder="Mot de passe" />
            <br /><br />
            <input type="submit" name="formconnexion" value="Se connecter !" />
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      </div>
   </body>
</html