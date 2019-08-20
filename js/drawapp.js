$(function(){
    var paintMode=false;
    var paintErase= "paint";
    var canvasBlock= true;
    var lineMode;
    var allowance=true;
    var container;
    var canvas;
    var ctx;
    var cancelLine=false, cancelPencil=false, cancelRect=false, cancelCircle=false;
    var xprev=0, yprev=0;
    var swapDraw;
    var firstClickLine=false, firstClickRect=false, firstClickCircle=false;
    var paintWasOn=false;
    var pencil=true, rectangle=false, circle=false, line=false;
   // $("#SizeChangeAllowance").hide();
    $("#pointMode").hide();
    $("#paintON").hide();
    $(".drawMode").hide();
//    $( "#widthCanvas" ).hide();
//    $( "#heightCanvas" ).hide();
document.getElementById("paintColor").addEventListener("change", watchColorPicker, false);
function watchColorPicker(event) {
    ctx.strokeStyle= $("#paintColor").val();
      $("#circle").css("background",($("#paintColor").val()));
    document.getElementById("circle").style.color = event.target.value;
} 
    
    canvas=document.getElementById("paint");
    ctx = canvas.getContext('2d');
    //get canvas container
    container = $("#paint");
    if(cancelPencil==false)drawByPencil();
        cancelPencil=true;
   $( "#slider" ).slider({
       min: 3,
       max: 30,
       slide: function(event, ui){
           $("#circle").height(ui.value);
           $("#circle").width(ui.value);
           $("#circle").css("marginTop",-ui.value/2);
           ctx.lineWidth=ui.value;
       }
   });
    $( "#widthCanvas" ).slider({
        min: 100,
        max: 500,
        disabled: true,
        value: 300,
        slide: function(event, ui){
            //$("#canvas").width(ui.value);
            $("#paint").width(ui.value);
            $("#paint").height($("#paint").height());
            canvas.width=ui.value;
            paintWasOn=false;
        }
    });
    $( "#heightCanvas" ).slider({
        min: 100,
        max: 500,
        disabled: true,
        value: 300,
        orientation: "vertical",
        slide: function(event, ui){
            //$("#canvas").height(600-ui.value);
            $("#paint").height(600-ui.value);
            $("#paint").width($("#paint").width());  
            $("#btnContainer").css("bottom",ui.value-100);
            canvas.height=600-ui.value;
            paintWasOn=false;
        }
    });
    $("#SizeChangeAllowance").click(function(){
        if(allowance){
            if(paintWasOn){
          var reseting =window.confirm("If you change the size picture will reset. Do you want to continue?");
                 }else{
                     reseting=true;
                 }
             if(reseting==true){      
            $("#SizeChangeAllowance").addClass("btn-success"); 
            $("#SizeChangeAllowance").removeClass("btn-danger");
            $("#SizeChangeAllowance").text("Size Change Enabled");
            $( "#heightCanvas" ).slider("enable");
            $( "#widthCanvas" ).slider("enable");
            $("#paintOFF").attr("disabled", true);
            allowance=false;
             }
        }
        else {
            $("#SizeChangeAllowance").addClass("btn-danger");         
            $("#SizeChangeAllowance").removeClass("btn-success");
            $("#SizeChangeAllowance").text("Size Change Disabled");
            allowance=true;
            $( "#heightCanvas" ).slider("disable");
            $( "#widthCanvas" ).slider("disable");
            $("#paintOFF").attr("disabled", false);
        }
    });
    $("#paintOFF").click(function(){
        $("#paintON").show();
        $("#pointMode").show();        
        $("#lineMode").show();        
        $("#rectMode").show();        
        $("#circleMode").show();        
        $("#paintOFF").hide();
        $("#SizeChangeAllowance").attr("disabled", true);
        $("#paintColor").val();
        canvasBlock=false;
    });
    $("#paintON").click(function(){
        $("#paintOFF").show();
        $("#paintON").hide();
        $("#pointMode").hide();        
        $("#lineMode").hide();
        $("#rectMode").hide();
        $("#circleMode").hide();
        $("#SizeChangeAllowance").attr("disabled", false);
        canvasBlock=true;
        
    });
  
    $("#pointMode").click(function(){
        $(".drawMode").removeClass("btn-primary");
        $("#pointMode").addClass("btn-primary"); 
        paintErase="paint";
        pencil=true;
        line=false;
        circle=false;
        rectangle=false;
        firstClickCircle=false;
        firstClickLine=false;
        firstClickRect=false;
            $("#Erase").removeClass("btn-warning");
        if(cancelPencil==false)drawByPencil();
        cancelPencil=true;
    });        
    $("#lineMode").click(function(){
        $(".drawMode").removeClass("btn-primary");
        $("#lineMode").addClass("btn-primary"); 
        paintErase="paint";
        pencil=false;
        line=true;
        circle=false;
        rectangle=false;
        firstClickCircle=false;
        firstClickLine=false;
        firstClickRect=false;
            $("#Erase").removeClass("btn-warning");
        if(cancelLine==false)drawLine();
        cancelLine=true;
    });
    $("#circleMode").click(function(){
        $(".drawMode").removeClass("btn-primary");
        $("#circleMode").addClass("btn-primary");
        paintErase="paint";
        pencil=false;
        line=false;
        circle=true;
        rectangle=false;
        firstClickCircle=false;
        firstClickLine=false;
        firstClickRect=false;
            $("#Erase").removeClass("btn-warning");
        if(cancelCircle==false)drawCircle();
        cancelCircle=true;
    });
    $("#rectMode").click(function(){
        $(".drawMode").removeClass("btn-primary");
        $("#rectMode").addClass("btn-primary"); 
        paintErase="paint";
        pencil=false;
        line=false;
        circle=false;
        rectangle=true;
        firstClickCircle=false;
        firstClickLine=false;
        firstClickRect=false;
            $("#Erase").removeClass("btn-warning");
        if(cancelRect==false)drawRect();
        cancelRect=true;
    });
    
    // mouse position
    var mouse = {x: 0, y: 0};
    //paint with pencil
    function drawByPencil(){
        cancelPencil=false;
        firstClick=false;
        ctx.lineCap = "round";
        if(pencil){
                  container.mousedown(function(e){
        if(canvasBlock==false&&pencil){
            paintMode= true;
            paintWasOn=true;
            ctx.lineCap = "round";
        ctx.beginPath();
        mouse.x = e.pageX - this.offsetLeft;
        mouse.y = e.pageY - this.offsetTop;
        ctx.moveTo(mouse.x,mouse.y);
        }
    });
    container.mousemove(function(e){
        if(canvasBlock==false&&pencil){
            mouse.x = e.pageX - this.offsetLeft;
        mouse.y = e.pageY - this.offsetTop;
        if(paintMode){
            if(paintErase == "paint"){
                ctx.strokeStyle= $("#paintColor").val();
            }
            else{
                ctx.strokeStyle = "white";
            }
            ctx.lineTo(mouse.x, mouse.y);
            ctx.stroke();
        }
        }
    });
    container.mouseup(function(){
       if(canvasBlock==false&&pencil) paintMode= false;
    });
    container.mouseleave(function(){
       if(canvasBlock==false&&pencil) paintMode= false;
    });
        }
    }       
    
    //paint a line
    function drawLine(){  
        
        firstClickLine=false;
        cancelLine=false;
        ctx.lineCap = "round";
        if(line){
            container.mousedown(function(e){      
            if(firstClickLine==false){        
            if(canvasBlock==false&&line){
            paintMode= true;
            paintWasOn=true;
                ctx.lineCap = "round";
        ctx.beginPath();
                $("#lineMode").addClass("active");
        mouse.x = e.pageX - this.offsetLeft;
        mouse.y = e.pageY - this.offsetTop;
        ctx.moveTo(mouse.x,mouse.y);
        }
        }
            if(firstClickLine){
                var secondClick=true;
                mouse.x = e.pageX - this.offsetLeft;
                mouse.y = e.pageY - this.offsetTop;
                if(paintMode){
            if(paintErase == "paint"){
                ctx.strokeStyle= $("#paintColor").val();
            }
            else{
                ctx.strokeStyle = "white";
            }
            if(line)ctx.lineTo(mouse.x, mouse.y);
            ctx.stroke();
                    $("#lineMode").removeClass("active");
            }               
            }
            firstClickLine=true;
            if(secondClick){
                firstClickLine=false;
                secondClick=false;
            }
    });
    container.mousemove(function(e){
        
    });
    container.mouseup(function(){
        
    });
    container.mouseleave(function(){
        if(canvasBlock==false&&line){
            $("#lineMode").removeClass("active");
            firstClick=false;
            paintMode=false;
        }
    });
        }
    }
    //paint rectangle 
    function drawRect(){
        cancelRect=false;
          firstClickRect=false;
        ctx.lineCap = "square";
    if(rectangle){
        container.mousedown(function(e){      
            if(firstClickRect==false){        
            if(canvasBlock==false&&rectangle){
            paintMode= true;
            paintWasOn=true;
                ctx.lineCap = "square";
        ctx.beginPath();
                $("#rectMode").addClass("active");
        mouse.x = e.pageX - this.offsetLeft;
        mouse.y = e.pageY - this.offsetTop;
        ctx.moveTo(mouse.x,mouse.y);
        xprev=mouse.x;
        yprev=mouse.y;
        }
        }
            if(firstClickRect){
                var secondClick=true;
                mouse.x = e.pageX - this.offsetLeft;
                mouse.y = e.pageY - this.offsetTop;
                if(paintMode){
            if(paintErase == "paint"){
                ctx.strokeStyle= $("#paintColor").val();
            }
            else{
                ctx.strokeStyle = "white";
            }
            if(rectangle)ctx.rect(xprev,yprev,mouse.x-xprev, mouse.y-yprev);
            ctx.stroke();
                    $("#rectMode").removeClass("active");
            }               
            }
            firstClickRect=true;
            if(secondClick){
                firstClickRect=false;
                secondClick=false;
            }
    });
    container.mousemove(function(e){
        
    });
    container.mouseup(function(){
        
    });
    container.mouseleave(function(){
        if(canvasBlock==false&&rectangle){
            $("#rectMode").removeClass("active");
            firstClickRect=false;
            paintMode=false;
        }
    });
    }
    }
//    //paint circle
function drawCircle(){
        cancelCircle=false;
          firstClickCircle=false;
    ctx.lineCap = "round";
    if(circle){
        container.mousedown(function(e){      
            if(firstClickCircle==false){        
            if(canvasBlock==false&&circle){
            paintMode= true;
            paintWasOn=true;
        ctx.beginPath();
                ctx.lineCap = "round";
                $("#circleMode").addClass("active");
        mouse.x = e.pageX - this.offsetLeft;
        mouse.y = e.pageY - this.offsetTop;
        ctx.moveTo(mouse.x,mouse.y);
        xprev=mouse.x;
        yprev=mouse.y;
        }
        }
            if(firstClickCircle){
                var secondClick=true;
                mouse.x = e.pageX - this.offsetLeft;
                mouse.y = e.pageY - this.offsetTop;
                if(paintMode){
            if(paintErase == "paint"){
                ctx.strokeStyle= $("#paintColor").val();
            }
            else{
                ctx.strokeStyle = "white";
            }
                    var radious= Math.pow((Math.pow(mouse.x-xprev,2)+Math.pow(mouse.y-yprev,2)),0.5);
            if(circle)ctx.arc(xprev,yprev,radious,0,2*Math.PI,false);
            ctx.stroke();
                    $("#circleMode").removeClass("active");
            }               
            }
            firstClickCircle=true;
            if(secondClick){
                firstClickCircle=false;
                secondClick=false;
            }
    });
    container.mousemove(function(e){
        
    });
    container.mouseup(function(){
        
    });
    container.mouseleave(function(){
        if(canvasBlock==false&&circle){
            $("#circleMode").removeClass("active");
            firstClickCircle=false;
            paintMode=false;
        }
    });
    }
    }
    //erase button
    $("#Erase").click(function(){
        if(paintErase=="erase"){
            paintErase="paint";
            $("#Erase").removeClass("btn-warning");
        }
        else{
            $("#Erase").addClass("btn-warning");
            paintErase="erase";
        }
    });
    //reset button
     $("#Reset").click(function(){
         var reseting =window.confirm("Do you want to reset?");
         if(reseting==true){
             ctx.clearRect(0, 0, canvas.width, canvas.height);
             paintErase="paint";
             paintWasOn=false;
             $("#Erase").removeClass("btn-warning");
         }
     });
    //save button
    
    $("#Save").click(function(){
        var confirmation;
        confirmation=confirm("Do you want to save image? It will remove previously saved image.");
        if(confirmation){
            if(typeof(localStorage)!= null){
        localStorage.setItem("imgCanvas",canvas.toDataURL());
            window.alert("Your image was saved");
    }else{
        window.alert("Your browser does not support local storage!")
    }
        }
    });
    //load button
    $("#Load").click(function(){
        var confirmation;
        confirmation=confirm("Do you want to load previously saved image?");
        if(confirmation){
            ctx.clearRect(0, 0, canvas.width, canvas.height);
             paintErase="paint";
             paintWasOn=false;
            if(localStorage.getItem("imgCanvas") != null){
        var img = new Image();
        img.onload = function(){
            ctx.drawImage(img,0,0);
        }
        img.src = localStorage.getItem("imgCanvas");
        }
        } 
    });
    //clear button
    $("#Clear").click(function(){
        var confirmation;
        confirmation=confirm("Do you want to delete previously saved image?");
        if(confirmation){
            localStorage.clear();
        } 
    });
    //set line width .... set in Slider
    ctx.lineWidth =3;
    //set line color Set next to color picker
    
    //set cap to the line (round, butt, square)
    ctx.lineCap = "round";
    //set line join style(bevel, round, miter)
    ctx.lineJoin = "round";
});
