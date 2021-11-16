
$(document).ready(function (){
    // carrega pagina login se não estiver logado
    if(window.localStorage.length === 0)
        window.location.href = window.location.origin + "/login.php"

    //Varaiveis locais   
    var _containerBtn = $(".jbtn-voltar");
    var _btnLink = $(".jbtn-voltar-link");
       
       
    //Mostra o botão voltar ao topo
    $(window).scroll(function(){
        if($(this).scrollTop()> 70){
            _containerBtn.fadeIn(500);
        }else{
            _containerBtn.fadeOut(0);
        }
    });
              
    //Click e volte ao topo
    _btnLink.click(function(){
        
        $("html, body").animate({scrollTop: 0}, 800);       
        
        return false;
    });
    
});


