
$(function (){
    'uses strict';
    //smooth scroll to element
    

    $('#loginlink').click( function(){
        console.log("clicked raw");
        $('.login-content').toggleClass('hide');
        $('.login2').toggleClass('show');
        
    });
     
    $('#test').click( function(){
        console.log("clicked raw 2");
        $('.login-content').toggleClass('hide');
        $('.login2').toggleClass('show');
        
    });
    
});
const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});

