

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="css/fontello.css"> <!-- folha de estilo dos icones facebook, etc -->
        <link rel="stylesheet" href="css/style.css"> <!--folha de estilo do layout -->
        <link rel="stylesheet" href="css/menu.css"> <!--folha de estilo do menu -->
        <link rel="stylesheet" href="css/subir.css"><!--estilo do botao de subir ao topo -->
        <!--fim -->
        <link rel="shortcut icon" href="images/guia.jpg" type="image/jpg" /> <!--imagem do guia do navegador -->
        <!-- slide -->
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    </head>
    <body>
    <!-- Banner Padrão do login -->
    <div class="bg-image-banner mb-5 pb-5">
        <div class="container" style="padding-top: 5%;">
            <div class="row">
                <h1><b>Bootstrap Tutorial</b></h1> </br>
            </div>
            <div class="row description">
                <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
                responsive, mobile-first projects on the web.</p>
            </div>
        </div>
    </div>

    <!-- Formulario de login -->
    <div class="row d-flex justify-content-center">
        <div class="mb-3 col-5">
            <label for="nome" class="form-label">Email address</label>
            <input type="email" class="form-control" id="nome" aria-describedby="emailHelp">
        </div>
    </div>

    <div class="row d-flex justify-content-center">
        <div class="mb-3 col-5">
            <label for="senha" class="form-label">Password</label>
            <input type="password" class="form-control" id="senha">
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button id="logar" class="btn btn-primary">Submit</button>
    </div>

    </br>

    <!-- Rodapé -->
    <footer class="rodape mt-5 pt-5">
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
            "nome": $('#nome').text.toString(),
            "senha": $('#senha').text.toString()
        });
        var config = {
            method: 'post',
            url: 'https://localhost:5001/api/Login/BuscaLoginValido',
            headers: { 
                'Content-Type': 'application/json'
            },
            data: data
        };
        axios(config)
            .then(res => {
                if(res != null){
                    window.localStorage.setItem('login', res)
                    window.location.href = location.origin
                }
            }).catch(err => {
                console.log('Error: ' + err)
            })
    });
</script>

<style>
    *{
        padding: 0;
        margin: 0;
    }
    .bg-image-banner {
        width: 100%;
        height: 70vh;
        background-image: url('./images/banner.png');
        background-size: cover;
        background-repeat: no-repeat;
    }
    .description {
        width: 50%;
    }
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