$('.carousel').carousel()

$(document).ready(()=>{

    window.onscroll = ()=> {
        if (document.documentElement.scrollTop > 50 || document.body.scrollTop > 50){
            $('header').addClass('scrolled')
        }else{
            $('header').removeClass('scrolled')
        }
    }
    
});