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
<link rel="stylesheet" href="css/atividades.css"><!--css da pagina -->
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
                 <a href="info.php">Informações</a>
                 <a href="contato.php">Fale Conosco</a>
          </nav>
      </div>
   </header>
   
   <main>
    <div class="banner">
        <div class="contenedor">
            <h1 class="titulo">Atividades</h1> </div>
    </div>
        <div class="contenedor">
            <center><h1>APRENDA BRINCANDO!!</h1></center>
            <br> 
            <br>
       </div>
</main> 
<div class="contenedor2">
		<div class="contenedor_tarjeta">
			<a href="quiz/quiz.html">
				<figure id="tarjeta">
					<img src="images/quiz.png" class="frontal" alt="quiz" title="Eduka Kids">
					<figcaption class="trasera">
						<h2 class="titulo">Quiz</h2>
						<hr>
						<p>Matemática, Português e Inglês</p>
					</figcaption>
				</figure>
			</a>
		</div>
    <div class="contenedor3">
    <div class="contenedor_tarjeta">
      <a href="">
        <figure id="tarjeta">
          <img src="images/jogos.png" class="frontal" alt="jogos" title="Eduka Kids">
          <figcaption class="trasera">
            <h2 class="titulo">Jogos</h2>
            <hr>
            <p>Quebra Cabeça, Jogo da Memória </p>
          </figcaption>
        </figure>
      </a>
    </div>
    </div>
        <div class="contenedor4">
    <div class="contenedor_tarjeta">
      <a href="">
        <figure id="tarjeta">
          <img src="images/videos.png" class="frontal" alt="videos" title="Eduka Kids">
          <figcaption class="trasera">
            <h2 class="titulo">Videos</h2>
            <hr>
            <p>Atividades Práticas e Brincadeiras</p>
          </figcaption>
        </figure>
      </a>
    </div>
    </div>
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
<script src="js/modal.js"></script>
</body>
</html>
