<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
<link rel="stylesheet" href="css/fontello.css"> <!-- folha de estilo dos icones facebook, etc -->
<link rel="stylesheet" href="css/style.css"> <!--folha de estilo do layout -->
<link rel="stylesheet" href="css/menu.css"> <!--folha de estilo do menu -->
<link rel="stylesheet" href="css/banners.css"> <!--folha de estilo do topo do site -->
<!-- Script de subir ao topo -->
<script type="text/javascript" src="//code.jquery.com/jquery-3.1.1.min.js"></script><!--codigo jquery para o botao de subir ao topo -->
<script type="text/javascript" src="js/script.js"></script><!--js do botao de subir ao topo -->
<link rel="stylesheet" href="css/subir.css"><!--estilo do botao de subir ao topo -->
<!--fim -->
<link rel="shortcut icon" href="images/guia.jpg" type="image/jpg" /> <!--imagem do guia do navegador -->
<title>Eduka Kids</title>
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

    .pedir{
        width: 100%;
    }
    
    h4{
        color: red;
        margin-left: 50px;
    }
    
    p{
        margin-left: 70px;
    }

.cond{
	color: #fff;
	text-decoration: none;
}

.cond:hover{
	color: #fff;
	text-decoration: underline #bc2026;
}	
</style>
</head>

<body>
   <header>
      <div class="contenedor"><!--alinhamento do site -->
          <a href="index.php"><img src="images/icon.png" width="70" height="70" alt="Logo SC Food" title="Logo SC Food"></a>
          <h1 style="margin-top: 3px;">Eduka Kids</h1>
          <input type="checkbox" id="menu-bar">
          <label class="icon-menu" for="menu-bar"></label>     
          <nav class="menu"><!--menu -->
                 <a href="index.php">Início</a>
                 <a href="atividades.php">Atividades</a>
                 <a href="#">Informações</a>
                 <a href="contato.php">Fale Conosco</a>
          </nav>
      </div>
   </header>
   
<main>
    <div class="banner">
        <div class="contenedor">
            <h1 class="titulo">Informações</h1> </div>
    </div>
</main>
   <br>
   <section>
      <div class="contenedor">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/lKrZ_aVGwUU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>

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
        <!-- fim botão-->
</body>
</html>
