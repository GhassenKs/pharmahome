<?php
            session_start();
            $servername = "localhost";
              $username = "root";
              $pwd = "";
              $db= "pharmahome";
              // Create connection
              $conn = new mysqli($servername, $username, $pwd , $db);

              echo "<table class='table table-hover'>
              <tr>
              <th>ID_RDV</th>
              <th>Patient</th>
              <th>Heure rdv</th>
              <th>Date rdv</th>
              <th>Num Tel</th>
              <th>Gerer</th>
              </tr>
              " ;

              $select="SELECT u.id , u.nom , u.prenom , u.tel ,r.id_m , r.id_c ,  r.id_rdv ,  r.date_rdv , r.heure_rdv , r.etat 
              FROM  t_rdv r , t_user u
              WHERE r.id_m='".$_SESSION['ID']."' and r.id_c=u.id and r.etat=''
              ORDER BY r.date_rdv , r.heure_rdv";
              $result = mysqli_query($conn,$select) ;
              
              $x=1;
              while ($row = mysqli_fetch_array($result)) 
               { 
                echo"<tr  id='".$x."'>
                <td>".$row['id_rdv']." </td>
                <td>".$row['nom']." ".$row['prenom']."</td>
                <td>".$row['date_rdv']."</td>
                <td>".$row['heure_rdv']."</td>
                <td>".$row['tel']."</td>
                <td><button onclick='oui(".$x.");'>accepter rdv</button></td>
                <td><button onclick='non(".$x.");'>refuser rdv</button></td>
                </tr>";
                $x++;
               
              } 
              echo"</table>";
            ?> 

            <script>
              function oui(val){
                var id_rdv= document.getElementsByTagName('table')[0].getElementsByTagName('tr')[val].getElementsByTagName('td')[0].innerHTML;
                $.ajax({
                method:'POST' ,
                url:"php_m/accept_rdv.php",
                data:{id_rdv:id_rdv},
                success:function(msg)
                {
                  $(".content").load("php_m/page1.php");
                }
               });
               };

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


            </script>