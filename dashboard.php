<?php
session_start();
if(!isset($_SESSION['ID']))
{
  session_unset();
  session_destroy();
  header('Location:../pharmahome');

}
else
{
$ID= $_SESSION['ID'];
$NOM= $_SESSION['NOM'];
$PHOTO= $_SESSION['PHOTO'];
$PRENOM= $_SESSION['PRENOM'];
$MAIL=$_SESSION['MAIL'] ;
$TEL=$_SESSION['TEL'] ;


$servername = "localhost";
$username = "root";
$password = "";
$db="pharmahome";

// Create connection
$conn = new mysqli($servername, $username, $password , $db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>dashboard pharmahome</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
<!--    <link rel="stylesheet" href="css/registerstyle.css">-->
    <link rel="stylesheet" href="css/infosclient.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/modifstyle.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/dashstyle.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/medstyle.css?v=<?php echo time(); ?>"> 
    <link rel="stylesheet" href="css/rdv_client.css?v=<?php echo time(); ?>">    
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/inscristyle.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/themes/dark.css">

  <script src="https://kit.fontawesome.com/a81368914c.js"></script>

</head>

<body>
    <div class=" cover">
        <div class="navbar">
            <a href="#" id="acc"><h2 class="logo"><span style="color:#02DC54">Pharma</span>home</h2></a>
            <a href="#">
                <a href="#" id="contact"><h4>contact</h4></a>
            </a>
            
        </div>
        <div class=" row mainpage">
            <div class=" col-md-2 sidebar" id="sidebar">
                <div class="row user">
                    <div class="col-sm-5">
                        <img src="images/<?php  echo $PHOTO; ?>" alt="photo de profil">
                    </div>
                    <div class="col-sm-6">
                        <a href="#" id="acc1" style="color:#333"><h4><?php  echo $NOM; ?> <?php  echo $PRENOM; ?></h4></a>
                        

                    </div>
                </div>
                   <div class="row">
                    <div class="col-md-12">
                        <div class="edit">
                            <a href="#" id="edit">Edit profile</a>
                        </div>
                    </div>
                </div>
                <div class=" row menu" id="1">
                    <div class="col-sm-12">
                           <a href="#" id="rdv">
                            <h5><i class=" fas fa-handshake"></i>RDV medecin</h5>
                        </a></div>
                </div>
                <div class=" row menu" id="5">
                    <div class="col-sm-12">
                           <a href="#" id="suivi_rdv">
                            <h5><i class=" fas fa-handshake"></i>Suivi RDV</h5>
                        </a></div>
                </div>
                <div class=" row menu" id="2">
                    <div class="col-sm-12"><a href="#" id="ord">
                            <h5><i class="fas fa-clinic-medical"></i>ordonnance</h5>
                        </a></div>
                </div>
                <div class=" row menu" id="3">
                    <div class="col-sm-12"><a href="#" id="certif">
                            <h5><i class="fas fa-lock"></i>Certificat</h5>
                        </a></div>
                </div>
                <div class=" row menu" id="4">
                    
                    <div class="col-sm-12"><a href="#" id="pharmacie">
                            <h5><i class="fas fa-user-md"></i>Pharmacie</h5>
                        </a></div>
                </div>
                
                <div class="row">
                    <div class="col-md-12 deconnecter">
                        <div class="out">
                            <a href="#" id="deco">Deconnecter</a>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-md-10 content">
                <div class="coveri">
  <div class="row">
            <div class="col-sm-12 info">
                <h2>ID client : <?php  echo $ID; ?></h2>
            </div>
</div>
        <div class="row">
            <div class="col-sm-4">
               <div class="coverbox">
                   <div class="box">
                     <h2>nom et prenom <i class="far fa-user"></i></h2>
                     <p><?php  echo $NOM; ?> <?php  echo $PRENOM; ?></p>
                   </div>
               </div> 
            </div>
            <div class="col-sm-4">
               <div class="coverbox">
                   <div class="box">
                       <h2>E-mail<i class="far fa-envelope-open"></i></h2>
                     <p><?php  echo $MAIL; ?></p> 
                   </div>
               </div> 
            </div>
            <div class="col-sm-4">
               <div class="coverbox">
                   <div class="box">
                        <h2>numero tel <i class="fas fa-mobile-alt"></i></h2>
                     <p><?php  echo $TEL; ?></p> 
                   </div>
               </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="rdvbox" id="r1">
                    <h3>RDV en attente <i class="fas fa-notes-medical"></i></h3>
                <p>you have none</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="rdvbox" id="r2">
                    <h3>medecin en attente <i class="fas fa-user-nurse"></i></h3>
                <p>you have none</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 ">
                
            </div>
        </div>
    </div>      
            </div>
        </div>
    </div>
    <script src="javascript/jquery-3.5.1.min.js"></script>
    <script src="javascript/dashjs.js"></script>
    <script src="javascript/maininscri.js"></script>
    <script src="javascript/datedropper.pro.min.js"></script> 
    

</body>
</html>
<?php 
}
?>