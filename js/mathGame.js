//if we click on start/reset button
var xtime, myCounter, gameruning = false, rightanswer, scorecounter;
function startCountdown() {
    show("timeremaining");
    myCounter = setInterval(function () { xtime--; document.getElementById("timeremainingvalue").innerHTML = xtime;
if (xtime == 0) stopCountdown();
    }, 1000);
}
function stopCountdown() {
    clearInterval(myCounter);
    document.getElementById("gameover").innerHTML = ("<p>game over</p><p>Your score is: " + document.getElementById("scorevalue").innerHTML + "</p>");
    show("gameover");
    hide("whatToDo");
    hide("timeremaining");
    hide("correct");
    hide("wrong");
    document.getElementById("startreset").innerHTML = ("Start Game"); gameruning = false;
}
function hide(Id) {
    document.getElementById(Id).style.display = "none";
}
function show(Id) {
    document.getElementById(Id).style.display = "block";
}
function generateQA() {
    var numberone, numbertwo, rightchoice, temp;
    rightchoice = 1 + Math.round(Math.random() * 3); 
    numberone = 1 + Math.round(Math.random() * 9);
    numbertwo = 1 + Math.round(Math.random() * 9);
    rightanswer = numberone * numbertwo;
document.getElementById("question").innerHTML = (numberone + "x" + numbertwo);
    document.getElementById("box" + rightchoice).innerHTML = rightanswer;
    var answers = [rightanswer];
    for (i = 1; i < 5; i++){
        if(i != rightchoice){
            do {
            temp=(1 + Math.round(Math.random() * 10)) * (1 + Math.round(Math.random() * 10));
            }while(answers.indexOf(temp)>-1)
    document.getElementById("box"+ i).innerHTML = temp;
    answers.push(temp);                  
        }
    }
}
for(i = 1; i<5; i++){
    document.getElementById("box"+i).onclick = function() {
    if(gameruning == true){
        if(this.innerHTML == rightanswer){
        scorecounter = scorecounter + 1;
            hide("wrong");
        show("correct");
        setTimeout(function(){document.getElementById("correct").style.display = "none"},1000);
  document.getElementById("scorevalue").innerHTML = (scorecounter);
    generateQA();
        }else{
            hide("correct");
        show("wrong");
   setTimeout(function(){document.getElementById("wrong").style.display = "none"},1000);
    }            
    }
}
}
document.getElementById("startreset").onclick = function () {
    if (gameruning == true) {
        location.reload();  
    } else {
        show("timeremaining");
        hide("gameover");
        show("whatToDo");
        xtime = 60;
        gameruning = true;   
        document.getElementById("scorevalue").innerHTML = ("0");
        document.getElementById("timeremainingvalue").innerHTML = ("60");
        scorecounter = 0;
        startCountdown();        
        document.getElementById("startreset").innerHTML = ("Reset Game"); 
        generateQA();
} }
;