

const questionNumber = document.querySelector(".question-number");
const questionText = document.querySelector(".question-text");
const optionContainer = document.querySelector(".option-container");
const answersIndicatorContainer = document.querySelector(".answers-indicator")
const homeBox = document.querySelector(".home-box");
const quizBox = document.querySelector(".quiz-box");
const resultBox = document.querySelector(".result-box");

let questionCounter = 0;
let currentQuestion;
let availableQuestions = [];
let availableOptions = [];
let correctAnswers = 0;
let attempt = 0;

//puxar a questão para avaliableQuestions Array
function setAvailableQuestions(){
	const totalQuestion = quiz.length;
	for(let i=0; i<totalQuestion; i++){
		availableQuestions.push(quiz[i])
	}
}

// definindo o número da pergunta, pergunta e opção
function getNewQuestion(){
	// definindo o número das questões
	questionNumber.innerHTML = "Questões " + (questionCounter + 1)+ " á " + quiz.length;

	// definindo as perguntas
	// obtendo perguntas aleatórias
	const questionIndex = availableQuestions[Math.floor(Math.random() * availableQuestions.length)]
	currentQuestion = questionIndex;
	questionText.innerHTML = currentQuestion.q;
	//pegando a posição do 'questionIndex' de availableQuestion Array;
	const index1= availableQuestions.indexOf(questionIndex);
	//remove o 'questionIndex' do availableQuestion Array, de modo que as perguntas não se repetem;
	availableQuestions.splice(index1,1);
	//show question img if 'img' property exists
	if(currentQuestion.hasOwnProperty("img")){
		const img = document.createElement("img");
		img.src = currentQuestion.img;
		questionText.appendChild(img);
	}
	//definir opções
	//obtendo as opções
	const optionLen = currentQuestion.options.length;
	//puxando as opções para availableOptions Array 
	for (let i=0; i<optionLen; i++){
		availableOptions.push(i)
	}

	optionContainer.innerHTML = '';
	let animationDelay = 0.2;
	// criando opções em html
	for(let i=0; i<optionLen; i++){
		// opções aleatórias
		const optonIndex = availableOptions[Math.floor(Math.random() * availableOptions.length)];
		//pegando a posição de 'optonIndex' de availableOptions
		const index2 = availableOptions.indexOf(optonIndex)
		//remove o 'optonIndex' do availableOptions, fazendo com que não repita a opção 
		availableOptions.splice(index2,1);	
		const option = document.createElement("div");
		option.innerHTML = currentQuestion.options[optonIndex];
		option.id = optonIndex;
		option.style.animationDelay = animationDelay + 's';
		animationDelay = animationDelay + 0.15;
		option.className = "option";
		optionContainer.appendChild(option)
		option.setAttribute("onclick","getResult(this)");
	}
	questionCounter++
}
//obtendo o resultado da pergunta da alternativa atual
function getResult(element){
	const id = parseInt(element.id);
	//comparando as resposta de acordo com a opção selecionada
	if(id === currentQuestion.answer){
		//definindo cor verde para opção correta
		element.classList.add("correct");
		//adiciona o indicador correto
		updateAnswerIndicator("correct");
		correctAnswers++;
	}
	else{
		//definindo cor vermelho para opção incorreta
		element.classList.add("wrong");
		//adiciona o indicador incorreto
		updateAnswerIndicator("wrong");

		//se a resposta estiver incorreta mostrar a resposta correta em verde
		const optionLen = optionContainer.children.length;
		for(let i=0; i<optionLen; i++){
			if(parseInt(optionContainer.children[i].id) === currentQuestion.answer){
				optionContainer.children[i].classList.add("correct");
			}
		}
	}
	attempt++;
	unclickableOptions();
}

//deixar apenas uma opção clicavel 
function unclickableOptions(){
	const optionLen = optionContainer.children.length;
	for(let i=0; i<optionLen; i++){
		optionContainer.children[i].classList.add("already-answered");

	}
}

function answersIndicator(){
	answersIndicatorContainer.innerHTML = '';
	const totalQuestion = quiz.length;
	for(let i=0; i<totalQuestion; i++){
		const indicator = document.createElement("div");
		answersIndicatorContainer.appendChild(indicator);
	}
}

function updateAnswerIndicator(markType){
	answersIndicatorContainer.children[questionCounter-1].classList.add(markType)
}


function next(){
	if(questionCounter === quiz.length){
		quizOver();
	}
	else{
		getNewQuestion();
	}
}

function quizOver(){
	//ocultar a tela do quiz
	quizBox.classList.add("hide");
	//mostrar a tela de Resultado
	resultBox.classList.remove("hide");
	quizResult();
}

//obtendo o resultado do quiz
function quizResult(){
	resultBox.querySelector(".total-question").innerHTML = quiz.length;
	resultBox.querySelector(".total-attempt").innerHTML = attempt;
	resultBox.querySelector(".total-correct").innerHTML = correctAnswers;
	resultBox.querySelector(".total-wrong").innerHTML = attempt - correctAnswers;
	const percentage = (correctAnswers/quiz.length)*100;
	resultBox.querySelector(".percentage").innerHTML = percentage.toFixed(2) + "%";
	resultBox.querySelector(".total-score").innerHTML = correctAnswers +" / " + quiz.length;
}

function resetQuiz(){
	questionCounter = 0;
	correctAnswers = 0;
	attempt = 0;
}

function tryAgainQuiz(){
	//oculta a tela de resultados
	resultBox.classList.add("hide");
	//abre a tela do quiz
	quizBox.classList.remove("hide");

	resetQuiz();
	startQuiz();
}

function goToHome(){
	//oculta a tela dos resultados
	resultBox.classList.add("hide");
	//abre a tela inicial
	homeBox.classList.remove("hide");

	resetQuiz();
}

//#### PONTO DE PARTIDA ####

function startQuiz(){
	//ocultar a tela inicial
	homeBox.classList.add("hide");
	//mostrar tela do quiz
	quizBox.classList.remove("hide");
	// definindo as questões avaliableQuestion Array
	setAvailableQuestions();
	// vamos ligar para obter o getNewQuestion(); function
	getNewQuestion();
	//criando indicadores de resposta
	answersIndicator();

}

window.onload = async function (){

	homeBox.querySelector(".total-question").innerHTML = quiz.length;
}