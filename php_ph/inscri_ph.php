<?php 
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db="pharmahome";



// Create connection
$conn = new mysqli($servername, $username, $password , $db);

$id_ph=$_POST['id_ph'];
$nom_ph=$_POST['nom_ph'];
$adresse_ph=$_POST['adresse_ph'];
$nom_p=$_POST['nom_p'];
$tel_ph=$_POST['tel_ph'];
$mail_ph=$_POST['mail_ph'];
$mdp=$_POST['mdp'];
$type= "pharmacien" ;



$query = "INSERT  INTO t_ph(id_ph,nom_ph,adresse_ph,nom_prop,tel_ph,mail_ph) VALUES ('$id_ph','$nom_ph','$adresse_ph','$nom_p','$tel_ph','$mail_ph') "; 

$query1= "INSERT INTO t_auth (id,mdp,type) VALUES ('$id_ph',($mdp),'$type')";
if ($conn->query($query1) === TRUE) 
{


if ($conn->query($query) === TRUE) 
{
	echo "TRUE";
  $_SESSION['ID'] = $id_ph;
	}

else {
    echo "FALSE";
}


}
else echo"FALSE";

 
$conn->close();

	
	

	


?>
