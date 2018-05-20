<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Don</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Don.css" />
    <script src="main.js"></script>
</head>
<body>
    <div>
        <label for="titre"></label>
    </div>
    <form method="post" action="ajoutdon.php">
        
        <label for="ajouterDon"><br>Ajouter un don<br></label><br> <br>
        Id :
        <input type="text" name="Id_Don"><br><br>
        Type :
        <input type="text" name="Type"><br><br>
         Durée ( en min ) :
        <input type="text" name="Duree" ><br><br>
         Salle :
        <input type="text" name= "Salle"><br><br>
         Date:
        <input type="date" name="Date"><br><br>
         Heure :
        <input type="time" name="Heure"><br><br>
         Centre :
        <input type="text" name="Centre"><br><br>
        
        <input type="submit" name="Ajouter" value="Ajouter">
    </form>
        
</body>
</html>