
$(function (){
    'uses strict';
     $("#1").hover(
        function(){
            $("#1 i").css('color','#02DC54');
            $("#1 h5").css('color','#02DC54');
        },
         function(){
            $("#1 i").css('color','#777');
            $("#1 h5").css('color','#777');
        }
    );
    $("#2").hover(
      
        function(){
            $("#2 i").css('color','#02DC54');
            $("#2 h5").css('color','#02DC54');
        },
         function(){
            $("#2 i").css('color','#777');
            $("#2 h5").css('color','#777');
        }
    );
    $("#3").hover(
      
        function(){
            $("#3 i").css('color','#02DC54');
            $("#3 h5").css('color','#02DC54');
        },
         function(){
            $("#3 i").css('color','#777');
            $("#3 h5").css('color','#777');
        }
    );
    $("#4").hover(
       
        function(){
            $("#4 i").css('color','#02DC54');
            $("#4 h5").css('color','#02DC54');
        },
         function(){
            $("#4 i").css('color','#777');
            $("#4 h5").css('color','#777');
        }
        );
    $("#5").hover(
   
        function(){
            $("#5 i").css('color','#02DC54');
            $("#5 h5").css('color','#02DC54');
        },
         function(){
            $("#5 i").css('color','#777');
            $("#5 h5").css('color','#777');
    }
    );
     $('#acc').click(function() {
        $(".content").load("php_m/acc_med.php");
    });

    $('#rdv').click(function() {
        $(".content").load("php_m/page0.php");
    });
    $('#rdv_conf').click(function() {
        $(".content").load("php_m/page0.php");
    });
    $('#gerer_rdv').click(function() {
        $(".content").load("php_m/page1.php");
    });
    $('#rdv_att').click(function() {
        $(".content").load("php_m/page1.php");
    });
    $('#ord').click(function() {
        $(".content").load("php_m/historique_ord.php");
    });
    
    $('#pharmacie').click(function() {
        $(".content").load("php_m/page3.php");
    });
    $('#certif').click(function() {
        $(".content").load("php_m/page4.php");
    });
    $('#edit').click(function() {
        $(".content").load("php_m/modif_profil.php");
    });


    $('#deco').click(function() {
        $.ajax({
    type:'POST',
    url:"php/deco.php",
    
    success:function(msg){
 
          window.location.replace("../pharmahome"); 
    }
    
  });
    });
    
    
    
    
});
