$('.carousel').carousel()

$(document).ready(()=>{

    // header resize on scroll
    window.onscroll = ()=> {
        if (document.documentElement.scrollTop > 50 || document.body.scrollTop > 50){
            $('header').addClass('scrolled')
        }else{
            $('header').removeClass('scrolled')
        }
    }



    // menu interaction
    $('#menu-btn').click(function(){
        $('.mobile-menu').show();
        $('html, body').css({
            overflow: 'hidden',
            height: '100%'
        });
    });

    $('.close-btn').click(function(){

        $('.mobile-menu').hide();
        $('html, body').css({
            overflow: 'scroll',
            height: '100%'
        });
    })

    $('.mobile-menu li').click(function(e){
        $(this).addClass('active');
        $(this).siblings().removeClass('active');
        $('html, body').css({
            overflow: 'scroll',
            height: '100%'
        });

    })
    
    
});



