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
                  url: "php_ph/inscri_ph.php",
                  data: {id_ph: $("#id_ph").val()},
                  //data:{id_ph:id_ph , nom_ph:nom_ph , adresse_ph:adresse_ph , nom_p:nom_p , tel_ph :tel_ph  , mail_ph:mail_ph , mdp:mdp},
                  success:function(msg)
                  {
                    //alert("Vous etes inscri !");
                    //$(".content").load("index.php");
                    $(".content").html(msg);
                  }
                }); 
                //alert(id_ph+" "+nom_ph +" "+ adresse_ph +" "+ nom_p +" "+ tel_ph+" "+mail_ph+" "+mdp );}
      


});


