<?php 


session_start();

$servername = "localhost";
$username = "root";
$pwd = "";
$db= "pharmahome";
$conn = new mysqli($servername, $username, $pwd , $db);


if(isset($_POST['input_s']))
  {
    $input_s = $_POST['input_s'];

    $servername = "localhost";
    $username = "root";
    $pwd = "";
    $db= "pharmahome";
    $conn = new mysqli($servername, $username, $pwd , $db);

    $medecin = mysqli_query($conn, "SELECT id_m , nom , prenom, adresse , spc FROM  t_med WHERE spc='".$input_s."'" );
    if(mysqli_num_rows($medecin)>0)            
    { 
      while ($doc = mysqli_fetch_assoc($medecin)) 
      {
        echo "<option value=".$doc['id_m'].">".$doc['nom']." ".$doc['prenom']." , ".$doc['adresse']."</option>";
      }
    }
  }
 
$conn->close();



?>