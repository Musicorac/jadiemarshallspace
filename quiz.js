$.ajax( {
	url: 'quiz.csv',
	dataType: 'text',
}).done(getVar);


var qs = [];
var answers = [];
var quiz;
var questions;
function getVar(data) {
	var allRows = data.split(/\r?\n|\r/);
	for( var row=0; row<allRows.length; row++)
	{
		var rowCell = allRows[row].split(',');
		qs.push(rowCell[0]);
		rowCell.shift();
		answers.push(rowCell);
		//console.log(questions[questions.length - 1]);
		//console.log(answers[answers.length - 1]);
	}
	//console.log(questions);
	questions = getQuestions(qs, answers);
	quiz = new Quiz(questions);
	populate();
}

function getQuestions(qs, answers) {
	var res = [];
	for(i=0; i<qs.length-1; i++)
	{
		var q = new Question(qs[i], answers[i], answers[i][0]);
		res.push(q);
	}
	console.log("Questions length: " +res.length);
	return res;
};

function Quiz(questions) {
	this.score=0;
	this.questions=questions;
	this.index=0;
	this.len = questions.length;
	console.log("New Quiz: "+this.score +" " + this.questions.length + " " + this.index);
}

function getIndex(quiz) {
	return quiz.questions[quiz.index];
}

Quiz.prototype.guess = function(answer) {
	if(getIndex(quiz).isCorrectAnswer(answer)) {
		this.score++;
	}
	this.index++;
}

function isEnded(q)
{
	console.log("isEnded: index = " +q.index +", length = " +q.len);
	return q.index === q.len;
}


function Question(text, choices, answer) {
	this.text = text;
	this.choices = choices;
	this.answer = answer;
	console.log("New Question: " +this.text + " " +this.choices +" " +this.answer);
}

function isCorrectAnswer(quiz, choice) {
	console.log("Comparing: "+quiz.answer +" === " +choice);
	return quiz.answer === choice;
}

Question.prototype.isCorrectAnswer = function(choice) {
	console.log("Prototype Comparing: "+this.answer +" === " +choice);
	return this.answer === choice;
}

function populate(){
	if(isEnded(quiz)) {
		showScores();
	}
	else {
		console.log("Populate");
		var element = document.getElementById("question");
		element.innerHTML = getIndex(quiz).text;
		
		var choices = getIndex(quiz).choices;
		//Shuffles order
		shuffle(choices);
		console.log("Shuffled: " +choices);
		for(var i=0; i<choices.length; i++)
		{
			var element = document.getElementById("choice" + i);
			element.innerHTML = choices[i];
			guess("btn"+i, choices[i]);
		}
		
		showProgress();
	}
};

function shuffle(array) {
  for (let i = array.length - 1; i > 0; i--) {
    let j = Math.floor(Math.random() * (i + 1));
    [array[i], array[j]] = [array[j], array[i]];
  }
}

function guess(id, guess) {
	var button = document.getElementById(id);
	button.onclick = function()
	{
		quiz.guess(guess);
		populate();
	}
};

function showProgress() {
	var current = quiz.index +1;
	var element = document.getElementById("progress");
	element.innerHTML = "Question " + current + " of " +quiz.questions.length;
};

function showScores() {
	var gameOverHTML = "<h1>Results</h1>";
	gameOverHTML+= "<h2 id='score'>Your Scores: " +quiz.score +"</h2>";
	var elem = document.getElementById("quiz");
	elem.innerHTML = gameOverHTML;
};


