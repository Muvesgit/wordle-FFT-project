<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Neuton:ital,wght@0,200;0,300;0,400;0,700;0,800;1,400&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <img src="src/wordlelogo.png">
        <h1>?</h1>
        <div class="hiddenhelp">
            <img src="src/howto.png">
        </div>
    </header>

    <div id="pleaseWait" class="pleaseWait">
        <h1>Please wait...</h1>
    </div>

    <div class="maincontainer">
        <div class="row">
					<input id="1" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase(); moveCursor(1);">
					<input id="2" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase(); moveCursor(2);">
					<input id="3" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase(); moveCursor(3);">
					<input id="4" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase(); moveCursor(4);">
					<input id="5" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase();">
        </div>
        <div class="row">
					<input id="6" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase(); moveCursor(6);">
					<input id="7" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase(); moveCursor(7);">
					<input id="8" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase(); moveCursor(8);">
					<input id="9" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase(); moveCursor(9);">
					<input id="10" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase();">
        </div>
        <div class="row">
					<input id="11" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase(); moveCursor(11);">
					<input id="12" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase(); moveCursor(12);">
					<input id="13" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase(); moveCursor(13);">
					<input id="14" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase(); moveCursor(14);">
					<input id="15" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase();">
        </div>
        <div class="row">
					<input id="16" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase(); moveCursor(16);">
					<input id="17" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase(); moveCursor(17);">
					<input id="18" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase(); moveCursor(18);">
					<input id="19" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase(); moveCursor(19);">
					<input id="20" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase();">
        </div>
        <div class="row">
					<input id="21" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase(); moveCursor(21);">
					<input id="22" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase(); moveCursor(22);">
					<input id="23" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase(); moveCursor(23);">
					<input id="24" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase(); moveCursor(24);">
					<input id="25" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase();">
        </div>
        <div class="row">
					<input id="26" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase(); moveCursor(26);">
					<input id="27" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase(); moveCursor(27);">
					<input id="28" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase(); moveCursor(28);">
					<input id="29" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase(); moveCursor(29);">
					<input id="30" type="text" maxlength="1" oninput="this.value = this.value.toUpperCase();">
        </div>
    </div>

    <div class="keyboardcontainer">
			<div class="row">
				<div id="Q" onclick="keyboardInput(event)">Q</div>
				<div id="W" onclick="keyboardInput(event)">W</div>
				<div id="E" onclick="keyboardInput(event)">E</div>
				<div id="R" onclick="keyboardInput(event)">R</div>
				<div id="T" onclick="keyboardInput(event)">T</div>
				<div id="Y" onclick="keyboardInput(event)">Y</div>
				<div id="U" onclick="keyboardInput(event)">U</div>
				<div id="I" onclick="keyboardInput(event)">I</div>
				<div id="O" onclick="keyboardInput(event)">O</div>
				<div id="P" onclick="keyboardInput(event)">P</div>
			</div>
			<div class="row">
				<div id="A" onclick="keyboardInput(event)">A</div>
				<div id="S" onclick="keyboardInput(event)">S</div>
				<div id="D" onclick="keyboardInput(event)">D</div>
				<div id="F" onclick="keyboardInput(event)">F</div>
				<div id="G" onclick="keyboardInput(event)">G</div>
				<div id="H" onclick="keyboardInput(event)">H</div>
				<div id="J" onclick="keyboardInput(event)">J</div>
				<div id="K" onclick="keyboardInput(event)">K</div>
				<div id="L" onclick="keyboardInput(event)">L</div>
			</div>
			<div class="row">
				<div id="Z" onclick="keyboardInput(event)">Z</div>
				<div id="X" onclick="keyboardInput(event)">X</div>
				<div id="C" onclick="keyboardInput(event)">C</div>
				<div id="V" onclick="keyboardInput(event)">V</div>
				<div id="B" onclick="keyboardInput(event)">B</div>
				<div id="N" onclick="keyboardInput(event)">N</div>
				<div id="M" onclick="keyboardInput(event)">M</div>
			</div>
    </div>
</body>
</html>

<script>
var wordSave = "";
var secretWord;

