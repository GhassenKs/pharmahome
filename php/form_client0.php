<!DOCTYPE html>
<html>
<head>
  <title> Form</title>
  <link rel="stylesheet" type="text/css" href="../css/registerstyle.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  
</head>
<body>
  <img class="wave" src="../images/wave.png">
  <div class="container">
    <div class="img">
      <img src="../images/patient.svg">
    </div>
    <div class="login-content">
      <form method="post" action="inscri_client.php">
        <h2 class="title">Welcome</h2>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>ID</h5>
                    <input type="text" class="input" name="id">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>nom</h5>
                    <input type="text" class="input" name="nom">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>prenom</h5>
                    <input type="text" class="input" name="prenom">
                 </div>
              </div>
              <div class="input-div pass">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>date-n</h5>
                    <input type="text" class="input" name="date_n">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>adresse</h5>
                    <input type="text" class="input" name="adresse">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>E-mail</h5>
                    <input type="text" class="input" name="mail">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>Email de travail</h5>
                    <input type="text" class="input" name="mail_t">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>adresse pharmacie</h5>
                    <input type="text" class="input" name="ad_ph">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>numero tel</h5>
                    <input type="text" class="input" name="tel">
                 </div>
              </div>
              <div class="input-div pass">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>mot de passe</h5>
                    <input type="password" class="input" name="mdp">
                 </div> 
              </div>
              <a href="dashboard.html">you have an account ?</a>
              <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../javascript/maininscri.js"></script>
</body>
</html>
