<?php 


$servername = "localhost";
$username = "root";
$password = "";
$db="pharmahome";



// Create connection
$conn = new mysqli($servername, $username, $password , $db);



  $id = $_POST['id'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $date_n = $_POST['date_n'];
  $adresse = $_POST['adresse'];
  $mail = $_POST['mail'];
  $mail_t = $_POST['mail_t'];
  $ad_ph = $_POST['ad_ph'];
  $tel = $_POST['tel'];
  $mdp = $_POST['mdp'];
  $type= "client" ;



$query = "INSERT  INTO t_user (id,nom,prenom,date_n,adresse,mail,mail_t,ad_ph,tel) VALUES ('$id','$nom','$prenom','$date_n','$adresse','$mail','$mail_t','$ad_ph','$tel') "; 

$query1= "INSERT INTO t_auth (id,mdp,type) VALUES ('$id',($mdp),'$type')";
if ($conn->query($query1) === TRUE) 
{


if ($conn->query($query) === TRUE) 
{
	echo "<script type='text/javascript'>
                alert('Vous etes bien inscri');
                document.location.href='../index.php'; 
                </script>";
	}

else {
    echo "<script type='text/javascript'>
                alert('Erreur t_user');
                document.location.href='../index.php'; 
                </script>";
}


}
else echo"<script type='text/javascript'>
                alert('Erreur t_auth');
                document.location.href='../index.php'; 
                </script>";

 
$conn->close();

	
	

	


?>
