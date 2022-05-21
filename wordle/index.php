<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Neuton:ital,wght@0,200;0,300;0,400;0,700;0,800;1,400&display=swap" rel="stylesheet">
</head>

<body>
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
            <div id="Q">Q</div>
            <div id="W">W</div>
            <div id="E">E</div>
            <div id="R">R</div>
            <div id="T">T</div>
            <div id="Y">Y</div>
            <div id="U">U</div>
            <div id="I">I</div>
            <div id="O">O</div>
            <div id="P">P</div>
        </div>
        <div class="row">
            <div id="A">A</div>
            <div id="S">S</div>
            <div id="D">D</div>
            <div id="F">F</div>
            <div id="G">G</div>
            <div id="H">H</div>
            <div id="J">J</div>
            <div id="K">K</div>
            <div id="L">L</div>
        </div>
        <div class="row">
            <div id="Z">Z</div>
            <div id="X">X</div>
            <div id="C">C</div>
            <div id="V">V</div>
            <div id="B">B</div>
            <div id="N">N</div>
            <div id="M">M</div>
        </div>
    </div>
</body>
</html>

<script>
secretWord = ["S","P","E","A","R"];

row0 = Array.from(document.getElementsByClassName("row")[0].children);
row1 = Array.from(document.getElementsByClassName("row")[1].children);
row2 = Array.from(document.getElementsByClassName("row")[2].children);
row3 = Array.from(document.getElementsByClassName("row")[3].children);
row4 = Array.from(document.getElementsByClassName("row")[4].children);
row5 = Array.from(document.getElementsByClassName("row")[5].children);

inputLists = row0.concat(row1,row2,row3,row4,row5);

var enterPointer = 4;

for(let i = 5; i < 30; ++i){
    document.getElementById(parseInt(inputLists[i].id)).readOnly = true;
}

document.addEventListener('keyup', (event) => {
    let name = event.key;
    let code = event.code;

    if(code != 'Enter' && code != 'NumpadEnter'){
        if(code != 'Backspace'){
            return;
        }
        if(parseInt(document.activeElement.id) - 1 > 0){
            document.getElementById(parseInt(document.activeElement.id) - 1).focus();
        }
    }

    let temp = inputLists[enterPointer].value.length;

    if(temp != 0){
        let winCounter = 0;
        for(let i = enterPointer - 4; i <= enterPointer; ++i){
            // check if real word

            document.getElementById(parseInt(inputLists[i].id)).readOnly = true;
            document.getElementById(parseInt(inputLists[i].id)).style.backgroundColor = "rgb(150, 150, 150)";
            document.getElementById(parseInt(inputLists[i].id)).style.transition = "all .3s ease";

            document.getElementById(inputLists[i].value).style.backgroundColor = "rgb(150, 150, 150)";
            document.getElementById(inputLists[i].value).style.color = "black";

            if(secretWord.includes(inputLists[i].value)){
                document.getElementById(parseInt(inputLists[i].id)).style.backgroundColor = "rgb(219, 188, 102)";
                document.getElementById(inputLists[i].value).style.backgroundColor = "rgb(219, 188, 102)";
                document.getElementById(inputLists[i].value).style.color = "black";
            }
            if(inputLists[i].value == secretWord[i % 5]){
                document.getElementById(parseInt(inputLists[i].id)).style.backgroundColor = "rgb(113, 212, 126)";
                document.getElementById(inputLists[i].value).style.backgroundColor = "rgb(113, 212, 126)";
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
            console.log(document.getElementById(parseInt(inputLists[i].id)));
            document.getElementById(parseInt(inputLists[i].id)).readOnly = false;
        }
        enterPointer += 5;
    }

}, false);

function moveCursor(id){
    if(document.getElementById(id).value.length == 1 && id < 30) {
        document.getElementById(id + 1).focus();
    }
}

</script>