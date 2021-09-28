<?php
$id_rdv=$_POST['id_rdv'];
echo "<script type='text/javascript'>
                alert(".$id_rdv.");
                </script>";
$id_m=$_POST['id_m'];
$new_d=$_POST['new_d']; 
$new_h=$_POST['new_h'];
session_start();
  $servername = "localhost";
    $username = "root";
    $pwd = "";
    $db= "pharmahome";
    // Create connection
    $conn = new mysqli($servername, $username, $pwd , $db);

 
$dispo="SELECT id_rdv , id_m , date_rdv, heure_rdv FROM t_rdv WHERE date_rdv='".$new_d."' and id_m='".$id_m."'";
	$x=0;


 

$modif="UPDATE t_rdv SET date_rdv = '".$new_d."' , heure_rdv='".$new_h."' , etat='' WHERE id_rdv='".$id_rdv."'" ;



$result = mysqli_query($conn, $dispo);

if(mysqli_num_rows($result)>0)            
    {
    	while ($heure_new = mysqli_fetch_assoc($result)) 
      {
    	if($new_h == $heure_new['heure_rdv'])
		{
			$x++;
		}
      }
      if($x==0)
      {
      	$conn->query($modif) ;
      	echo "oui" ;
      }
      else 
      	echo "non";
	}
else
	{
		$conn->query($modif) ;
		echo "oui" ;
	} 

 
$conn->close();
?>
