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
    
     <form action="rdv.php" method="POST">
       <table width="450px" class="table1" align="center">
         <label for="RV"> Choisir mon rendez-vous </label><br>
            <tr>
                <td>
                    <label for="TypeDon">Type de don :</label>
                </td>
                <td>
                    <select>
                        <option>Type de don</option>
                        <option>Sang</option>
                        <option>Plasma</option>
                        <option>Plaquettes</option>
                    </select>
                </td>
            </tr> 
        <tr>
            <td>
                <label>Date :</label>
            </td>
            <td>
                <input type="date">
            </td>
        </tr><br>
        <tr>
                <td>
                    <label>Heure :</label>
                </td>
                <td>
                    <input type="time">
                </td>
            </tr>
        <tr>
            <td>
                <input type="submit" name="Valider" value="valider mon rendez-vous" class="valider">
            </td>
        </tr>
        </table>
     </form>

     <form>
        <table width="450px" class="table2" align="center">
            <label for="centre"> Choisir mon centre de don </label><br>
           <tr>
               <td>
                   <input type="text">
               </td>
           </tr>
           <tr>
               <td>
                   <input type="submit" name="Valider" value="Trouver mon centre" class="valider">
               </td>
           </tr>
        </table>
           
        </form>

        <form>
            <label for="tableau"> Mes rendez-vous prévus</label><br>
        </form>
        


    
</body>
</html>