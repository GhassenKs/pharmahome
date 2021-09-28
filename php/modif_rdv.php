<?php
    $id_rdv=$_POST['id_rdv'];
    session_start();
    $servername = "localhost";
    $username = "root";
    $pwd = "";
    $db= "pharmahome";
    // Create connection
    $conn = new mysqli($servername, $username, $pwd , $db);
    $select="SELECT  id_rdv , date_rdv , heure_rdv , id_m
             FROM  t_rdv 
             WHERE id_rdv='".$id_rdv."'"; 
    $result = mysqli_query($conn,$select) ;
    while ($row = mysqli_fetch_array($result)) 
    {
      $id_m=$row['id_m'];
      $date=$row['date_rdv'];
      $heure=$row['heure_rdv'];
    }
?>


<div class="rdv2">
  <form id="modifier">
      <label>Date Rdv : *</label>
      <input type="text" placeholder="<?php  echo $date; ?>" onfocus="this.type='date'" id='new_d'>
      <br>
      <label>Heure Rdv : *</label>
      <input type="text" placeholder="<?php  echo $heure; ?>" onfocus="this.type='time'" id="new_h">
      <br>
      <button onclick="edit(<?php  echo $id_rdv; ?>,<?php  echo $id_m; ?>);">Modifier</button>
      <button onclick="annuler();">Annuler</button>
    </form>
</div>

<script>
   function annuler(){
      if(confirm("etes vous sur de vouloir annuler?"))
       {
          jQuery.ajax({
            method: "POST",
            success: function(data, status, xhr)
            {
              $(".content").load("php/suivi_rdv.php");
            }
          }); 
       }
      
      
    };
	function edit(val1,val2){
    var id_rdv=val1 ;
    var id_m=val2;
		var new_d=$("#new_d").val();
		var new_h=$("#new_h").val();
     if((new_d!="") && (new_h!=""))
     {
       jQuery.ajax({
      method: "POST",
      url: "php/verif_modif_rdv.php",
      data : {new_d:new_d , new_h:new_h , id_rdv:id_rdv , id_m:id_m} ,
      success: function(msg)
      {
        if (msg=="oui")
        {
          alert("Modification validee ");
          tableau_rdv();
        }
        else
          alert("rdv idisponible, veuillez modifier l'heure");
      }
      });
    }
    else alert("veuillez saisir tous les champs");
    
  };

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

