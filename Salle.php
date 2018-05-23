
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Salle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Salle.css" />
    <script src="main.js"></script>
</head>

<body>
        <div>
            <label for="titre"></label>
        </div>
        <form method="post" action="ajoutsalle.php">
            <label for="ajouterSalle"><br>Ajouter salle <br></label><br> 
            Numero :
            <input type="text" name="Numero"><br>
            Capacité max :
            <input type="text" name="CapaciteMax"><br>

            <tr>
                <td>
                    <label for="DonPoss">Type de don :</label>
                </td>
                <td>
                    <select name="TypeDon">
                        <option>Sang</option>
                        <option>Plasma</option>
                        <option>Plaquettes</option>
                    </select>
                </td>
            </tr> <br>

            <input type="submit" name="Ajouter" value="Ajouter">
        </form>          
</body>
</html>