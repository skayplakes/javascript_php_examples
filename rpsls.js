var choices = {rock : {name: "Rock", defeats: ["scissors","lizard"]},
				paper: {name: "Paper", defeats: ["rock","spock"]},
				scissors: {name: "scissors", defeats: ["paper","lizard"]},
				lizard: {name: "Lizard", defeats:["paper","spock"]},
				spock: {name: "Spock", defeats:["scissors", "rock"]}
			};

var computerChoice = Math.random();
if (computerChoice < 0.2) {
	computerChoice = "rock";
} else if (computerChoice <= 0.4) {
	computerChoice = "paper";
} else if (computerChoice <= 0.6) {
	computerChoice = "scissors";
} else if (computerChoice <= 0.8) {
	computerChoice = "lizard";
} else {
	computerChoice = "spock";
}

var userInput = prompt("Do you choose rock, paper, scissors, lizard, or spock")