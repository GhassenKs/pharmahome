<div class="row">
      <div class="col-md-10">
          <label>Liste des rendez vous : *</label>
      </div>
      <div class="col-sm-8 selector">
          <?php
            session_start();
            $servername = "localhost";
              $username = "root";
              $pwd = "";
              $db= "pharmahome";
              // Create connection
              $conn = new mysqli($servername, $username, $pwd , $db);

              echo "<table class='table table-hover'>
              <tr class='tablehead'>
              <th>ID_RDV</th>
              <th>Docteur</th>
              <th>Specialite</th>
              <th>Date rdv</th>
              <th>Heure rdv</th>
              <th>Etat</th>
              <th class='tgerer'>Gerer</th>
              </tr>
              " ;

              $select="SELECT m.id_m , m.nom , m.prenom , m.spc , r.id_rdv , r.id_c , r.date_rdv , r.heure_rdv , r.etat
              FROM  t_med m , t_rdv r
              WHERE r.id_c='".$_SESSION['ID']."' and m.id_m=r.id_m 
              ORDER BY r.date_rdv , r.heure_rdv";
              $result = mysqli_query($conn,$select) ;
              $x=1; 
              while ($row = mysqli_fetch_array($result)) 
               {
                if($row['etat']=="oui")
                  {
                    $bg="#1dd1a1";
                    $etat="RDV Confirmé" ;

                  }
                else 
                  if($row['etat']=="")
                  {
                    $bg="#feca57";
                    $etat="En attente de confirmation" ;

                  }
                  else 
                  {
                    $bg="red";
                    $etat="RDV Refusé, Veuillez choisir une autre date " ;
                  }
                echo"<tr  class='trdv'  id='".$x."'>
                <td>".$row['id_rdv']."</td>
                <td>".$row['nom']." ".$row['prenom']." </td>
                <td>".$row['spc']."</td>
                <td>".$row['date_rdv']."</td>
                <td>".$row['heure_rdv']."</td>
                <td style='width:350px;'><font color='$bg'>".$etat."</font></td>
                <td class='fafa'><button style='color:#ee5253' onclick='ann(".$x.");'><i class=' fas fa-times'></i></button>
                <button style='color:#333' onclick='modif(".$x.");'><i class='far fa-edit'></i></button></td>
                </tr>";
                $x++;
               
              } 
              echo"</table>";
            ?> 
       
  </div>
  <script>
   function ann(val){
      var id_rdv= document.getElementsByTagName('table')[0].getElementsByTagName('tr')[val].getElementsByTagName('td')[0].innerHTML;
      if(confirm("etes vous sur de vouloir annuler le rdv ?"))
       {
          jQuery.ajax({
            method: "POST",
            url: "php/annuler_rdv.php",
            data : {id_rdv:id_rdv} ,
            success: function(data, status, xhr)
            {
              $(".content").load("php/suivi_rdv.php");
            }
          }); 
       }
      else
        $(".content").load("php/suivi_rdv.php");
      
    };

    function modif(val){
      var id_rdv= document.getElementsByTagName('table')[0].getElementsByTagName('tr')[val].getElementsByTagName('td')[0].innerHTML;
      jQuery.ajax({
            method: "POST",
            url: "php/modif_rdv.php",
            data : {id_rdv:id_rdv} ,
            success: function(msg)
            {
              $(".content").html(msg);
            }
          }); 
       };
      
      
    

  </script>

