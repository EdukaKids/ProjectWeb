<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
<link rel="stylesheet" href="css/fontello.css"> <!-- folha de estilo dos icones facebook, etc -->
<link rel="stylesheet" href="css/style.css"> <!--folha de estilo do layout -->
<link rel="stylesheet" href="css/menu.css"><!--folha de estilo do menu -->
<link rel="stylesheet" href="css/banners.css"><!-- css do topo da pagina contato.php-->
<link rel="stylesheet" href="css/contatophp.css"><!--css do formulario da pagina contato.php -->
<!-- Script de subir ao topo -->
<script type="text/javascript" src="//code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<link rel="stylesheet" href="css/subir.css"><!--estilo do botao de subir ao topo -->
<!--fim -->
<link rel="shortcut icon" href="images/guia.jpg" type="image/png" />
<script src="js/validar.js"></script>
<script src="https://www.google.com/recaptcha/api.js?hl=pt-BR"></script>
<script type="text/javascript">
/* Máscaras ER */
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id( el ){
	return document.getElementById( el );
}
window.onload = function(){
	id('telefone').onkeypress = function(){
		mascara( this, mtel );
	}
}
</script>
<style>
/*redes sociais */
.rede{
    width: 32px;
    height: 32px;
    margin-left: 20px;
    display: inline-block;
    border-radius: 50%;
    margin-top: 30px;
	text-align: center;
	font-size: 8px;
}

.rede#facebook{
    background-color: #2372a3;
}

.rede#instagram{
    background-color: #3f729b;
}

.sociais{
color: #fff;
width: 100%;
font-size: 23px;
text-decoration: none;
}

.cond{
	color: #fff;
	text-decoration: none;
}

.cond:hover{
	color: #fff;
	text-decoration: underline #0479F6;
}
</style>
<title>Educa Kids</title>
</head>

<body>
   <header>
      <div class="contenedor">
           <a href="index.php"><img src="images/icon.png" width="70" height="70" alt="Logo Educa Kids" title="Logo Educa Kids" class="imgtopo"></a>
          <h1 style="margin-top: 3px;">Eduka Kids</h1>
          <input type="checkbox" id="menu-bar">
          <label class="icon-menu" for="menu-bar"></label>     
          <nav class="menu">
                 <a href="index.php">Início</a>
                 <a href="atividades.php">Atividades</a>
                 <a href="info.php">Informações</a>
                 <a href="#">Fale Conosco</a>
          </nav>
      </div>
   </header>
   
   <section>   
   <div class="banner">
       <div class="contenedor">
   <h1 class="titulo">Fale Conosco</h1>
   </div>
   </div>
   </section>
   <section>
   <div class="contenedor">
   <h1>Envie-nos uma Mensagem</h1><br><br>
   <div>
   </section>
   
          		<div class="contenedor"><center>
          		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		</center></div>
   
<form action="enviar.php" method="post" class="formulario" onsubmit="return validar();">
    <br>
    <input type="text" name="nome" id="nome" class="formulario_input">
    <label for="" class="formulario_label">Nome Completo</label>
    <input type="email" name="email" id="email" class="formulario_input">
    <label for="" class="formulario_label">E-Mail</label>
    <input type="text" name="telefone" id="telefone" class="formulario_input" maxlength="15">
    <label for="" class="formulario_label">Telefone</label>
    <input type="text" name="mensagem" id="mensagem" class="formulario_input">
    <label for="" class="formulario_label">Mensagem</label>
    <center><div class="g-recaptcha" data-sitekey="6LdsBPIaAAAAAD1EOYApMI3bV0NASI-996GPqssN"></div>
        <br>
        <br>
    </center>
    <input type="submit" value="Enviar" class="formulario_submit"> </form>


<br>
<script src="js/form.js"></script>
  
		<footer class="rodape">
		<div class="container"><center>
		<div class="rede" id="facebook"> <a href="" class="icon-facebook-squared sociais"></a> </div>
        <div class="rede" id="instagram"> <a href="" class="icon-instagram sociais"></a> </div><br><br>
		<a href="info.php" class="cond">Termos e Condições</a>|
		<a href="mapa.php" class="cond">Mapa do Site </a><br><br>
		<span>© Copyright 2021, Eduka Kids - Todos os direitos reservados.</span>
		</center>
		</div>
		</footer>
           <!--Botão voltar para cima-->
        <div class="btn-voltar jbtn-voltar">
            <a class="btn-voltar-link jbtn-voltar-link" href="" title="">
                TOPO
            </a>
        </div>
</body>
</html>
