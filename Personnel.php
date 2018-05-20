<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Personnel.css" />
    <script src="main.js"></script>
</head>
<body>
    <div>
        <label for="titre"> <br> Gestion du personnel <br></label>
    </div>
    <div>
        <form method="post" action="ajoutpersonnel.php">
            <label for="ajouterPerso">Ajouter personnel<br></label><br>
            Id :
                <input type="text" name="Id_personnel"><br>
            
                Nom :
                <input type="text" name="Nom"><br>
                Prénom :
                <input type="text" name="Prenom"><br>
                Mail :
                <input type="email" name="Email"><br>
                Mdp :
                <input type="password" name="Mdp"><br>
                Sexe :
                <td>
                        <select name="Sexe">
                            <option>Homme</option>
                            <option>Femme</option>
                        </select>
                    </td><br>
                Poste :
                    <td>
                        <select name="Poste">
                            <option>Médecin</option>
                            <option>Infermier</option>
                            <option>Stagiaire</option>
                        </select>
                    </td><br>
                Droits :
                    <td>
                        <select name="Droit">
                            <option>Personnel</option>
                            <option>Lecture</option>
                        </select>
                    </td><br>
                <input type="submit" name="Ajouter" value="Ajouter">

                
        </form>
        


    </div>
</body>
</html>