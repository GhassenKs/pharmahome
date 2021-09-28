<div class="row">
      <div class="col-md-10">
          <label style="margin-top:25px;">RENDEZ VOUS A VENIR : *</label>
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
              <th>Patient</th>
              <th>Heure rdv</th>
              <th>Date rdv</th>
              <th>Num Tel</th>
              <th class='tgerer' >Gerer</th>
              </tr>
              " ;

              $select="SELECT u.id , u.nom , u.prenom , u.tel ,r.id_m , r.id_c ,  r.id_rdv ,  r.date_rdv , r.heure_rdv , r.etat 
              FROM  t_rdv r , t_user u
              WHERE r.id_m='".$_SESSION['ID']."' and r.id_c=u.id and r.etat='oui'
              ORDER BY r.date_rdv , r.heure_rdv";
              $result = mysqli_query($conn,$select) ;

              $x=1;
              
              while ($row = mysqli_fetch_array($result)) 
               { 
                echo"<tr class='trdv' id='".$x."'>
                <td>".$row['id_rdv']."</td>
                <td>".$row['nom']." ".$row['prenom']." </td>
                <td>".$row['date_rdv']."</td>
                <td>".$row['heure_rdv']."</td>
                <td>".$row['tel']."</td>
                <td class='fafa'><button style='color:#1dd1a1'onclick='non(".$x.");'><i class='fas fa-check'></i></button> <button style='color:#ee5253' onclick='non(".$x.");'><i class=' fas fa-times'></i></button>
                <button onclick='certif(".$x.");'><i class=' fas fa-medkit'></i></button>
                <button onclick='ord(".$x.");'><i class=' fas fa-scroll'></i></button></td>
                </tr>";
                $x++;
               
              } 
              echo"</table>";
            ?> 
       
  </div>
  <script>
    function non(val){
      var id_rdv= document.getElementsByTagName('table')[0].getElementsByTagName('tr')[val].getElementsByTagName('td')[0].innerHTML;
      $.ajax({
        method:'POST' ,
        url:"php_m/rep_rdv.php",
        data:{id_rdv:id_rdv},
        success:function(msg)
        {
          $(".content").load("php_m/page1.php");
        }
      });
    };
    function certif(val){
      var id_rdv= document.getElementsByTagName('table')[0].getElementsByTagName('tr')[val].getElementsByTagName('td')[0].innerHTML;
      $.ajax({
        method:'POST' ,
        url:"php_m/page4.php",
        data:{id_rdv:id_rdv},
        success:function(msg)
        {
          $(".content").html(msg);
        }
      });
    };

    function ord(val){
      var id_rdv= document.getElementsByTagName('table')[0].getElementsByTagName('tr')[val].getElementsByTagName('td')[0].innerHTML;
      $.ajax({
        method:'POST' ,
        url:"php_m/page2.php",
        data:{id_rdv:id_rdv},
        success:function(msg)
        {
          $(".content").html(msg);
        }
      });
    };
  </script>
