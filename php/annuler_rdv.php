
<?php
  session_start();
  $servername = "localhost";
    $username = "root";
    $pwd = "";
    $db= "pharmahome";
    // Create connection
    $conn = new mysqli($servername, $username, $pwd , $db);

$supp="DELETE FROM t_rdv WHERE id_rdv ='".$_POST['id_rdv']."'" ;
$conn->query($supp) ;

  ?> 
