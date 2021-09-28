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
?>


  <div class="row"> 
    <div class="col-md-4 imagemodifier">
      <img src="images/patient.png" style="width: 300px ;">
    </div>
    <div class="col-md-8">
     <div class="modifier">
      <form method="post" action="php/update_patient.php">
        <h2 class="title">Modifier Profil</h2>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>ID : <?php  echo $ID; ?></h5>
                    <!-- <input type="text" placeholder="" class="input" name="id"> -->
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5></h5>
                    <input type="text" placeholder="<?php  echo $NOM; ?>" class="input" name="nom">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5></h5>
                    <input type="text" placeholder="<?php  echo $PRENOM; ?>" class="input" name="prenom">
                 </div>
              </div>
               
              <div class="input-div one">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5></h5>
                    <input type="text" placeholder="<?php  echo $ADRESSE; ?>" class="input" name="adresse">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5></h5>
                    <input type="text" placeholder="<?php  echo $MAIL; ?>" class="input" name="mail">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5></h5>
                    <input type="text" placeholder="<?php  echo $MAIL_T; ?>" class="input" name="mail_t">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5></h5>
                    <input type="text" placeholder="<?php  echo $AD_PH; ?>" class="input" name="ad_ph">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5></h5>
                    <input type="text" placeholder="<?php  echo $TEL; ?>" class="input" name="tel">
                 </div>
              </div>
             
              <input type="submit" class="btn" value="Edit">
            </form>
            </div>
        </div>
    </div>
