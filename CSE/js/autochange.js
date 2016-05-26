var distance=384;
var distance3=484.35;
var speed=5000;
var f=1;
var animator1;
var f2=1;
var animator2;
var f3=1;
var animator3;
function show()
{
	alert(this.scrollTop());
	
}
function autoScroll(el)
{
	var currentY = $("#"+el+"").scrollTop();
	var yPos = currentY + distance;
	
		var i=currentY;
		
		/*var x=setInterval(function(){
			if(i<=yPos){
				$("#"+el+"").scrollTop(i);
				i++;
				 
			}
			else{
				clearInterval(x);
				}
		},1);*/
	$("#"+el+"").scrollTop(yPos);
	var height = $("#"+el+"").children().height();
	if(yPos > (3062))
	{
		currentY=0;
		yPos=0;
		$("#"+el+"").scrollTop(currentY);
		
	}
	
	if(f==1){
	animator1=setInterval('autoScroll(\''+el+'\')',speed);
	f=0;	
	}
}
function stop1()
{
	clearInterval(animator1);
}
function start1()
{
	animator1=setInterval('autoScroll(\'scroll\')',speed);
}

//second

function autoScroll2(el)
{
	var currentY = $("#"+el+"").scrollTop();
	var yPos = currentY + distance;
	
		var i=currentY;
		
		/*var x=setInterval(function(){
			if(i<=yPos){
				$("#"+el+"").scrollTop(i);
				i++;
				 
			}
			else{
				clearInterval(x);
				}
		},1);*/
	$("#"+el+"").scrollTop(yPos);
	var height = $("#"+el+"").children().height();
	if(yPos > (3062))
	{
		currentY=0;
		yPos=0;
		$("#"+el+"").scrollTop(currentY);
		
	}
	
	if(f2==1){
	animator2=setInterval('autoScroll2(\''+el+'\')',speed);
	f2=0;	
	}
}
function stop2()
{
	clearInterval(animator2);
}
function start2()
{
	animator2=setInterval('autoScroll2(\'scroll1\')',speed);
}
//third
function autoScroll3(el)
{
	var currentY = $("#"+el+"").scrollTop();
	var yPos = currentY + distance3;
	
		var i=currentY;
		
		/*var x=setInterval(function(){
			if(i<=yPos){
				$("#"+el+"").scrollTop(i);
				i++;
				 
			}
			else{
				clearInterval(x);
				}
		},1);*/
	$("#"+el+"").scrollTop(yPos);
	var height = $("#"+el+"").children().height();
	if(yPos > 1756)
	{
		currentY=0;
		yPos=0;
		$("#"+el+"").scrollTop(currentY);
		
	}
	
	if(f3==1){
	animator3=setInterval('autoScroll3(\''+el+'\')',speed);
	f3=0;	
	}
}
function stop3()
{
	clearInterval(animator3);
}
function start3()
{
	animator3=setInterval('autoScroll(\'scroll3\')',speed);
}
