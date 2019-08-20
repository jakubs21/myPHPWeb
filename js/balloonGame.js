var playing=false;
var yposition = [400,400,400];
var positionchange=[1,1,1];
var mstime=10, gametime1, gametime2, gametime3 ,speedlvl= 1,lvlhelp=0,lvl=1, score= 0, trialsleft, balloons= ['balloon1t.png', 'balloon2t.png', 'balloon3t.png', 'balloon4t.png', 'balloon5t.png'];

$(function(){
    //if we click on start/reset button
    $("#startreset").click(function(){
        //we are playing
        if(playing == true){
         //reload
            location.reload();
        }else{
        //we are not playing
            
            playing=true;
            $('audio').each(function(){
    this.pause(); // Stop playing
    this.currentTime = 0; // Reset time
}); 
            deleteHearts();
    clearInterval(gametime1);
    clearInterval(gametime2);
    clearInterval(gametime3);
    $("#playball1").hide();
    $("#playball2").hide();
    $("#playball3").hide();
            score= 0;//set score to 0
            lvl=1;
            for(i=1;i<4;i++){chosecolor(i);}
            $("#playball1").show();
            $("#playball2").show();
            $("#playball3").show();
            $("#scorevalue").html(score);
            $("#trialsleft").show();//show trials left
            trialsleft=3;
            addHearts();
            flyingBallons();                
            $("#startreset").html("Reset Game");//change button text to "reset game"
            $("#gameover").fadeOut();
            lvl=1;
            if($('#gameover').is(':visible'))
{
    location.reload();
}
        }
    });
function addHearts(){
    for (i=1;i<=trialsleft;i++){
    $("#trialsleft").append('<img src="images/lifeheart.png" height="30">');
    }
}
function deleteHearts(){
    $("#trialsleft").empty();
    addHearts();
}
function gameover(){
    $('audio').each(function(){
    this.pause(); // Stop playing
    this.currentTime = 0; // Reset time
}); 
    deleteHearts();
    clearInterval(gametime1);
    clearInterval(gametime2);
    clearInterval(gametime3);
    $("#playball1").hide();
    $("#playball2").hide();
    $("#playball3").hide();
    $("#gameover").html('<p>Game Over</p><p>Your score is </p>'+ score);
    $("#gameover").fadeIn();
    $(".gameoverballoon").fadeIn(1000);
    $(".gameoverballoon").hide( "explode" );
    $("#popsound")[0].play();
    playing=false;
    yposition=[400, 400, 400 ];   
}
function flyingBallon1(){
    $("#playball1").show();
    yposition[0]=400;
    $("#playball1").css({'left': Math.round(Math.random()*550), 'top' : yposition[0]});
    gametime1 = setInterval(function(){
        $("#playball1").show();
        $("#scorevalue").html(score);
        $("#lvlvalue").html(lvl);
            yposition[0]=yposition[0]-positionchange[0];
        $("#playball1").css({"top":yposition[0]});
            if(yposition[0]<-100){
                trialsleft= trialsleft-1;
                if(trialsleft>0){
                    deleteHearts();
                    yposition[0] = 400;
                $("#playball1").css({'left': Math.round(Math.random()*550), 'top' : yposition[0]});
                }else{
                    gameover();
                }
        }            
    },mstime); 
}
function flyingBallon2(){
    $("#playball2").show();
    yposition[1]=400;
    $("#playball2").css({'left': Math.round(Math.random()*550), 'top' : yposition[1]});
    gametime2 = setInterval(function(){
        $("#playball2").show();
        $("#scorevalue").html(score);
        $("#lvlvalue").html(lvl);
            yposition[1]=yposition[1]-positionchange[1];
        $("#playball2").css({"top":yposition[1]});
          if(yposition[1]<-100){
                trialsleft= trialsleft-1;
                if(trialsleft>0){
                    yposition[1] = 400;
                    $("#playball2").css({'left': Math.round(Math.random()*550), 'top' : yposition[1]});
                    deleteHearts();
                }else{
                    gameover();
                }
            }        
                 
    },mstime); 
}
function flyingBallon3(){
    $("#playball3").show();
    yposition[2]=400;
    $("#playball3").css({'left': Math.round(Math.random()*550), 'top' : yposition[2]});
    gametime3 = setInterval(function(){
        $("#playball3").show();
        $("#scorevalue").html(score);
        $("#lvlvalue").html(lvl);
            yposition[2]=yposition[2]-positionchange[2];
        $("#playball3").css({"top":yposition[2]});
            if(yposition[2]<-100){
                trialsleft= trialsleft-1;          
                if(trialsleft>0){
                    deleteHearts();
                    yposition[2] = 400;
                    $("#playball3").css({'left': Math.round(Math.random()*550), 'top' : yposition[2]});
                }else{
                    gameover();
                }
            }        
                 
    },mstime); 
}
function flyingBallons(){
    score=0; 
    flyingBallon1();
    flyingBallon2();
    flyingBallon3();
    shootballoon();
}

function shootballoon(){
    $("#playball1").click(function(){
        $('audio').each(function(){
    this.pause(); // Stop playing
    this.currentTime = 0; // Reset time
}); 
        $("#popsound")[0].play();  
        clearInterval(gametime1);
        $("#playball1").toggle("explode",500);   
        score= score + 1;
        lvlhelp= lvlhelp + 1;
        chosecolor(1);
        if(lvlhelp==10){
            lvl=lvl+1;
            lvlhelp=0;
        }
     setTimeout(flyingBallon1,500);
    });
    $("#playball2").click(function(){
       $('audio').each(function(){
    this.pause(); // Stop playing
    this.currentTime = 0; // Reset time
}); 
        $("#popsound")[0].play();
        clearInterval(gametime2);
        $("#playball2").toggle("explode",500);        
        score= score + 1;
        lvlhelp= lvlhelp + 1;
        chosecolor(2);
        if(lvlhelp==10){
            lvl=lvl+1;
            lvlhelp=0;
        }
      setTimeout(flyingBallon2,500);      
});
    $("#playball3").click(function(){
        $('audio').each(function(){
    this.pause(); // Stop playing
    this.currentTime = 0; // Reset time
}); 
        $("#popsound")[0].play();
        clearInterval(gametime3);
        $("#playball3").toggle("explode",500);       
        score= score + 1;
        lvlhelp= lvlhelp + 1;
        chosecolor(3);
        if(lvlhelp==10){
            lvl=lvl+1;
            lvlhelp=0;
        }
       setTimeout(flyingBallon3,500);   
});
     for(i=0;i<3;i++){
            positionchange[i]=Math.round(Math.random()*lvl);
            if(positionchange[i]==0){positionchange[i]=1;}
     }
}
function chosecolor(balloonnumber){ 
    $("#playball"+balloonnumber).attr('src' , 'images/'+ balloons[Math.round(Math.random()*4)]);
    positionchange[balloonnumber-1]=Math.round(Math.random()*lvl);
    
    if(positionchange[balloonnumber-1]==0){positionchange[balloonnumber-1]=1;}
}
});