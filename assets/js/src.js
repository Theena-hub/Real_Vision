$(function() {
  $('.owl_works').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    center: true,
    autoplay:true,
      dots:false,
      navText: ['<i class="icon ion-ios-arrow-thin-left"></i>','<i class="icon ion-ios-arrow-thin-right"></i>'],
    info: true,
      autoplaySpeed:2000,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 2
      }
    }
  });
});


$('.item').attr('data-tilt', '');

$('.item').click(function() {
    $('.modal').fadeIn().addClass('open');
});

$('.closebtn').click(function() {
   $('.modal').fadeOut().removeClass('open');
});

const tilt = $('.js-tilt').tilt();
$('.js-tilt').tilt({
    glare: true,
    maxGlare: .1
})


$(function() {
  $('.owl_other_proj').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    center: true,
    autoplay:true,
      dots:false,
      navText: ['<i class="icon ion-ios-arrow-thin-left"></i>','<i class="icon ion-ios-arrow-thin-right"></i>'],
    info: true,
      autoplaySpeed:2000,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 3
      }
    }
  });
});

//Popup_Image - Modal Section - Residential
var modal = document.getElementById("myModal");        
var modalImg = document.getElementById("popUp_Img");    
var span = document.getElementsByClassName("close")[0];

function pop_img(ele){
  modal.style.display = "block"; 
  modalImg.src = ele.src;                 
  }

span.onclick = function() { 
  modal.style.display = "none";
  }   

window.onclick = function(event){
  if(event.target == modal){
    modal.style.display = "none";
    }
  }       