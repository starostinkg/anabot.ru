//Некоторые глобальные переменные
var tmp = true;
var tmp_obj = false;
var tmp_ch = '';
var tmp_arg = 0;
var box;
var clr_n;
var clr_t;
var aRGBStart;
var aRGBFinish;

//Функция поиска по классу (возвращает массив объектов)
function gpnrGetClass(cls, tag) {
 var tag = tag || "div";
 var tags = new Array();
 var arr = document.getElementsByTagName(tag);
 for (var i = 0, j = 0; i < arr.length; i++) {
  if (arr[i].className == cls) tags[j++] = arr[i];
 }
 if (j > 0) return tags;
 else {
  var fake = new Array();
  fake[0] = document.createElement(tag);
  fake[0].className = "fake_class_by_anabot_ru";
  return fake;
 }
}

window.onload = function() {
 var red_button;
 red_button = gpnrGetClass("red_button", "table");
 red_button[0].style.display = 'block';
 var h = new Array();
 var tmp = "";
 h[0] = gpnrGetClass("img_big", "img");
 h[1] = gpnrGetClass("img_small", "img");
 h[2] = gpnrGetClass("logo_img", "img");
 h[3] = gpnrGetClass("img_right_menu", "img");
 var dot = gpnrGetClass("img_dot", "img");
 for (var i = 0; i < h.length; i++){
  for (var j = 0; j < h[i].length; j++){
   if (dot[j] != undefined) {
    dot[j].style.display = "none";
    if (dot[j+1]) dot[j+1].style.display = "none";
   }
   h[i][j].style.display = "inline";
   ////
   //костыль для IE
   if (i == 1 && (!+"\v1")) {
    tmp = h[i][j].src.split("/img/");
    h[i][j].src = "/img/ie/" + tmp[1];
   }
   ////
  }
 }
 ////
 //Костыль для ie
 if(!+"\v1") {
  var logo = Array();
  logo = gpnrGetClass("logo_img", "img");
  logo = logo[0];
  if (logo.scrollHeight > 149)
   logo.style.height = 150;
  
  var actual_body = Array();
  actual_body = gpnrGetClass("actual_body");
  if (actual_body[0].offsetHeight < 200)
   actual_body[0].style.height = 200;
  var table_actual = Array();
  table_actual = gpnrGetClass("table_actual", "table");
  table_actual = table_actual[0];
  table_actual.style.width = (document.body.clientWidth > 900 ? "900px" : "85%");
  
 }
 ////
 if(typeof f_flasks == 'function') f_flasks();
}

////
//Функция для прозрачности (взято на http://www.tigir.com/opacity.htm)
function setElementOpacity(obj, nOpacity) {
  var opacityProp = getOpacityProperty();
  var elem = obj;

  if (!elem || !opacityProp) return; // Если не существует элемент с указанным id или браузер не поддерживает ни один из известных функции способов управления прозрачностью
  
  if (opacityProp=="filter")  // Internet Exploder 5.5+
  {
    nOpacity *= 100;
	
    // Если уже установлена прозрачность, то меняем её через коллекцию filters, иначе добавляем прозрачность через style.filter
    var oAlpha = elem.filters['DXImageTransform.Microsoft.alpha'] || elem.filters.alpha;
    if (oAlpha) oAlpha.opacity = nOpacity;
    else elem.style.filter += "progid:DXImageTransform.Microsoft.Alpha(opacity="+nOpacity+")"; // Для того чтобы не затереть другие фильтры используем "+="
  }
  else // Другие браузеры
    elem.style[opacityProp] = nOpacity;
}

function getOpacityProperty() {
  if (typeof document.body.style.opacity == 'string') // CSS3 compliant (Moz 1.7+, Safari 1.2+, Opera 9)
    return 'opacity';
  else if (typeof document.body.style.MozOpacity == 'string') // Mozilla 1.6 и младше, Firefox 0.8 
    return 'MozOpacity';
  else if (typeof document.body.style.KhtmlOpacity == 'string') // Konqueror 3.1, Safari 1.1
    return 'KhtmlOpacity';
  else if (document.body.filters && navigator.appVersion.match(/MSIE ([\d.]+);/)[1]>=5.5) // Internet Exploder 5.5+
    return 'filter';

  return false; //нет прозрачности
}

////
//Промежуточные цвета текста
function clrFadetext(id){
 tmp_ch++;
 document.getElementById(id).style.color = "" + clr_middle();
 if (tmp_ch == 1) clr_t = 300;
 else clr_t = 50;
 if (tmp_ch < clr_n) clr_tOut = setTimeout(function() {clrFadetext(id);},clr_t);
 else tmp_ch = 0;
}

function clr_middle() {
 var finishPercent = tmp_ch/clr_n;
 var startPercent = 1 - finishPercent;
 var R,G,B;
 R = Math.floor( ('0x' + aRGBStart[0]) * startPercent + ('0x'+aRGBFinish[0]) * finishPercent );
 G = Math.floor( ('0x' + aRGBStart[1]) * startPercent + ('0x'+aRGBFinish[1]) * finishPercent );
 B = Math.floor( ('0x' + aRGBStart[2]) * startPercent + ('0x'+aRGBFinish[2]) * finishPercent );
 if(typeof(R)=="NaN") R = 0;
 return 'rgb('+R+ ',' + G + ',' + B +')';
}
//
////

//Мигание
function blink(id) {
 tmp_ch = 0;
 clr_t = 10;
 clr_n = 15;
 aRGBStart = "#FFCC00".replace("#","").match(/.{2}/g);
 aRGBFinish = "#000000".replace("#","").match(/.{2}/g);
 setTimeout(function() {clrFadetext(id);}, clr_t);
}


