<!DOCTYPE html>
<html>
<head>

 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>javascript tests</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		/*.black {
			background-color: black;
			width: 100px;
			height: 100px;
			display: inline-block;
			margin: 0;
		}
		.salmon {
			background-color: grey;
			width: 100px;
			height: 100px;
			display: inline-block;
			margin: 0;
		}*/
		/*.row {
			display: inline-block;
		}*/
	</style>
</head>
<body>

	<!-- <div id="content" class="row">
		<div id="Monday" class="day"></div>
		<div id="Tuesday" class="day"></div>
		<div id="Wednesday" class="day"></div>
		<div id="Thursday" class="day"></div>
		<div id="Monday" class="day"></div>
		<div id="Monday" class="day"></div>
		<div id="Monday" class="day"></div>
	</div> -->


	<!-- <h2>Guess The Number</h2> -->
<!-- <input type="text" id="input1"> -->
<!-- <button id="check">check</button> -->
<!-- <button id="even">even_odd</button> -->


<!-- <h3 id='great'></h3> -->
<!-- <h3 id='odd'></h3> -->

<!-- <input type="text" id="input"> -->
<!-- <button id="loop">loop</button> -->
<!-- <h3 id='great'></h3> -->




<!-- <span id="question">Lorem Ipsum</span>
<span id="question">Lorem Ipsum</span>
<span id="question">Lorem Ipsum</span>
<span id="question">Lorem Ipsum</span>
<span id="question">Lorem Ipsum</span> -->
<h2 id="questionTitle"></h2>
<h3 id="selectionList"></h3>
<!-- <input type="text" id="input2"> -->
<button id="nextButton">Next</button>

<script type="text/javascript">


var allQuestions = [{
	question: 'What is the capital city of Australia?',
	choices: ['Sydney', 'Melbourne', 'Canberra', 'London'],
	correctAnswer: 2
},
{
	question: 'Who won the 2014 FIFA World Cup?',
	choices: ['Brazil', 'England', 'Germany', 'Spain'],
	correctAnswer: 2
},
{
	question: 'What book series is authored by J.K Rowling?',
	choices: ['Game of Thrones', 'Hunger Games', 'Twilight', 'Harry Potter'],
	correctAnswer: 3
},
{	
	question: 'The Eiffel Tower is located in which following country?',
	choices: ['Italy', 'France', 'Iceland', 'Mexico'],
	correctAnswer: 1
}];

//Reference to tags
var questionTitle = document.getElementById('questionTitle');
var selectionList = document.getElementById('selectionList');
var nextButton = document.getElementById('nextButton');

//Initiating some variables
var i = 0;
var length1 = allQuestions.length;


nextButton.onclick = function() {
    /*itterate through questions*/    
    if(i>allQuestions.length -1){/*go to first when reached last*/
       i=0;       
    }    
    populateQuestion(i);
    i++;
};

function populateQuestion(qNum) {
    var individualQuestion = allQuestions[i];
    questionTitle.innerText = individualQuestion.question;
    
    selectionList.innerHTML = ""; //reset choices list
    for(key in individualQuestion.choices){
        var radioBtnName = "question"+i+"_choice";
        var choiceText = individualQuestion.choices[key];
        selectionList.appendChild(createLi(radioBtnName,choiceText));
    }
}

function createLi(name, choiceText) {
        var e = document.createElement('li');
        var radioHtml = '<input type="radio" name="' + name + '"';    
        radioHtml += '/>';
        radioHtml += choiceText;        
        e.innerHTML = radioHtml;        
        return e;
    }

function gradeTest() {
	var correctAnswer = 0;
}
	
	// var allQuestions = [{
	// 	question: 'What\'s my name?',
	// 	choices: ['mark', 'justin', 'heisenberg'],
	// 	answer: 3
	// },

	// {
	// 	question: 'What\'s the date?',
	// 	choices: ['now', 'yesterday', 'tomorrow'],
	// 	answer: 1	
	// },

	// {
	// 	question: 'What\'s the plan?',
	// 	choices: ['no', 'yes', 'mayber'],
	// 	answer: 3
	// },

	// {
	// 	question: 'How\'s the weather?',
	// 	choices: ['fine', 'rainy', 'sunny'],
	// 	answer: 2
	// },

	// {
	// 	question: 'What\'s the time?'
	// 	choices: ['10', '6', '3'],
	// 	answer: 3
	// }];

	// var quiz = document.getElementById('quiz');
	// var answer = document.getElementById('answer');
	// var next = document.getElementById('btn');

	// var counter = 0;
	// var overallGrade = 5;
	// var length1 = allQuestions.length;

	// document.getElementById('btn').onclick = function(){
	// 	for(i=0; i<allQuestions; i++) {
	// 		document.getElementById.innerHTML = array[counter];
	// 	}
	// };





	// var counter = 0;
	// document.getElementById('btn').onclick = function(){
		






	// 	document.getElementById('answer').innerHTML = array[counter];
	// 	counter++;
	// }


	// var array = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

	// var counter = 0;
	// document.getElementById('btn').onclick = function(){
	// 	alert(array[counter]);
	// 	counter++;
	// }


</script>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>