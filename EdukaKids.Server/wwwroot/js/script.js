<<<<<<< HEAD
$(document).ready(function () {
    console.log(location.host)
    // carrega pagina login se não estiver logado
    if (window.localStorage.length === 0) {
        window.location.href = window.location.protocol + "//" + window.location.host + "/login.php"
    }
=======
$(document).ready(function (){
    // carrega pagina login se não estiver logado
    if(window.localStorage.length === 0)
        window.location.href = window.location.origin + "/login.php"
>>>>>>> b94ea58c2ecbc27887d1bd8d03589b4d0bd2a745

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


