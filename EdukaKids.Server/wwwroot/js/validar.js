function validar(){
	var nome, email, telefone, expresion;
	nome = document.getElementById("nome").value;
	email = document.getElementById("email").value;
	telefone = document.getElementById("telefone").value;
	mensagem = document.getElementById("mensagem").value;
	expresion = /\w+@\w+\.+[a-z]/;
	
	if(nome ==="" || email ==="" || telefone === "" || mensagem === ""){
		alert("Todos os campos são obrigatórios");
		return false;
	}
	else if(nome.length>60){
		alert("O nome é muito grande");
		return false;
	}
    else if(email.length>60){
	alert("O E-Mail é muito grande");
	return false;
	}
	else if (!expresion.test(email)){
	alert("O E-Mail não é válido");
	return false;
	}
	else if(telefone.length>15){
	alert("O telefone é muito grande");
	return false;
	}
	else if(mensagem.length>200){
	alert("A mensagem é muito grande");
	return false;
	}
	$.ajax({
		type: "GET",
		url: "https://localhost:5001/api/Values",
		success: (res) => {
			alert(res);
		},
		error: (err) => {
			console.log(err);
		}
	});
	alert("enviado");
	return true;
}