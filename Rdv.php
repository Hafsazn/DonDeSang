<?php
 echo "Votre demande est en cours de traitement";



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Rdv.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="header"> <h1><center>Prendre un rendez-vous</center></h1></div>

    
    <label for="Titre">Espace donneur</label>
    
     <form method="post" action="ajoutrdv.php" >
       
         <tr>
            <td><label><br><br><br><br><br><br>Ajouter un horaire</label> </td><br>
            CIN : <input type="text" name="CIN"><br>
            Type de don :
                <td>
                    <select name="Type">
                        <option>Sang</option>
                        <option>Plasma</option>
                        <option>Plaquettes</option>
                    </select>
                </td><br>
                Groupe sanguin :
                <td>
                    <select name="GS">
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                        <option>O+</option>
                        <option>O-</option>
                    </select>
                </td><br>
            Date :
            <input type="date" name="Date"><br>
            
           
            Heure : <input type="time" name="Heure"><br>
            
        </tr>
        <tr>
            <td>
                <input type="submit" name="Valider" value="valider mon rendez-vous" class="valider">
            </td>
        </tr>
        
     </form>

     
        


    
</body>
</html>