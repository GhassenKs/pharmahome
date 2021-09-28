<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
  <link rel="stylesheet" type="text/css" href="../css/registerstyle.css">
  
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@500&display=swap" rel="stylesheet">
  
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  
</head>
<body>
 <div class="row navbar">
            <div class="col-md-4 logo ">
                <a href="../../pharmahome" style="color:#555; text-decoration:none;" ><h2><span style="color:#02DC54">Pharma</span>home</h2></a>
            </div>
            <div class="col-md-6 list ">
                <ul>
                    
                    <a href="../"><li id="registerlink">Home</li></a>

                </ul>
            </div>
        </div>
        
  <img class="wave" src="../images/wave.png">
  <div class="container">
    <div class="img">
      <img src="../images/patient.svg">
    </div>
    <div class="login-content">
      <form id="inscri_ph" >
        <h2 class="title" style="font-family: 'Zilla Slab', serif;">Welcome</h2>
        <span id="msg"></span>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>ID Pharmacie</h5>
                    <input type="text" class="input" id="id_ph" autocomplete="off">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Nom Pharmacie</h5>
                    <input type="text" class="input" id="nom_ph">
                 </div>
              </div>
              
              <div class="input-div one">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>Adresse</h5>
                    <input type="text" class="input" id="adresse_ph">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Nom propriétaire</h5>
                    <input type="text" class="input" id="nom_p">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Numero de téléphone</h5>
                    <input type="text" class="input" id="tel_ph">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Adresse Mail</h5>
                    <input type="email" class="input" id="mail_ph">
                 </div>
              </div>
              <div class="input-div pass">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Mot de passe</h5>
                    <input type="password" class="input" id="mdp">
                 </div> 
              </div>
              <a href="#" id="loginlink">you have an account ?</a>
              <input type="submit" class="btn" value="Login">
            </form>
            
        </div>
        
    </div>
    <div class="login2">
            <form action="../php/connexion.php">
                  <img src="../images/login.png" alt="">
                <h2 class="title" >Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>ID</h5>
                        <input type="text" class="input">
                    </div>
                </div>
                
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>mot de passe</h5>
                        <input type="password" class="input">
                    </div>
                </div>
                <a href="#" id="test" >you want register</a>
                <input type="submit"  class="btn" value="Login">
            </form>
        </div>
        <script src="../javascript/jquery-3.5.1.min.js"></script>

<script>
  $("#inscri_ph").submit(function(e){


  e.preventDefault();
        var id_ph=$('#id_ph').val() ;
                var nom_ph=$('#nom_ph').val() ;
                var adresse_ph=$('#adresse_ph').val() ;
                var nom_p=$('#nom_p').val() ;
                var tel_ph = $('#tel_ph').val() ;
                var mail_ph=$('#mail_ph').val() ;
                var mdp=$('#mdp').val();
                //alert(id_ph+" "+nom_ph +" "+ adresse_ph +" "+ nom_p +" "+ tel_ph+" "+mail_ph+" "+mdp );
                $.ajax({
                  method: "POST",
                  url: "inscri_ph.php",
                  data:{id_ph:id_ph , nom_ph:nom_ph , adresse_ph:adresse_ph , nom_p:nom_p , tel_ph :tel_ph  , mail_ph:mail_ph , mdp:mdp},
                  //data:{id_ph:id_ph , nom_ph:nom_ph , adresse_ph:adresse_ph , nom_p:nom_p , tel_ph :tel_ph  , mail_ph:mail_ph , mdp:mdp},
                  success:function(data)
                  {
                   //alert("Vous etes inscri !");
                    //$(".content").load("index.php");
                    if(data == "TRUE")
                    {
                      $("#msg").html("Vous êtes bien inscri !");
                            $("#inscri_ph").trigger("reset");
                            $("#msg").append("<a href='#' style='text-align:center;'>Accedez a votre compte</a>");

                    }
                    else if(data == "FALSE")
                    {
                      $("#msg").html("Erreur");
                            $("#inscri_ph").trigger("reset");
                    }
                  }
              
                }); 
                //alert(id_ph+" "+nom_ph +" "+ adresse_ph +" "+ nom_p +" "+ tel_ph+" "+mail_ph+" "+mdp );}
      


});



</script>
    <script  src="../javascript/maininscri.js"></script>


</body>
</html>
