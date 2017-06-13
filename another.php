<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h3></h3>
	<input type="text" id="input">
	<button type="submit" id="submit">Submit</button>

	<script type="text/javascript">
		var answers = new Array(5);
			answers[0] = A;
			answers[1] = B;
			answers[2] = C;
			answers[3] = A;
			answers[4] = D;

		var currentQues = 0;
		var numQues = answers.length;
		var numChoi = 4;

		function getScore(form) {
			var score = 0;
			var currElt;
			var currSelection;
			for (i=0; i<numQues; i++) {
				currElt = i*numChoi;
				for (j=0; j<numChoi; j++) {
					currSelection = form.elements[currElt + j];
					if (currSelection.checked) {
						if (currSelection.value == answers[i]) {
							score++;
						break; }
					}
				}
			}



/* following is un-necessary unless you want to see answer
  var correctAnswers = '';
  for (var i=1; i<=numQues; i++) { 
    correctAnswers += i + ". " + answers[i-1] + "\r\n";
  }
  alert(correctAnswers);
*/

 score = Math.round(score/numQues*100); 						// Works out percentage
 form.percentage.value = score + "&#37;";							// display score value
 return false;										// make form NOT reset the page
}
function clearQuestions() {
  var sel = document.getElementById('questionBlock').getElementsByTagName('div');
  for (var i=0; i<sel.length; i++) {
	document.getElementById(sel[i].id).style.display = 'none';
  }
}
function nextQuestion() {
  clearQuestions();
  document.getElementById('q'+(currentQues+1)).style.display = 'block'; 
  currentQues++;  if (currentQues > numQues) { currentQues--; }
}
 </script>

</HEAD>
<BODY>
<h3>World Cup Quiz</h3>

<form name="quiz" onsubmit="return getScore(this)">
<div id="questionBlock">
<div id="q1" class="questionBlock">
1. Who has won the World Cup the Most?
 <ul style="margin-top: 1pt">
  <li><label><input type="radio" name="q1" value="Brazil">Brazil</label></li>
  <li><label><input type="radio" name="q1" value="Argentina">Argentina</label></li>
  <li><label><input type="radio" name="q1" value="Italy">Italy</label></li>
 </ul>
</div>

<div id="q2" class="questionBlock">
2. First team to win the World Cup?
 <ul style="margin-top: 1pt">
  <li><label><input type="radio" name="q2" value="England">England</label></li>
  <li><label><input type="radio" name="q2" value="Italy">Italy</label></li>
  <li><label><input type="radio" name="q2" value="Uruguay">Uruguay</label></li>
 </ul>
</div>

<div id="q3" class="questionBlock">
3. Original World Cup Trophy Name?
 <ul style="margin-top: 1pt">
  <li><label><input type="radio" name="q3" value="FIFA World Cup">FIFA World Cup</label></li>
  <li><label><input type="radio" name="q3" value="World Cup Trophy">World Cup Trophy</label></li>
  <li><label><input type="radio" name="q3" value="Jules Rimet Trophy">Jules Rimet Trophy</label></li>
 </ul>
</div>

<div id="q4" class="questionBlock">
4.When did England win the World Cup?
 <ul style="margin-top: 1pt">
  <li><label><input type="radio" name="q4" value="1966">1966</label></li>
  <li><label><input type="radio" name="q4" value="1970">1970</label></li>
  <li><label><input type="radio" name="q4" value="1974">1974</label></li>
 </ul>
</div>

<div id="q5" class="questionBlock">
5.Fewest goals conceded in the World Cup?
 <ul style="margin-top: 1pt">
  <li><label><input type="radio" name="q5" value="Angola">Angola</label></li>
  <li><label><input type="radio" name="q5" value="Ivory Coast">Ivory Coast</label></li>
  <li><label><input type="radio" name="q5" value="Canada">Canada</label></li>
 </ul>
</div>

<div id="q6" class="questionBlock">
6.Who's played in the most World Cups?
 <ul style="margin-top: 1pt">
  <li><label><input type="radio" name="q6" value="Beckham">Beckham</label></li>
  <li><label><input type="radio" name="q6" value="Cafu">Cafu</label></li>
  <li><label><input type="radio" name="q6" value="Neville">Neville</label></li>
 </ul>
</div>

<div id="q7" class="questionBlock">
7.In a penalty shootout how many goals have England missed?
 <ul style="margin-top: 1pt">
  <li><label><input type="radio" name="q7" value="5">5</label></li>
  <li><label><input type="radio" name="q7" value="6">6</label></li>
  <li><label><input type="radio" name="q7" value="7">7</label></li>
 </ul>
</div>

<div id="q8" class="questionBlock">
8.Name of the World Cup Ball?
 <ul style="margin-top: 1pt">
  <li><label><input type="radio" name="q8" value="Nike T90">Nike T90</label></li>
  <li><label><input type="radio" name="q8" value="Jabulani">Jabulani</label></li>
  <li><label><input type="radio" name="q8" value="Mitre">Mitre</label></li>
 </ul>
</div>

<div id="q9" class="questionBlock">
9.Who got sent off in the last World Cup Final?
 <ul style="margin-top: 1pt">
  <li><label><input type="radio" name="q9" value="Zidane">Zidane</label></li>
  <li><label><input type="radio" name="q9" value="Materazzi">Materazzi</label></li>
  <li><label><input type="radio" name="q9" value="Henry">Henry</label></li>
 </ul>
</div>

<div id="q10" class="questionBlock">
10.Who missed the 1990 World Cup shootout for England?
 <ul style="margin-top: 1pt">
  <li><label><input type="radio" name="q10" value="Lineker">Lineker</label></li>
  <li><label><input type="radio" name="q10" value="Waddle">Waddle</label></li>
  <li><label><input type="radio" name="q10" value="Beardsley">Beardsley </label></li>
 </ul>
</div>

<div id="q11" class="questionBlock">
<input type="submit" value="Submit">
Score = <strong><input type="text" size="5" name="percentage" disabled></strong>
</div>

<button onclick="nextQuestion()">Next Question</button>
</div>
</form>

	

</body>
</html>