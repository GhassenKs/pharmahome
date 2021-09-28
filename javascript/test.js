
const inputs = document.querySelectorAll(".input");


$(function (){
    
     $('#medecin').click(function() {
        $.ajax({
    type:'POST',
    url:"php/medecin.php",
    
    success:function(msg){
 
          window.location.replace("index.php"); 
    }
    
  });
    });
    inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});

});

