<?php
session_start();

?>

<div class="row">
    <div class="col-md-8 rdv">
        <h1>
            Demande rendez-vous
        </h1>
        <h4>* Champs Obligatoires</h4>
    </div>
</div>

<form  id="fr" >
  <div class="row">
      <div class="col-md-10">
          <label>Specialite : *</label>
      </div>
      <div class="col-sm-8 selector">
          <select id="input_s" >
              <option selected="selected" value=""></option>
              <?php
                  $servername = "localhost";
                  $username = "root";
                  $pwd = "";
                  $db= "pharmahome";
                  $conn = new mysqli($servername, $username, $pwd , $db);

                  $specialite = mysqli_query($conn, "SELECT DISTINCT spc FROM  t_med " );
                  while ($spc = mysqli_fetch_assoc($specialite)) 
                      {
                          echo "<option id='spc_choisie' value=".$spc['spc'].">" .$spc['spc']."</option>";
                      } 
              ?>
          </select>
      </div>
  </div>
  <div class="row">
    <div class="col-md-10">
        <label>Medecin : *</label>
    </div>
    <div class="col-sm-8 selector">
      <select tabindex="-1" id="output_s">
       <option value=""></option>
      </select>
    </div>
  </div>
<div class="rdv2">
    <label>Date Rdv : *</label>
    <input type="date" id="datepicker" data-dd-large="true" data-dd-large-default="true" data-dd-theme="leaf" data-dd-lang="fr">
    <label>Heure Rdv : *</label>
    <input type="time" id="heure_rdv" min="08:00" max="18:00" >
    <br>
    <label>Remarque :</label>
    <input type="text" id="rmq" placeholder="">
</div>
<button class="buttonrdv" type="" id="ok">Entrer</button>

</form>
<br>
<script src="javascript/datedropper.pro.min.js"></script>
<script>
    
    $('#datepicker').dateDropper();
    
    </script>
<script>
  $("#input_s").change(function(){
    jQuery.ajax({
      method: "POST",
      url: "php/output_s.php",
      data: {input_s: $("#input_s").val()},
      success: function(data, status, xhr)
      {
      $("#output_s").html(data);
      }
    }); 
  });



  $('#fr').submit (function(){

    var date_rdv =  $('#datepicker').val();
    var rmq =  $('#rmq').val();
    var output_s =  $('#output_s').val();
    var heure_rdv = $("#heure_rdv").val();
    

    if((output_s=="") || (date_rdv=="") || (heure_rdv==""))
    {
      alert("veuillez remplir tout les champs obligatoires"+heure_rdv);
    }
    
    else
    {
       $.ajax({
      method: "POST",
      url: "php/dmd_rdv.php",
      data: {id_m:output_s , date_rdv:date_rdv , heure_rdv:heure_rdv , rmq:rmq},
      success: function(msg)
      {
        //alert(msg);
        if (msg=="oui")
        {
          alert("demande envoyee ");
          tableau_rdv();
        }
        else
          alert("rdv idisponible, veuillez modifier l'heure");

      }

    });
    }
   

  });

  function tableau_rdv(){
    
    
    $.ajax({
    type:'POST',
    url:"php/suivi_rdv.php",
    
    success:function(msg){
 
          $('.content').html(msg);
         
    }
    
  }); 
};


</script>






