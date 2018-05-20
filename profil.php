<?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=dondesang', 'root', '');
if(isset($_GET['Id']) AND $_GET['Id'] > 0) {
   $getid = intval($_GET['Id']);
   $requser = $bdd->prepare('SELECT * FROM donneur WHERE Id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>
<html>
   <head>
      <title>Profil</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Profil de <?php echo $userinfo['Nom']; ?></h2>
         <br /><br />
         Prenom = <?php echo $userinfo['Prenom']; ?>
         <br />
         Email = <?php echo $userinfo['Email']; ?>
         <br />
         <?php
         if(isset($_SESSION['Email']) AND $userinfo['Email'] == $_SESSION['Email']) {
         ?>
         <br />
         <a href="editionprofil.php">Editer mon profil <br><br></a>
         <a href="deconnexion.php">Se déconnecter <br> <br></a>
         <a href="rdv.php">Prendre un rendez-vous <br> <br></a>
         <?php
         }
         ?>
      </div>
   </body>
</html>
<?php   
}