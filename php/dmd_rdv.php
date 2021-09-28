<?php 


session_start();

$servername = "localhost";
$username = "root";
$pwd = "";
$db= "pharmahome";
$conn = new mysqli($servername, $username, $pwd , $db);

$x=0;
$date_rdv=$_POST['date_rdv']; 
$heure_rdv=$_POST['heure_rdv']; 
$id_m=$_POST['id_m'];
$rmq=$_POST['rmq']; 

$query = "INSERT  INTO t_rdv (id_c ,id_m, date_rdv, heure_rdv ,rmq ) 
		  VALUES ( '".$_SESSION['ID']."','$id_m','$date_rdv','$heure_rdv','$rmq' )";


$dispo_h="SELECT id_m , date_rdv, heure_rdv FROM t_rdv WHERE id_m='".$id_m."' and date_rdv='".$date_rdv."'";
$result = mysqli_query($conn, $dispo_h);

if(mysqli_num_rows($result)>0)            
    {
    	while ($heure = mysqli_fetch_assoc($result)) 
      {
    	if($heure_rdv == $heure['heure_rdv'])
		{
			$x++;
		}
      }
      if($x==0)
      {
      	$conn->query($query) ;
        echo "oui" ;
      }
      else 
        echo "non";
	}
else
	{
		$conn->query($query) ;
    echo "oui" ;
	} 

 
$conn->close();



?>