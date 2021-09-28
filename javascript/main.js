//scroll functions

const nr = ScrollReveal();
nr.reveal('.navbar', {
    origin: 'top',
    distance: '300px',
    reset: 'true',
    scale:0.5,
    duration:1200
    
});
const sr = ScrollReveal();
sr.reveal('#home h1', {
    origin: 'left',
    distance: '300px',
    reset: 'true',
    scale:0.5,
    duration:1500
    
});
const br = ScrollReveal();
br.reveal(' .fond', {
    origin: 'right',
    distance: '700px',
    reset:'true',
    scale:0.6,
    duration:4000
    
});
const ar = ScrollReveal();
ar.reveal(' .description', {
    origin: 'bottom',
    distance: '300px',
    reset:'true',
    duration:1700
    
});
const cr = ScrollReveal();
cr.reveal(' .bouton', {
    
    reset:'true',
    
    duration:6000
    
});
const tr = ScrollReveal();
tr.reveal(' .titreservices', {
    
    reset:'true',
    scale:0.5,
    duration:1000
    
});
const ir = ScrollReveal();
ir.reveal(' .icons', {
    
    reset:'true',
    scale:0.5,
    duration:2500
    
});
const t2r = ScrollReveal();
t2r.reveal(' .teamtitle', {
    
    reset:'true',
    scale:0.5,
    duration:1500
    
});









//jquery functions
$(function (){
    'uses strict';
    //smooth scroll to element
    
    $('.navbar .list li').click(function (){
        
        window.console.log('yes tekhdem');
        
    });
    $("#homelink").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#home").offset().top
    }, 1500);
});
    $("#serviceslink").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#services").offset().top-205
    }, 1500);
});
    $("#founderslink").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#founders").offset().top-150
    }, 1500);
});
    $("button").click(function(){
  $(".box").css("visibility", "visible");
        window.console.log('yes tekhdem');
        $(".cover11").css("filter", "blur(15px)");
        
        
});
    $(".box h3").click(function(){
        
  $(".box").css("visibility", "hidden");
        window.console.log('yes tekhdem');
        $(".cover11").css("filter", "blur(0px)");
});
    $('#registerlink').click( function(){
        console.log("clicked raw");
        $('.title').toggleClass('actif');
        $('.bouton').toggleClass('actif');
        $('.description').toggleClass('actif');
        $('.login-content').toggleClass('active');
    });
    
});