const request = async () => {
	const response = await fetch('https://random-word-api.herokuapp.com/word?length=5');
	const word = await response.json();
	let ok = 1;

	if(word[0].length == 5){
		wordSave = word[0];
		document.getElementById("pleaseWait").style.display = "none";

		secretWord = Array.from(wordSave.toUpperCase());
		// console.log(secretWord);	
	}
}

request();

row0 = Array.from(document.getElementsByClassName("row")[0].children);
row1 = Array.from(document.getElementsByClassName("row")[1].children);
row2 = Array.from(document.getElementsByClassName("row")[2].children);
row3 = Array.from(document.getElementsByClassName("row")[3].children);
row4 = Array.from(document.getElementsByClassName("row")[4].children);
row5 = Array.from(document.getElementsByClassName("row")[5].children);

inputLists = row0.concat(row1,row2,row3,row4,row5);

var enterPointer = 4;
var lowerLimit = 0;

for(let i = 5; i < 30; ++i){
	document.getElementById(parseInt(inputLists[i].id)).readOnly = true;
	document.getElementById(parseInt(inputLists[i].id)).style.opacity = .5;
}

function moveCursor(id){
	if(document.getElementById(id).value.length == 1 && id < 30) {
		document.getElementById(id + 1).focus();
	}
}

document.addEventListener('keyup', (event) => {
	let name = event.key;
	let code = event.code;

	if(code != 'Enter' && code != 'NumpadEnter'){
		if(code != 'Backspace'){
			return;
		}
		if(parseInt(document.activeElement.id) - 1 > lowerLimit){
			document.getElementById(parseInt(document.activeElement.id) - 1).focus();
		}
		return;
	}

	for(let i = enterPointer - 4; i <= enterPointer; ++i){
		if(inputLists[i].value.length == 0 || !(/[a-zA-Z]/).test(inputLists[i].value)){
			alert("Try again!");
			return;
		}
	}

	let winCounter = 0;
	for(let i = enterPointer - 4; i <= enterPointer; ++i){
		console.log(inputLists[i].value)

		document.getElementById(parseInt(inputLists[i].id)).readOnly = true;
		document.getElementById(parseInt(inputLists[i].id)).style.opacity = .5;

		document.getElementById(inputLists[i].value).style.opacity = .5;
		document.getElementById(inputLists[i].value).style.color = "black";

		if(secretWord.includes(inputLists[i].value)){
			document.getElementById(parseInt(inputLists[i].id)).style.backgroundColor = "rgb(219, 188, 102)";
			document.getElementById(inputLists[i].value).style.backgroundColor = "rgb(219, 188, 102)";
			document.getElementById(parseInt(inputLists[i].id)).style.opacity = 1;
			document.getElementById(inputLists[i].value).style.color = "black";
		}
		if(inputLists[i].value == secretWord[i % 5]){
			document.getElementById(parseInt(inputLists[i].id)).style.backgroundColor = "rgb(113, 212, 126)";
			document.getElementById(inputLists[i].value).style.backgroundColor = "rgb(113, 212, 126)";
			document.getElementById(parseInt(inputLists[i].id)).style.opacity = 1;
			document.getElementById(inputLists[i].value).style.color = "black";
			winCounter ++;
		}
	}

	if(winCounter == 5){
		for(let i = 0; i < 30; ++i){
			document.getElementById(parseInt(inputLists[i].id)).readOnly = true;
			if(i > enterPointer){
				document.getElementById(parseInt(inputLists[i].id)).style.backgroundColor = "black";
			}
		}
		alert("You win!");
	}
	else{
		if(enterPointer == 29){
			alert("You lost! The word was " + secretWord.join(''));
		}
	}

	moveCursor(enterPointer + 1);
	for(let i = enterPointer + 1; i <= enterPointer + 5; ++i){
		document.getElementById(parseInt(inputLists[i].id)).readOnly = false;
		document.getElementById(parseInt(inputLists[i].id)).style.opacity = 1;
	}
	enterPointer += 5;
	lowerLimit += 5;

}, false);

function keyboardInput(event){
	for(let i = enterPointer - 4; i <= enterPointer; ++i){
		if(inputLists[i].value == ''){
			inputLists[i].value = event.target.id
			if(i + 1 < enterPointer){
				moveCursor(i + 1);
			}
			break;
		} 
	}
}

</script>