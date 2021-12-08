<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
<link rel="stylesheet" href="css/fontello.css"> <!-- folha de estilo dos icones facebook, etc -->
<link rel="stylesheet" href="css/style.css"> <!--folha de estilo do layout -->
<link rel="stylesheet" href="css/menu.css"> <!--folha de estilo do menu -->
<!-- Script de subir ao topo -->
<script type="text/javascript" src="//code.jquery.com/jquery-3.1.1.min.js"></script><!--codigo jquery para o botao de subir ao topo -->
<link rel="stylesheet" href="css/subir.css"><!--estilo do botao de subir ao topo -->
<!--fim -->
<link rel="shortcut icon" href="images/guia.jpg" type="image/jpg" /> <!--imagem do guia do navegador -->
<!-- slide -->
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/contato.css">

	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/main.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<title>Eduka Kids</title>
<style>
/*redes sociais */
.rede{
    width: 32pxpx;
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
</style>
<script>
            $(document).ready(function (){
                if(localStorage.length != 0)
                    window.location.href = location.origin
                
            })
        </script>
</head>
<body>
   <header>
      <div class="contenedor"><!--alinhamento do site -->
          <a href="index.php"><img src="images/icon.png" width="70" height="70" alt="Logo Educa Kids" title="Logo Educa Kids" class="imgtopo"></a>
          <h1 style="margin-top: 3px;">Eduka Kids</h1>
          <input type="checkbox" id="menu-bar">
          <label class="icon-menu" for="menu-bar"></label>     
      </div>
   </header>
   
   <main>
      <section>
        <img src="images/banner.png" class="banner" alt="Banner" title="Banner"><!--banner do site -->
      </section>
   </main> 

<section>
    <div class="container">
      <div class="formulario"><br>
      <input type="email" name="email" id="email" class="formulario_input">
      <label for="" class="formulario_label">Email</label>
      <input type="password" name="password" id="senha" class="formulario_input">
      <label for="password" class="formulario_label">Senha</label>
      <button id="logar" class="formulario_submit">Entrar</button>
        </div><br>
    <script src="js/form.js"></script>
    </div>
  </section>
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

<script>
    $("#logar").on("click", function() {
        var data = JSON.stringify({
            "email": $('#email').val(),
            "senha": $('#senha').val()
        });
        var config = {
            method: 'post',
            url: 'https://localhost:5001/api/User/BuscaLoginValido',
            headers: { 
                'Content-Type': 'application/json'
            },
            data: data
        };
        axios(config)
            .then(res => {
                if(res != null){
                    window.localStorage.setItem('login', res.data)
                    window.location.href = location.origin
                }
            }).catch(err => {
                console.log('Error: ' + err)
            })
    });
</script>