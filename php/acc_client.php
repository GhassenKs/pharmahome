<?php
session_start();

$ID= $_SESSION['ID'];
$NOM= $_SESSION['NOM'];
$PHOTO= $_SESSION['PHOTO'];
$PRENOM= $_SESSION['PRENOM'];
$MAIL=$_SESSION['MAIL'] ;
$TEL=$_SESSION['TEL'] ;


?>

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