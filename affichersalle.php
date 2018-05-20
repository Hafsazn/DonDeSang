<!DOCTYPE html>
<?php include('AdminAcc.php');?>
<html>
<head>
 <title>Table with database</title>
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #B40404;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>
 <h2><center>Gestion des salles</center></h2>
 <table>
 <tr>
  <th>Numero</th> 
  <th>Capacite maximum</th> 
  <th>Type de don</th>
  <th>Actions</th>
 </tr>
 <?php
include ('connexionBD.php');
  // Check connection
  
  $sql = "SELECT * FROM salle";
  $result = $bdd->query($sql);
  $data = $result->fetchAll();
  for ($i=0;$i<count($data);$i++)
  {
    $numero=$data[$i]["Numero"];
    $capmax=$data[$i]["CapaciteMax"];
    $typedon=$data[$i]["TypeDon"];
    
    echo "<tr><td>$numero</td><td>$capmax</td><td>$typedon</td></tr>";
    echo "<td>";
    echo "<a href='supprimersalle.php?Numero=$numero' onclick='return confirm(\"Etes vous sur de vouloir supprimer ? \");' class='btn btn=danger'>Supprimer </a>";
    echo "<a href='' class='btn btn=danger'>Modifier</a>";
   
  }
  //if ($result->num_rows > 0) {
   // output data of each row
   /*while($row = $result->fetch()) {
    echo "<tr><td>" . $row["Numero"] . "</td><td>" . $row["CapaciteMax"] . "</td><td>"
. $row["TypeDon"]. "</td></td>";
echo "<td>";
    echo "<a href='supprimersalle.php?Numero=$numero' onclick='return confirm(\"Etes vous sur de vouloir supprimer ? \");' class='btn btn=danger'>Supprimer </a>";
    echo "<a href='' class='btn btn=danger'>Modifier</a>";
}*/
echo "</table>";

include('salle.php');

 ///else { echo "0 results"; }
//$bdd->close();
?>
</table>
</body>
</html>






