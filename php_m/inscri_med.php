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
  $adresse = $_POST['adresse'];
  $tel = $_POST['tel'];
  $tel_c = $_POST['tel_c'];
  $mail = $_POST['mail'];
  $spc = $_POST['spc'];
  $id_ph = $_POST['id_ph'];
  $mdp = $_POST['mdp'];
  $type= "medecin" ;



$query = "INSERT  INTO t_med (id_m,nom,prenom,spc,adresse,tel,tel_c,mail,id_ph) VALUES ('$id','$nom','$prenom','$spc','$adresse','$tel', '$tel_c' ,'$mail','$id_ph') "; 

$query1= "INSERT INTO t_auth (id,mdp,type) VALUES ('$id','$mdp','$type')";
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
                alert('Erreur t_med');
                 
                </script>";
}


}
else echo"<script type='text/javascript'>
                alert('Erreur t_auth');
                document.location.href='../index.php'; 
                </script>";

 
$conn->close();

	
	

	


?>
