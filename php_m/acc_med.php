<?php
session_start();

$ID= $_SESSION['ID'];
$NOM= $_SESSION['NOM'];
$PHOTO= $_SESSION['PHOTO'];
$PRENOM= $_SESSION['PRENOM'];
$MAIL=$_SESSION['MAIL'] ;
$TEL=$_SESSION['TEL'] ;
$ADRESSE=$_SESSION['ADRESSE'] ;
$TEL_C=$_SESSION['TEL_C'];
$SPC=$_SESSION['SPC'] ;


$servername = "localhost";
$username = "root";
$password = "";
$db="pharmahome";

// Create connection
$conn = new mysqli($servername, $username, $password , $db);

    $rdv_att = " SELECT id_rdv , id_m , etat FROM t_rdv WHERE id_m='".$ID."' and etat='' ";
     $result = mysqli_query($conn, $rdv_att); 
    $nbr_rdv_att=mysqli_num_rows($result);

    $rdv_conf = " SELECT id_rdv , id_m , etat FROM t_rdv WHERE id_m='".$ID."' and etat='oui' ";
     $result1 = mysqli_query($conn, $rdv_conf); 
    $nbr_rdv_conf=mysqli_num_rows($result1);

?>



<div class="coveri">
  <div class="row">
            <div class="col-sm-12 info">
                <h2>ID medecin : <?php  echo $ID; ?></h2>
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
                     <p><?php  echo $TEL; ?> / <?php  echo $TEL_C; ?></p> 
                   </div>
               </div> 
            </div>
            <div class="col-sm-4">
               <div class="coverbox2">
                   <div class="box">
                        <h2>specialite<i class="fas fa-mobile-alt"></i></h2>
                     <p><?php  echo $SPC; ?></p> 
                   </div>
               </div> 
            </div>
            <div class="col-sm-4">
               <div class="coverbox2">
                   <div class="box">
                        <h2>adresse<i class="fas fa-mobile-alt"></i></h2>
                     <p><?php  echo $ADRESSE; ?></p> 
                   </div>
               </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="rdvbox" id="r1">
                    <h3>RDV confirmés : <i class="fas fa-user-nurse"></i></h3>
                <p style="color:white; font-size: 100%; text-decoration: underline;"> Vous avez <?php echo $nbr_rdv_conf; ?> RDV confirmé(s)</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="rdvbox" id="r2">
                    <h3>RDV en attente <i class="fas fa-notes-medical"></i></h3>
                <p style="color:white; font-size: 100%; text-decoration: underline;"> Vous avez <?php echo $nbr_rdv_att; ?> RDV en attente</p>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 ">
                
            </div>
        </div>
    </div>
