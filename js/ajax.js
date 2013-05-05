var ajax_ajax_req;
try { 
	ajax_req=new XMLHttpRequest(); 
} catch (trymicrosoft) {
	try {
		ajax_req=new ActiveXObject("Msxml2.XMLHTTP");
	} catch (othermicrosoft) {
		try {
			ajax_req=new ActiveXObject("Microsoft.XMLHTTP");
		} catch (failed) {
			ajax_req=false;
		}
	}
}
if (!ajax_req) alert ("К сожалению, у вас не поддерживается Ajax. Смените браузер.");
