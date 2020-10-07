$(function(){
    //Aqui ira todo código JavaScript
    $('nav.mobile').click(function(){
        //Evento ao clicar!
        var listaMenu = $('nav.mobile ul');
        //Abrir menu através do FadeIn
        
        if(listaMenu.is(':hidden') == true){
            listaMenu.fadeIn();
        }else{
            listaMenu.fadeOut();
        }
       // listaMenu.slideToggle();
    })
})