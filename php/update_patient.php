<?php 




session_start();
$ID= $_SESSION['ID'];

	$servername = "localhost";
    $username = "root";
    $pwd = "";
    $db= "pharmahome";

    // Create connection
    $conn = new mysqli($servername, $username, $pwd , $db);

    $query=" SELECT  * FROM t_user WHERE id='".$ID."' " ;     
  $result = mysqli_query($conn, $query); 
    
    if(mysqli_num_rows($result)>0)
    {
            while ($row = mysqli_fetch_array($result))
        {
            $_SESSION['NOM'] = $row['nom'];
            $_SESSION['PRENOM'] = $row['prenom'];
            $_SESSION['DATE_N'] = $row['date_n'];
            $_SESSION['ADRESSE'] = $row['adresse'];
            $_SESSION['MAIL'] = $row['mail'];
            $_SESSION['MAIL_T'] = $row['mail_t'];
            $_SESSION['AD_PH'] = $row['ad_ph'];
            $_SESSION['TEL'] = $row['tel'];
        } 
    }


$NOM= $_SESSION['NOM'];
$PRENOM= $_SESSION['PRENOM'];
$DATE_N= $_SESSION['DATE_N'];
$ADRESSE= $_SESSION['ADRESSE'];
$MAIL=$_SESSION['MAIL'] ;
$MAIL_T= $_SESSION['MAIL_T'];
$AD_PH= $_SESSION['AD_PH'];
$TEL=$_SESSION['TEL'] ;
	



if($_POST['nom']!="")
	$nom = $_POST['nom'];
else
	$nom=$NOM;
if($_POST['prenom']!="")
	$prenom = $_POST['prenom'];
else
	$prenom=$PRENOM;
if($_POST['adresse']!="")
	$adresse = $_POST['adresse'];
else
	$adresse=$ADRESSE;
if($_POST['mail']!="")
	$mail = $_POST['mail'];
else
	$mail=$MAIL;
if($_POST['mail_t']!="")
	$mail_t = $_POST['mail_t'];
else
	$mail_t=$MAIL_T;
if($_POST['ad_ph']!="")
	$ad_ph = $_POST['ad_ph'];
else
	$ad_ph=$AD_PH;
if($_POST['tel']!="")
	$tel = $_POST['tel'];
else
	$tel=$TEL;

 

$requete = "UPDATE t_user SET nom = '".$nom."' , prenom = '".$prenom."' , adresse = '".$adresse."' , mail = '".$mail."' , mail_t = '".$mail_t."' , ad_ph = '".$ad_ph."' , tel = '".$tel."' WHERE id =".$ID;


if ($conn->query($requete) === TRUE) 
{
	echo "<script type='text/javascript'>
                alert('profil mis a jour');
                document.location.href='../dashboard.php';
                </script>";
	}

else {
    echo "<script type='text/javascript'>
                alert('Erreur ');
                document.location.href='../dashboard.php';

                </script>";
}



?>

