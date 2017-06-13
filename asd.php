<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form id="test">
<table border="1" cellspacing="0" cellpadding="5">
<tr>
<td>Who was the first president of the United States?</td>
<td>
<input id="q1" maxlength="30" name="q1" size="30" type="text" /></td>
</tr>
<tr>
<td>There are 13 items in a baker's dozen.</td>
<td>
<input name="q2" type="radio" value="true" />
        True |
<input name="q2" type="radio" value="false" />
        False</td>
</tr>
<tr>
<td>What is the capital of Maine?</td>
<td>
<input name="q3" type="radio" value="bangor" />
      Bangor |
<input name="q3" type="radio" value="east overshoe" />
      East Overshoe |
<input name="q3" type="radio" value="portland" />
      Portland |
<input name="q3" type="radio" value="augusta" />
      Augusta |
<input name="q3" type="radio" value="none" />
      None of these</td>
</tr>
<tr>
<td width="30%">Which of the following animals are typically found on an American farm? [Check all that apply]</td>
<td>
<input id="q4" name="q4" type="checkbox" value="pig" />
        Pig |
<input id="q4" name="q4" type="checkbox" value="elephant" />
        Elephant |
<input id="q4" name="q4" type="checkbox" value="cow" />
        Cow |
<input id="q4" name="q4" type="checkbox" value="kangaroo" />
        Kangaroo</td>
</tr>
<tr>
<td>The Nile River's estuary is located in what nation?</td>
<td>
<select id="q5" name="q5">
        <option value="saudi arabia">Saudi Arabia</option>
        <option value="england">England</option>
        <option value="libya">Libya</option>
        <option value="egypt">Egypt</option>
        <option value="israel">Israel</option>
      </select></td>
</tr>
</table>
<input onclick="gradeTest()" name="submit" type="button" value="Grade This Test" />
</form>

<script type="text/javascript">
	function gradeTest(){
		var totalQuestions = 5;
		var correctAnswers = 0;
		var alertText;
		var i;
	}

	var a1 = document.getElementByIf('q1'). value.toLowerCase();
		if (a1 == 'george washingtion') {
			correctAnswers++;
		}
	var a2 = document.getElementsByName('q2');
		for (i=0; i < a2.length; i++) {
			if(a2[i].checked) {
				if(a2[i].value == 'true') {
					correctAnswers++;
					break;
				}
			}
		}

	var a3 = document.getElementsByName('q3');
		for(i = 0; i < a3.length; i++) {
			if(a3[i].checked) {
				if(a3[i].value == 'augusta') {
					correctAnswers++;
					break;
				}
			}
		}
</script>

</body>
</html>