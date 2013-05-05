var dragObject = null;
var mouseOffset;

function fixEvent(e) { 
 // получить объект событие для IE 
 e = e || window.event;

 // добавить pageX/pageY для IE 
 if ( e.pageX == null && e.clientX != null ) { 
  var html = document.documentElement 
  var body = document.body 
  e.pageX = e.clientX + (html && html.scrollLeft || body && body.scrollLeft || 0) - (html.clientLeft || 0) 
  e.pageY = e.clientY + (html && html.scrollTop || body && body.scrollTop || 0) - (html.clientTop || 0) 
 } 

 // добавить which для IE 
 if (!e.which && e.button) { 
  e.which = e.button & 1 ? 1 : ( e.button & 2 ? 3 : ( e.button & 4 ? 2 : 0 ) ) 
 } 

 return e 
}

function getPosition(e){ 

 var left = 0 
 var top  = 0 
  
 while (e.offsetParent){ 
  left += e.offsetLeft;
  top  += e.offsetTop;
  e = e.offsetParent;
 } 
  
 left += e.offsetLeft 
 top  += e.offsetTop 
  
 return {x:left, y:top} 
}

function mouseMove(event){ 
 event = fixEvent(event);
 if (dragObject) {
 alert(mouseOffset.x);
  //window.scrollBy(event.pageX - mouseOffset.x, event.pageY - mouseOffset.y);
 }
}

window.onmousedown = function(e){
 // запомнить переносимый объект 
 // в переменной dragObject
 dragObject  = this;
 window.style.cursor = 'move';
 var pos = getPosition(tmz1);
 e = fixEvent(e);
 mouseOffset= {  
  x: e.pageX - pos.x,  
  y: e.pageY - pos.y  
 }
 // остановить обработку события
 return false;
}

document.onmouseup = function() {
 // опустить переносимый объект
 dragObject = null;
 window.style.cursor = 'pointer';
}

document.onmousemove = mouseMove;