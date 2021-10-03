<?php
session_start();
include 'cn.php';
//receber os dados e armazenar em variaveis 

$nome= $_POST['nome'];
$email= $_POST['email'];
$telefone= $_POST['telefone'];
$mensagem= $_POST['mensagem'];
date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d H:i:s');
//consulta para inserir
$insertar = "INSERT INTO contato(Nome, Email, Telefone, Mensagem, Data) VALUES ('$nome','$email','$telefone','$mensagem','$data')";

/*$verificar_usuario= mysqli_query($conexion, "SELECT * FROM contato WHERE Email = '$email'");
if(mysqli_num_rows($verificar_usuario) > 0){
	$_SESSION['msg'] = "<h3 style='color:red;'>Você já enviou um e-mail.<h3>";
	header("Location: contato.php");
	exit;
}


if($_SESSION['captcha'] == $_POST['captcha']){
$resultado= mysqli_query($conexion, $insertar);
	
	$_SESSION['msg'] = "<h3 style='color:green;'>E-mail enviado com sucesso. Entraremos em contato o mais breve possível!<h3>";
	        //email 
        $to = "laurahelenasanchez@gmail.com";
        $subject = 'Novo formulário enviado pelo cliente!';

        $mensagem = "
        <html>
            <head>
             <title>" . $subject . "</title>
            </head>
            <body>
				<h2>Informações</h2><br>
				<p>
					<h4>Dados para Contato.</h4> <br/>
                    <b>Nome: </b> " . $nome . "<br/>
                    <b>E-mail: </b> " . $email . "<br/> 
					<b>Telefone: </b> " .$telefone. "<br/>
					<b>Mensagem: </b> " .$mensagem. "<br/>		
                </p>
				
		";
				
		
		$mensagem = $mensagem . "</p></body> </html>";

        // To send HTML mail, the Content-type header must be set
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= 'From:'. $nome ." <". $email ."> \r\n";

        $envio = mail($to, $subject, $mensagem, $headers);
		//email
		
	header("Location: contato.php");
}else{
	$_SESSION['msg'] = "<h3 style='color:red;'>ERRO! Caracteres anti-robô inválidos.<h3>";
	header("Location: contato.php");
}

//encerrar sessao
mysqli_close($conexion);*/
?>