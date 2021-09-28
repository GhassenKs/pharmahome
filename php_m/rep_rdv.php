<?php
session_start();
  $servername = "localhost";
    $username = "root";
    $pwd = "";
    $db= "pharmahome";
    // Create connection
    $conn = new mysqli($servername, $username, $pwd , $db);

$id_rdv=$_POST['id_rdv'];

$query = " UPDATE t_rdv SET etat='non' WHERE id_rdv='".$id_rdv."' ";
$conn->query($query) ;
?>

