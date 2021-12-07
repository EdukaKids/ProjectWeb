<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Quiz App</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/styleQuiz.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="//code.jquery.com/jquery-3.1.1.min.js"></script><!--codigo jquery para o botao de subir ao topo -->
</head>
<body>

	<div class="home-box custom-box">
		<h3> Instruções:</h3>
		<p>Número total de questões: <span class="total-question"></span></p>
		<button type="button" class="btn" onclick="startQuiz()">Iniciar o Quiz</button>
		<button id="btn-master" class="btn" onclick="document.getElementById('id01').style.display='block'">adicionar o quiz</button>
	</div>

	<div class="quiz-box custom-box hide">
		<div class="question-number">
			
		</div>
		<div class="question-text">
			
		</div>
		<div class="option-container">
			
		</div>
		<div class="next-question-btn">
			<button type="button" class="btn" onclick="next()">Prosseguir</button>
		</div>
		<div class="answers-indicator">
			
		</div>
	</div>

	<div class="result-box custom-box hide">
		<h1>Resultado do Quiz</h1>
		<table>
			<tr>
				<td>Total de Questões</td>
				<td><span class="total-question"></span></td>
			</tr>
			<tr>
				<td>Tentativas</td>
				<td><span class="total-attempt"></span></td>
			</tr>
			<tr>
				<td>Corretas</td>
				<td><span class="total-correct"></span></td>
			</tr>
			<tr>
				<td>Erradas</td>
				<td><span class="total-wrong"></span></td>
			</tr>
			<tr>
				<td>Porcentagem</td>
				<td><span class="percentage"></span></td>
			</tr>
			<tr>
				<td>Sua Pontuação Total</td>
				<td><span class="total-score"></span></td>
			</tr>
		</table>
		<button type="button" class="btn" onclick="tryAgainQuiz()">Tente Novamente</button>
		<button type="button" class="btn" onclick="goToHome()">Pagina Incial</button>
	</div>

	<!-- Modal -->
	<title>W3.CSS</title>

	<div class="w3-container">
		<div id="id01" class="w3-modal">
			<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

			<div class="w3-center"><br>
				<h3>Formulario de perguntas e respostas novas</h3>
			</div>

			<div class="w3-container">
				<div class="w3-section">
				<label><b>Pergunta</b></label>
				<input id="perguntas" class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter pergunta" name="pergunta" required>
				
				<label><b>Respostas</b></label><br/>
				<label>1:</label>
				<input id="0" class="w3-input w3-border" type="text" name="resposta" size="4" maxlength="4" style="width: 60px; margin-bottom: 4px;" required>

				<label>2:</label>
				<input id="1" class="w3-input w3-border" type="text" name="resposta" size="4" maxlength="4" style="width: 60px; margin-top: 4px; margin-bottom: 4px;" required>
				
				<label>3:</label>
				<input id="2" class="w3-input w3-border" type="text" name="resposta" size="4" maxlength="4" style="width: 60px; margin-top: 4px; margin-bottom: 4px;" required>
				
				<label>4:</label>
				<input id="3" class="w3-input w3-border" type="text" name="resposta" size="4" maxlength="4" style="width: 60px; margin-bottom: 4px; margin-top: 4px;" required>

				<label><b>Resposta Correta: </b></label>
				<select id="resposta" name="resposta" required>
					<option value="0">1</option>
					<option value="1">2</option>
					<option value="2">3</option>
					<option value="3">4</option>
				</select><br/><br/>

				<input id="file" type="file" required><br/>

				<button id="salvar" class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Salvar</button>
				</div>
			</div>

			<div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
				<button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
			</div>

			</div>
		</div>
	</div>

<script src="../js/question.js"></script>
<script src="../js/app.js"></script>
</body>
</html>

<script>
	$(document).ready(function() {
		var data = localStorage.getItem('login')
		var url = `${window.location.origin}/api/User/${data}`

		$('#btn-master').hide()

		var loading = true

		axios.get(url).then(res => {
			console.log('login ==== ' + res.data)
			if(res.data === 'Manager'){
				$('#btn-master').show()
			}
			else {
				$('#btn-master').hide()
			}
			loading = false
		}).catch(err => {
			console.log(err)
		})
	})

	$('#salvar').on('click', () => {

		var isInformado = true;
		var respostas = []
		if($('#perguntas').val() != '') {
			for(let i = 0; i < 4; i++){
				respostas[i] = $('#' + i).val()
				if($('#' + i).val() == ''){
					isInformado = false
					break
				}
			}
			if(isInformado){
				var value = parseInt($('#resposta').val())

				if($('#file').val() != ''){
					console.log($('#file')[0].files[0])

					var data = new FormData()
					data.append('Perguntas', $('#perguntas').val());
					for(let i = 0; i < 4; i++){

						data.append('Respostas[' + i + ']', respostas[i]);
					}
					
					data.append('Correta', value);
					data.append('File', $('#file')[0].files[0]);

					console.log(data)

					var config = {
						method: 'post',
						url: window.location.origin + "/api/Quiz",
						headers: {
							'Content-type': 'multipart/form-data'
						},
						data: data
					}
					axios(config).then(res => {
						console.log(res)
					}).catch(err => {
						console.log(err)
					})
				}
			}
		}
		//window.location.reload()
	})
</script>
