$(document).ready(function(){

    // Mobile Menu
    $('.mobile-menu-btn').click(function(){

        $('.nav-links').toggleClass('active');

    });


    // Smooth Scroll
    $('a').on('click', function(event){

        if(this.hash !== ''){

            event.preventDefault();

            let hash = this.hash;

            $('html, body').animate({

                scrollTop: $(hash).offset().top

            }, 800);

        }

    });


    // Sticky Shadow
    $(window).scroll(function(){

        if($(window).scrollTop() > 50){

            $('.header').css({
                'box-shadow':'0 5px 20px rgba(0,0,0,0.2)'
            });

        }else{

            $('.header').css({
                'box-shadow':'none'
            });

        }

    });

});