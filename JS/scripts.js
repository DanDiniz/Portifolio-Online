
$(function(){

    /*Aqui vai toda a linguagem javascript*/
    $('nav.mobile').click(function(){
        //Adicionando um evento click//

        var ListaMenu = $('nav.mobile ul');
        
        //Abrir menu mobile através do fadeIn
        //Abrir menu com efeito Toggle
        if(ListaMenu.is(':hidden') == true){
            var Icone = $('.button-menu-mbolie').find('i');
            ListaMenu.slideToggle();

            Icone.removeClass('fa-bars');
            Icone.addClass('fa-times');
        }
    else{
        
        var Icone = $('.button-menu-mbolie').find('i');        
        Icone.removeClass('fa-times');
        Icone.addClass('fa-bars');
        ListaMenu.fadeOut();
    }
    


    })
    /*
    if($('target').length > 0){
        //SCROOLL EM UM ELEMENTO

        var Elemento = '#'+$('target').attr('target');
        var divscroll = $(Elemento).offset().top;
        $('html,body').animate({'scrollTop': divscroll},2000);
    }
*/


$els = $('a.Ativo');

$els.click(ScrollSobre());
function ScrollSobre(){
    $('html,body').animate({scrollTop:300},2000);
}

    //HEADER FIXO
    $(window).scroll(function(){
        if($(this).scrollTop() > 100){
            $(".header-wrp").addClass("fixed");
        }
        else{
            $(".header-wrp").addClass("fixed");
        }
    });

})