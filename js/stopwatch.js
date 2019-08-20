$(function(){
    var appmode=false, timeCounter=0, lapCounter=0, myInterval, lapNumber=0, timeminute=0, timesecond=0, timemiliseconds=0, timecentisecond=0, lapminute=0, lapsecond=0, lapcentisecond=0, timer=false, start_time, time=0, timer_time, lap_start, tempInterval;   
    hideShowButtons("#startButton","#lapButton");
    $("#timerBtn").show();
    $("#timerControlUp").hide();
            $("#timerControlDown").hide();
    $("#timerBtn").click(function(){
        hideShowButtons("#startButton","#resetButton");
            clearInterval(myInterval);
        timeCounter=0;
        lapCounter=0;
            updateTime();
        timerControl();
    });
    $("#startButton").click(function(){
        if(timer==false){
            //mode on
        appmode=true;
        //show stop and lap buttons
        hideShowButtons("#stopButton","#lapButton");
        //strat counter
        startCounting();
        }else{
            //tmier start
            start_time =new Date().getTime()+timecentisecond*100+timeminute*60000+timesecond*1000;
            startTimer();
            
        }
    });
    $("#stopButton").click(function(){
         
        if(timer==false){
            if (timer_time) {
        time += new Date().getTime() - start_time;
        start_time = 0;
        clearInterval(timer_time);
        timer_time = null;
        }
            appmode=false;
        hideShowButtons("#resumeButton","#resetButton");
        }
        else{
            hideShowButtons("#startButton","#resetButton");
            $('audio').each(function(){
    this.pause(); // Stop playing
    this.currentTime = 0; // Reset time
}); 
            if (myInterval) {
                start_time = 0;
//              timeminute=0;
//            timesecond=0;
//            timecentisecond=0;
            $("#timeminute").text(format(timeminute));
        $("#timesecond").text(format(timesecond));
        $("#timecentisecond").text(formatCentisecond(timecentisecond)); 
        clearInterval(myInterval);
                 
        myInterval = null;
        }
            $("#timerControlUp").show();
        $("#timerControlDown").show();
            
        }
    });
    $("#resumeButton").click(function(){
        if(timer==false){
            appmode=true;
        hideShowButtons("#stopButton","#lapButton");
        if (timer_time) {
        time += new Date().getTime() - start_time;
        start_time = 0;
        clearInterval(timer_time);
        timer_time = null;
    } 
            startCounting();
        }
    });
    $("#resetButton").click(function(){
        if(timer==false){
            
            location.reload(); 
        }else{
          $('audio').each(function(){
    this.pause(); // Stop playing
    this.currentTime = 0; // Reset time
}); 
            hideShowButtons("#startButton","#resetButton");
            $("#timerControlUp").show();
            $("#timerControlDown").show();
            temptime=0;
            clearInterval(myInterval);
            timeminute=0;
            timesecond=0;
            timecentisecond=0;
            $("#timeminute").text(format(timeminute));
        $("#timesecond").text(format(timesecond));
        $("#timecentisecond").text(formatCentisecond(timecentisecond));
        }       
    });
    $("#lapButton").click(function(){
        if(appmode){
            //clearInterval(timer_time);
            lap_start=new Date().getTime();
            lapCounter = 0 ;
            addLap();
            //startCounting();
        }
    });
//mouse events
    $("#minutUp").mousedown(function(){
        
        tempInterval=setInterval(function(){
            timeminute=timeminute+1;
        $("#timeminute").text(format(timeminute));
        },100);
    });
    $("#minutUp").mouseup(function(){
       clearInterval(tempInterval);
    });
    $("#minutUp").mouseleave(function(){
       clearInterval(tempInterval);
    });
    $("#secondUp").mousedown(function(){
        tempInterval=setInterval(function(){
        timesecond=timesecond+1;
        $("#timesecond").text(format(timesecond));
            },100);
    });
    $("#secondUp").mouseup(function(){
       clearInterval(tempInterval); 
    });
    $("#secondUp").mouseleave(function(){
       clearInterval(tempInterval); 
    });
    $("#centisecondUp").mousedown(function(){
        tempInterval=setInterval(function(){
        timecentisecond=timecentisecond+1;
        $("#timecentisecond").text(format(timecentisecond));
            },100);
    });
    $("#centisecondUp").mouseup(function(){
       clearInterval(tempInterval); 
    });
    $("#centisecondUp").mouseleave(function(){
       clearInterval(tempInterval); 
    });
    $("#centisecondDown").mousedown(function(){
        tempInterval=setInterval(function(){
        if(timecentisecond>0){
            timecentisecond=timecentisecond-1;
        }
        $("#timecentisecond").text(format(timecentisecond));
            },100);
    });
    $("#centisecondDown").mouseup(function(){
       clearInterval(tempInterval); 
    });
    $("#centisecondDown").mouseleave(function(){
       clearInterval(tempInterval); 
    });
    $("#secondDown").mousedown(function(){
        tempInterval=setInterval(function(){
        if(timesecond>0){
            timesecond=timesecond-1;
        }
        $("#timesecond").text(format(timesecond));
            },100);
    });
    $("#secondDown").mouseup(function(){
       clearInterval(tempInterval); 
    });
    $("#secondDown").mouseleave(function(){
       clearInterval(tempInterval); 
    });
    $("#minutDown").mousedown(function(){
       tempInterval=setInterval(function(){
        if(timeminute>0){
            timeminute=timeminute-1;
        }
        $("#timeminute").text(format(timeminute));
            },100); 
    });
    $("#minutDown").mouseup(function(){
       clearInterval(tempInterval); 
    });
    $("#minutDown").mouseleave(function(){
       clearInterval(tempInterval); 
    });
//functions
//show hide timer control buttons
    function timerControl(){
        if(timer){
            $("#timerBtn").text("Timer");
            timer=false;
            $("#title").text("Stopwatch");
            $("#lap").show();
            $("#timerControlUp").hide();
            $("#timerControlDown").hide();
            $("#lapButton").show();
            $("#resetButton").hide();
        }else{
            $("#timerBtn").text("Stopwatch");
            timer=true;    
            $("#title").text("Timer");
            $("#lap").hide();
            $("#timerControlUp").show();
            $("#timerControlDown").show();
            $("#lapButton").hide();
        }
        
    }
//show two buttons
    function hideShowButtons(x,y){
    $(".control").hide();
    $(x).show();
    $(y).show();
    }
//start timer 
    function startTimer(){
        //alert(timeminute);
        start_time =new Date().getTime()+timecentisecond*100+timeminute*60000+timesecond*1000;
        if((start_time-new Date().getTime())>0){
            hideShowButtons("#stopButton","#resetButton");
            $("#timerControlUp").hide();
        $("#timerControlDown").hide();
        myInterval = setInterval(function(){          
        timeCounter =  start_time-new Date().getTime();
        timeminute = Math.floor(timeCounter/60000);
        timesecond = Math.floor((timeCounter%60000)/1000);
        timecentisecond = ((timeCounter%60000)%1000);
        $("#timeminute").text(format(timeminute));
        $("#timesecond").text(format(timesecond));
        $("#timecentisecond").text(formatCentisecond(timecentisecond));
            if(timeCounter<=0){
                timeminute=0;
            timesecond=0;
            timecentisecond=0;
            $("#timeminute").text(format(timeminute));
        $("#timesecond").text(format(timesecond));
        $("#timecentisecond").text(formatCentisecond(timecentisecond));
                clearInterval(myInterval);
                $("#alarmSound")[0].play();
            }
        },10);
        }
    }
//start counter
    function startCounting(){      
        start_time = new Date().getTime();
        lap_start = start_time;
        timer_time = setInterval(function () {
            
            timeCounter = time + new Date().getTime()-start_time;
            lapCounter = time + new Date().getTime()-lap_start;
            updateTime();
            if(timeCounter == 100*60*1000){
                timeCounter = 0;
            }
            if(lapCounter == 100*60*1000){
                lapCounter = 0;
            }
        }, 10);
    }
// convert counters for minutes and seconds 
    function updateTime(){

        timeminute = Math.floor(timeCounter/60000);
        timesecond = Math.floor((timeCounter%60000)/1000);
        timecentisecond = ((timeCounter%60000)%1000);
        
        $("#timeminute").text(format(timeminute));
        $("#timesecond").text(format(timesecond));
        $("#timecentisecond").text(formatCentisecond(timecentisecond));
        
        lapminute = Math.floor(lapCounter/60000);
        lapsecond = Math.floor((lapCounter%60000)/1000);
        lapcentisecond = ((lapCounter%60000)%1000);
        
        $("#lapminute").text(format(lapminute));
        $("#lapsecond").text(format(lapsecond));
        $("#lapcentisecond").text(formatCentisecond(lapcentisecond));
    }
//format numbers
    function format(number){
        if(number<10){
            return '0'+number;
        }else {
            return number;
        }
    }
    function formatCentisecond(number){
        
        if(number<10){
            return '0'+number;
        }else {
            return Math.round(number/10);
        }
    }
//add laps detail in lapp box
    function addLap(){
        lapNumber++;
        var myLapDetails = '<div class="lap">'+
                    '<div class="laptimetitle"> Lap '+ lapNumber +
            
                    '</div>'+       
                    '<div class="laptime">'+
                        '<span>'+ format(lapminute) + '</span>' +
            ':<span>'+ format(lapsecond) + '</span>' +
            ':<span>'+ format(lapcentisecond) + '</span>' +
                    '</div>'+
                '</div>'
        $(myLapDetails).prependTo("#laps");
    }
});
