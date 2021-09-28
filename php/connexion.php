<?php
session_start();

    $servername = "localhost";
    $username = "root";
    $pwd = "";
    $db= "pharmahome";

    // Create connection
    $conn = new mysqli($servername, $username, $pwd , $db);

    
    $username= $_POST['id'] ;
    $password= $_POST['mdp'] ;
    

$query=" SELECT  id , mdp , photo , type FROM t_auth WHERE id='".$username."' " ;     
  $result = mysqli_query($conn, $query); 

    
    if(mysqli_num_rows($result)==0)
    {
         echo "<script type='text/javascript'>
                alert('Vous n avez pas de cmpte');
                document.location.href='../index.php';
                </script>";
    }
	 
    else 
        
            while ($info = mysqli_fetch_array($result))
        
    {
                
              
                
                
        if (($password != $info['mdp']) or ($password=="") )
            {   
                echo "<script type='text/javascript'>
                alert('mdp incorect');
                document.location.href='../index.php'; 
                </script>";
            
            }
        else 
            
    
    {


  
  $client=" SELECT  id , nom , prenom, mail , tel FROM t_user WHERE id='".$username."' " ;     
  $resultc = mysqli_query($conn, $client); 
  
  $medecin=" SELECT * FROM t_med WHERE id_m='".$username."' " ;     
  $resultm = mysqli_query($conn, $medecin); 

  // $phar=" SELECT  id , nom , prenom, mail , tel FROM t_ph WHERE id='".$username."' " ;     
  // $resultph = mysqli_query($conn, $query1); 


    if( $info['type']=="client")
    {
        if((mysqli_num_rows($resultc)>0))

            while ($row = mysqli_fetch_array($resultc))
        {
            $_SESSION['ID'] = $row['id'];
            $_SESSION['NOM'] = $row['nom'];
            $_SESSION['PRENOM'] = $row['prenom'];
            $_SESSION['MAIL'] = $row['mail'];
            $_SESSION['TEL'] = $row['tel'];
            $_SESSION['PHOTO'] = $info['photo'];
        } 
        
            header('Location: ../dashboard.php');
    }
  
else
    if($info['type']=="medecin") 
    if(mysqli_num_rows($resultm)>0)
    {
            while ($rowm = mysqli_fetch_array($resultm))
        {
            $_SESSION['ID'] = $rowm['id_m'];
            $_SESSION['NOM'] = $rowm['nom'];
            $_SESSION['PRENOM'] = $rowm['prenom'];
            $_SESSION['MAIL'] = $rowm['mail'];
            $_SESSION['TEL'] = $rowm['tel'];
            $_SESSION['ADRESSE'] = $rowm['adresse'];
            $_SESSION['TEL_C'] = $rowm['tel_c'];
            $_SESSION['SPC'] = $rowm['spc'];
            $_SESSION['PHOTO'] = $info['photo'];
        } 
        
            header('Location: ../dashboard_m.php');
    }
// else header('Location: ../../pharmahome');
     }
    }

?>