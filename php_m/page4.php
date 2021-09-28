<?php
session_start();
if (isset($_POST['id_rdv']))
{
  $id_rdv=$_POST['id_rdv'];


    $servername = "localhost";
    $username = "root";
    $pwd = "";
    $db= "pharmahome";

    // Create connection
    $conn = new mysqli($servername, $username, $pwd , $db);
    
    $query=" SELECT  id_rdv , id_c  FROM t_rdv WHERE id_rdv='".$id_rdv."' " ;     
    $result = mysqli_query($conn, $query);
      while ($info = mysqli_fetch_array($result))
      {
        $id_c=$info['id_c'];
      }
}
else $id_c="";


?>
<div class="row">
    <div class="col-md-5 certif ">
        <div class="row">
           <div class="col-sm-12  ">
           <h1>Création du Certificat</h1> 
           </div>
           <div class="col-sm-12 ">
               <h4>ID patient :</h4>
               </div>
               <div class="col-md-12">
               <input disabled id="nompatient" placeholder="" value="<?php  echo $id_c; ?>"></div>
               <div class="col-sm-12 ">
               <h4>Durée :</h4>
               </div>
               <div class="col-md-12">
               <input type="text" id="duree" placeholder="">
               </div>
               <div class="col-sm-12 ">
               <h4>Cause :</h4>
               </div>
               <div class="col-md-12">
               <input type="text" id="cause" placeholder="">
               </div>
           <button class="ordbtn" onclick="certif_pdf(<?php  echo $id_rdv; ?>);">envoyer</button>           
        </div>
    </div>
    <div class="col-md-6 imagecertif">
        <img src="images/contract.png" alt="">
    </div>
</div> 
<script>

  
  function certif_pdf(val){
    var id_rdv=val ;
    var id_c=$("#nompatient").val();
    var duree=$("#duree").val();
    var cause=$("#cause").val();
    $.ajax({
        method:'POST',
        url:'test_pdf.php',
        data:{id_c:id_c , duree:duree , cause:cause , id_rdv:id_rdv },
        success:function(msg)
        {
          $('.content').html(msg);
        }
    });
};
</script>




<!--rdv du jour : tableau fih rdv taa l aabd l ID teeou num tel w l heure
certif ordonnance fiha esm l aabd w qadech dwee waqtech f certif
pharmacie actuelle w idha ken nhebounbdlouha 
-->