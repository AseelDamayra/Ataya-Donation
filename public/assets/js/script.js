
//start nav scrolling
$(window).scroll(function(){
    $('nav').toggleClass('scrolled',$(this).scrollTop() > 400);
    $('marquee').toggleClass('scrolling',$(this).scrollTop() > 400);
});



//start sign-in-up
// $(document).ready(function(){
//     $('.sign_in').click(function(){
//         $('.login').addClass('active')
//         $('.welcome').addClass('active')
//         $('.sign_in').addClass('active')
//         $('.btn').addClass('active')
//         $('.sign_up').addClass('active')
        
//     })
//     $('.btn').click(function(){
//         $('.sign_up').removeClass('active')
//         $('.login').removeClass('active')
//         $('.welcome').removeClass('active')
//         $('.sign_up').removeClass('active')
//         $('.btn').removeClass('active')
//         $('.sign_in').removeClass('active')
       
//     })
// })


//end-sign-in-up

//start donate
jQuery(document).ready(function ($) {
    $(".blood").hide();
    $(".studentShip").hide();
   $(".smallProject").hide();
   $(".products").hide();

    $('select[name=donateType]').change(function () {
     

        $("select[name=donateType] option:selected").each(function () {
            if ($(this).val() == "bloodDonation" ) {
                $('.blood').show();
                $(".studentShip").hide();
                $(".smallProject").hide();
                $(".products").hide();
            }
             else if ($(this).val() == "studentShipDonation") {
                 $('.studentShip').show();
                 $(".blood").hide();
                 $(".smallProject").hide();
                 $(".products").hide();
            }
            else if ($(this).val() == "smallprojects") {
                $('.smallProject').show();
                $(".blood").hide();
                $(".studentShip").hide();
                $(".products").hide();
            } 
            else if ($(this).val() == "productDonation") {
                $('.products').show();
                $(".blood").hide();
                $(".studentShip").hide();
               $(".smallProject").hide();
            }
 });
       
    });
});

//end donate

//start comment
// var main = function() {
//     $('.btnComment').click(function() {
//       var post = $('.status-box').val();
//       $('<li>').text(post).prependTo('.posts');
//       $('.status-box').val('');
//       $('.counter').text('250');
//       $('.btnComment').addClass('disabled');
//     });
//     $('.status-box').keyup(function() {
//       var postLength = $(this).val().length;
//       var charactersLeft = 250 - postLength;
//       $('.counter').text(charactersLeft);
//       if (charactersLeft < 0) {
//         $('.btnComment').addClass('disabled');
//       } else if (charactersLeft === 250) {
//         $('.btnComment').addClass('disabled');
//       } else {
//         $('.btnComment').removeClass('disabled');
//       }
//     });
//   }
//   $('.btnComment').addClass('disabled');
//   $(document).ready(main)
//end comment

//start progress

var offsetTop = ($('.content-progress').offset()|| { "top": NaN }).top;
$(window).scroll(function() {
var height = $(window).height();
if($(window).scrollTop()+height > offsetTop) {

$('.progress-per').each(function(){
    var $this=$(this);
    var per=$this.attr('per');
    $this.css("width",per+'%');
    
    });
}
});


    //end progress

    //start help-widnow
    

    let answers = document.querySelectorAll(".panel");
    answers.forEach((event) => {
      event.addEventListener("click", () => {
        if (event.classList.contains("active")) {
          event.classList.remove("active");
          
        } else {
          event.classList.add("active");
        }
      });
    });




    //end help-window

//start pagedonate
jQuery(document).ready(function ($) {
    $(".visa").hide();
   $(".paypal").hide();

    $('input[name=payment]').change(function () {
     

        $("input[name=payment]:checked").each(function () {
            if ($(this).val() == 1 ) {
                $('.visa').show();
                $(".paypal").hide();
            }
           else if ($(this).val() == 2 ) {
                $('.paypal').show();
                $(".visa").hide();
            }
           
 });
       
    });
});


//end pagedonate