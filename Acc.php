  <?php
include ('connexion.php');
?>
  
  
  
  <!DOCTYPE html>
    <html>
    <title>Acceuil</title>
    <meta charset="utf-8"/>
    <head><link type="text/css" rel="stylesheet" href="Acc.css"/></head>
    <body>
      <form action="Acc.php" method="POST" >
       <div class="header"></div>
       
       <div id="form1" class="header">Email<br>
       <input placeholder="Entrez votre email" type="mail" name="mailconnect"/><br>
       </div>
       
         <div id="form2" class="header">Mot de passe <br>
         <input  placeholder="Entrez votre mdp" type="password" name="mdpconnect"/><br>
         </div>
         
         <input type="submit" class="Blogin" value="login" name="formconnexion"/>
       </form>
      <form  action="chercherville.php">
         <div class="bodyx">
            <div id="intro" class="bodyx"> Chercher un centre de don</div>
         </div>
         
         <div id="form3" class="bodyx">
            <input placeholder="Rechercher" type="text" id="cherchercentre" name="name1"/><br>
            <input type="submit" class="chercher" value="chercher par ville"/><br><br><br><br>
            <div id="intro2" class="bodyx">Pour plannifier vos dons <a href="inscription.php">Créer votre compte</a></div><br>
            
            
               
         </div>
      </form>
         
         
         
    </body> 
</html>