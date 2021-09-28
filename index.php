<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>projet PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/inscristyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,500&display=swap" rel="stylesheet">
    <script src="javascript/jquery-3.5.1.min.js"></script>
    <script src="javascript/scrollreveal.js"></script>
</head>

<body>

    <div class="cover1">
        <div class="row navbar">
            <div class="col-md-4 logo ">
                <a href="../pharmahome" style="color:#555; text-decoration:none;" ><h2><span style="color:#02DC54">Pharma</span>home</h2></a>
            </div>
            <div class="col-md-6 list ">
                <ul>
                    <li id="homelink" style="color: #555"><a href="../pharmahome">Home</a></li>
                    <li id="serviceslink"><a href="#">Services</a></li>
                    <li id="founderslink"><a href="#">Equipe</a></li>
                    <li id="registerlink"><a href="#">Connexion</a></li>

                </ul>
            </div>
        </div>
        <div class="container cover11">

            <div class="row " id="home">
                <div class="col-md-6 title">
                    <h1><span style="color:#02DC54">Pharma </span>Home</h1>
                </div>
                <div class="fond">

                </div>
            </div>
            <div class="row">
                <div class="col-md-4 description">
                    <p> Description mteena here Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae fuga fugiat
                        , nihil suscipit animi quae vero iste atque .
                    </p>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4 bouton">
                    <button >
                        S'inscrire
                    </button>
                </div>
            </div>

        </div>
        <div class="login">
            <div class="container box">
                <div class="row">
                    <div class="col-sm-8">
                        <h1>choose who you are </h1>
                        <h3>X</h3>
                    </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="choix" >
                               <img src="images/doctor.png" alt="">
                               <a href="php_m/form_med.php"><h2> medecin</h2></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="choix">
                               <img src="images/patient.png" alt="">
                                <a href="php/form_client.php"><h2>patient</h2></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                               <div class="choix">
                               <img src="images/pharmacy.png" alt="">
                               <a href="php_ph/form_ph.php"><h2>pharmacien</h2></a>
                            </div></div>

                    </div>
                
            </div>
        </div>
        <div class="login-content">
            <form action="php/connexion.php" method="post">
                	<img src="images/login.png" alt="">
                <h2 class="title">Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>ID</h5>
                        <input type="text" class="input" name="id" id="id">
                    </div>
                </div>
                
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>mot de passe</h5>
                        <input type="password" class="input" name="mdp" id="mdp">
                    </div>
                </div>
                
                <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <div class="cover2">
        <div class="container" id="services">
            <div class="row">
                <div class="titreservices">
                    Our Services
                    <hr id="hr1" style="height:3px;">
                </div>
                <div class="col-md-4 icons">
                    <div class="icon"> <i class="fas fa-user-md"></i></div>
                    <h2>Consult a Doctor</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="col-md-4 icons">
                    <div class="icon"><i class="fas fa-clinic-medical" id="iconhome"></i></div>
                    <h2>Get your Meds</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="col-md-4 icons">
                    <div class="icon"><i class="fas fa-handshake"></i></div>
                    <h2>Contact 3arfek</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>
            </div>
        </div>
        <div class="cover3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 teamtitle">
                        <h1>Meet The Founders </h1>
                        <hr id="hr2" style="height:3px;">
                    </div>
                </div>



            </div>
        </div>
        <div style="background-color:#f2f4f2">
            <div class="container">
                <div class="row" id="founders">
                    <div class="col-md-6 contplace1">
                        <div class="cont">
                            <div class="card">
                                <div class="imgbox">
                                    <img src="images/profile.jpg" alt="">
                                </div>
                                <div class="content">
                                    <h2>Ghassen Ksouri</h2>
                                    <p>Project manager and Front-End web developer<br>
                                        "nektbou quote saghroun here</p>
                                    <div class="social">
                                        <i class="fab fa-facebook-f "></i>
                                        <i class="fab fa-whatsapp"></i>
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 contplace2">
                        <div class="cont">

                            <div class="card">
                                <div class="imgbox">
                                    <img src="images/b2.jpg" alt="">
                                </div>
                                <div class="content">
                                    <h2>Bochra Houissa</h2>
                                    <p>community manager and Back-End web developer<br>
                                        "nektbou quote saghroun here</p>
                                    <div class="social">
                                        <i class="fab fa-facebook-f "></i>
                                        <i class="fab fa-whatsapp"></i>
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>








<!--    <script src="javascript/jquery-3.5.1.min.js"></script>-->
<!--    <script src="javascript/scrollreveal.js"></script>-->
<!--    <script src="javascript/test.js"></script>-->
    <script src="javascript/jquery-3.5.1.min.js"></script>
    <script src="javascript/main.js"></script>
    <script src="javascript/maininscri.js"></script>

</body>

</html>
