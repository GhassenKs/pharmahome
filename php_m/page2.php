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

    $traite = " UPDATE t_rdv SET etat='done' WHERE id_rdv='".$id_rdv."' ";
    $conn->query($traite) ;
    
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
           <h1>Création de l'ordonnance</h1> 
           </div>
           <div class="col-sm-12 ">
               <h4>ID du patient :</h4>
               </div>
               <div class="col-md-12">
               <input type="text" id="idpatient" placeholder="" disabled value="<?php  echo $id_c; ?>"></div>
               <div class="col-sm-12 ">
               <h4>ID de la pharmacie :</h4>
               </div>
               <div class="col-md-12">
               <input type="text" id="idpharma" placeholder="">
               </div>
               <div class="col-sm-12 ">
               <h4>medicaments :</h4>
               </div>
               <div class="col-md-12">
               <input type="text" id="meds" placeholder="">
               </div>
               
           <button class="ordbtn" onclick="ord_pdf(<?php  echo $id_rdv; ?>);">envoyer</button>
           
        </div>
    </div>
    <div class="col-md-6 imagecertif">
        <img src="images/ordonnance.png" alt="">
    </div>
</div> 

<script>

  
  function ord_pdf(val){
    var id_rdv=val ;
    var id_c=$("#idpatient").val();
    var id_ph=$("#idpharma").val();
    var med=$("#meds").val();
    $.ajax({
        method:'POST',
        url:'pdf_ord.php',
        data:{id_c:id_c , id_ph:id_ph , med:med , id_rdv:id_rdv },
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