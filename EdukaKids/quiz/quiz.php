<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Quiz App</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/styleQuiz.css">
</head>
<body>

	<div class="home-box custom-box">
		<h3> Instruções:</h3>
		<p>Número total de questões: <span class="total-question"></span></p>
		<button type="button" class="btn" onclick="startQuiz()">Iniciar o Quiz</button>
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

<script src="../js/question.js"></script>
<script src="../js/app.js"></script>
</body>
</html>


