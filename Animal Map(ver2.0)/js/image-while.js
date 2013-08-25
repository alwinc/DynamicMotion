var speed=30//速度数值越大速度越慢
var colee_right2=document.getElementById("colee_right2");
var colee_right1=document.getElementById("colee_right1");
var colee_right=document.getElementById("colee_right");
colee_right2.innerHTML=colee_right1.innerHTML
function Marquee4(){
if(colee_right.scrollLeft<=0)
colee_right.scrollLeft+=colee_right2.offsetWidth
else{
colee_right.scrollLeft--
}
}
var MyMar4=setInterval(Marquee4,speed)
colee_right.onmouseover=function() {clearInterval(MyMar4)}
colee_right.onmouseout=function() {MyMar4=setInterval(Marquee4,speed)}
