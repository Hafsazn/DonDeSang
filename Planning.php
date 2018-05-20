<!DOCTYPE html>
    
    <?php include ('connexionBD.php');
    $query = $bdd->prepare("SELECT * FROM personnel WHILE Prenom = ?");
    //$personnel= htmlspecialchars($_POST['Personnel']);
    $rslt= mysqli_query($bdd, $query);
    ?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Planning.css" />
    <script src="main.js"></script>
</head>
<body>
    <form id="Planning" method = "post" action="ajoutplanning.php"  >
        <tr>
            <td><label>Afficher un planning</label> </td><br>
                <td>
                    <select method= "post" name="Personnel">
                        <?php
                           while ($row = mysqli_fetch_array($rslt)):;
                        ?>
                        <?php echo $row[1];?>
                        <?php endwhile;?>
                       
                    </select>
                </td><br>
                <a href="afficherplanning.php">Afficher <br><br></a>
            
            
        </tr>
    
    
    
        <tr>
            <td><label>Ajouter un horaire</label> </td><br>
         Id : <input type="text" name="Id_planning"><br>

            Date :
            <input type="date" name="Date"><br>
            Salle :
                <td>
                    <select name="Salle">
                        <option>Salle A</option>
                        <option>Salle B</option>
                        <option>Salle C</option>
                    </select>
                </td><br>
            Type :
                <td>
                    <select name="Type">
                        <option>Sang</option>
                        <option>Plasma</option>
                        <option>Plaquettes</option>
                    </select>
                </td><br>
            
            Heure de : <input type="time" name="Heure_de"><br>
            à : <input type="time" name="Heure_a"><br>
            Personnel :<br>
            <td>
                    <select name="Personnel">
                        <option>Nom1</option>
                        <option>Nom2</option>
                        <option>Nom3</option>
                    </select>
                </td><br>
        </tr>
   <input type="submit" name="Ajouter" value="Ajouter">
   
    </form>
    
    
</body>
</html>