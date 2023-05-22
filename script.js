window.addEventListener('load',function(){
  let loader = document.getElementById('loader')
  loader.classList.add('vanish')
 })
$(document).ready(function(){
  let ver = document.querySelectorAll('#verifier')
    $(ver).click(function(){
        $('#produit').slideToggle('slow');
    }) 
   
    $('#evrything').click(function(){
      $('#produit').slideUp('slow');
    })
    
})
$(document).ready(function(){

  $('#nav-bar2 #enter-nav2 #hamb').click(function(){
    $('#arr').fadeToggle("slow")
    $('#bar').fadeToggle('slow')
    $("#list3").slideToggle('slow')
  })

  $('#hamb').click(function(){
    $('#arr').fadeToggle("slow")
    $('#bar').fadeToggle('slow')
    $("#list3").slideToggle('slow')
  })

    var x = 0;
    var t = 7000
// for next slide
    $('.next').click(function(){

    x= (x<=300)?(x+100):0;
  $('figure').css('left', -x+'%');
    });
    $('figure').mouseenter(function(){
      $('#img-1 h1').css('opacity',1)
      $('#img-1 p').css('opacity',1)
        $('#analyse').css('opacity',1)
        $('#apa').css('opacity',1)
        $('#img-3 h1').css('opacity',1)
        $('#img-2 h1').css('opacity',1)
    })
    $('figure').mouseleave(function(){
        $('#img-1 h1').css('opacity',0)
        $('#img-1 p').css('opacity',0)
        $('#analyse').css('opacity',0)
        $('#apa').css('opacity',0)
        $('#img-3 h1').css('opacity',0)
        $('#img-2 h1').css('opacity',0)
    })
    
 // for prev slide
 $('.prev').click(function(){
    x= (x>=100)?(x-100):100;
  $('figure').css('left', -x+'%');
});



$('.img-grid:nth-child(1)').mouseenter(function(){
    $('.img-grid:nth-child(1) h1').css('opacity',1)
  })
  $('.img-grid:nth-child(1)').mouseleave(function(){
    $('.img-grid:nth-child(1) h1').css('opacity',0)
  })

  $('.img-grid:nth-child(2)').mouseenter(function(){
    $('.img-grid:nth-child(2) h1').css('opacity',1)
  })
  $('.img-grid:nth-child(2)').mouseleave(function(){
    $('.img-grid:nth-child(2) h1').css('opacity',0)
  })

  $('.img-grid:nth-child(3)').mouseenter(function(){
    $('.img-grid:nth-child(3) h1').css('opacity',1)
  })
  $('.img-grid:nth-child(3)').mouseleave(function(){
    $('.img-grid:nth-child(3) h1').css('opacity',0)
  })

  $('.img-grid:nth-child(4)').mouseenter(function(){
    $('.img-grid:nth-child(4) h1').css('opacity',1)
  })
  $('.img-grid:nth-child(4)').mouseleave(function(){
    $('.img-grid:nth-child(4) h1').css('opacity',0)
  })

  $('.img-grid:nth-child(5)').mouseenter(function(){
    $('.img-grid:nth-child(5) h1').css('opacity',1)
  })
  $('.img-grid:nth-child(5)').mouseleave(function(){
    $('.img-grid:nth-child(5) h1').css('opacity',0)
  })

  $('.img-grid:nth-child(6)').mouseenter(function(){
    $('.img-grid:nth-child(6) h1').css('opacity',1)
  })
  $('.img-grid:nth-child(6)').mouseleave(function(){
    $('.img-grid:nth-child(6) h1').css('opacity',0)
  })

  $('.img-grid:nth-child(7)').mouseenter(function(){
    $('.img-grid:nth-child(7) h1').css('opacity',1)
  })
  $('.img-grid:nth-child(7)').mouseleave(function(){
    $('.img-grid:nth-child(7) h1').css('opacity',0)
  })

  $('.img-grid:nth-child(8)').mouseenter(function(){
    $('.img-grid:nth-child(8) h1').css('opacity',1)
  })
  $('.img-grid:nth-child(8)').mouseleave(function(){
    $('.img-grid:nth-child(8) h1').css('opacity',0)
  })

  $('.img-grid:nth-child(9)').mouseenter(function(){
    $('.img-grid:nth-child(9) h1').css('opacity',1)
  })
  $('.img-grid:nth-child(9)').mouseleave(function(){
    $('.img-grid:nth-child(9) h1').css('opacity',0)
  })

  $('.img-grid:nth-child(10)').mouseenter(function(){
    $('.img-grid:nth-child(10) h1').css('opacity',1)
  })
  $('.img-grid:nth-child(10)').mouseleave(function(){
    $('.img-grid:nth-child(10) h1').css('opacity',0)
  })

  $('.img-grid:nth-child(11)').mouseenter(function(){
    $('.img-grid:nth-child(11) h1').css('opacity',1)
  })
  $('.img-grid:nth-child(11)').mouseleave(function(){
    $('.img-grid:nth-child(11) h1').css('opacity',0)
  })

  


/*window.setInterval(() => {

    x= (x<=300)?(x+100):0;
  $('figure').css('left', -x+'%');


},t)*/



});

let nav = document.getElementById('nav-bar')
let nav2 = document.getElementById('nav-bar2') 
let imag = document.getElementById('slider')
let prod = document.getElementById('produit')
let bien = document.getElementById('bien')
let form = document.getElementById('form')
let images = document.getElementById('sec0')
let list3 = document.getElementById('list3')

 window.addEventListener('scroll',() => {
  let scrolled = window.scrollY;

  if(scrolled >= 199 || nav2.style.height == '130px'){
    prod.style.position='fixed'
    prod.style.top='130'
    prod.style.zIndex='1000'
    prod.style.backgroundColor ='#eeeaeaec'
   }else{
    prod.style.position='absolute'
    prod.style.top=''
    prod.style.zIndex=''
    prod.style.backgroundColor=''
   }
   
  if(scrolled >= 199){
    list3.style.top ='130'
    list3.style.background ='rgba(255, 255, 255, 0.923)'
    nav.style.display ='none'
    nav2.style.height= '130px'
    nav2.style.zIndex='1000'
    form.style.top ='100'
    
 } 
 else{
  list3.style.background =''
  list3.style.top =''
  nav.style.display ='block'
    nav2.style.height= '0px'
    nav2.style.zIndex='1000'
    form.style.top =''
 }

 if(scrolled >= 199 || nav2.style.height == '130px'){
  prod.style.position='fixed'
  prod.style.top='130'
  prod.style.zIndex='1000'
  prod.style.backgroundColor ='#eeeaeaec'
 }else{
  prod.style.position='absolute'
  prod.style.top=''
  prod.style.zIndex=''
  prod.style.backgroundColor=''
 }

   if(scrolled >= 199){
      imag.style.zIndex = '1'
      imag.style.marginTop = '155px'
      images.style.position ='absolute'
      bien.style.top='467'  
   }
    

   else{
    imag.style.top ='100'
     imag.style.zIndex = ''
      imag.style.marginTop = ''
      images.style.position=''
      bien.style.top='450'
   }

 })

 

AOS.init()


let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
} 


