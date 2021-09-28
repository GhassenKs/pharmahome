 <div class="row">
     <div class="col-md-6 certif ">
         <div class="row">
             <div class="col-sm-12  ">
                 <h1> manage pharmacies </h1>
             </div>
             <div class="col-md-11 ">
                 <h4>pharmacie actuelle : <span id="pharmacieact" style="font-weight: 200;color: black"> pharmacie manar 1</span></h4>
                 
             </div>
             <a href="#" onclick="myFunction()" >voulez vous changer la pharmacie ?</a>
             <div id="hider">
             <div class="col-sm-12 ">
                 <h4>ID de la nouvelle pharmacie :</h4>
             </div>
             <div class="col-md-12">
                 <input type="text" id="meds" placeholder="">
             </div>
             <button id="save">sauvegarder </button>
             </div>
         </div>
     </div>
     <div class="col-md-5 imagecertif">
         <img src="images/pharmacy.png" alt="">
     </div>
 </div>
 <script>
function myFunction() {
  var x = document.getElementById("hider");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
