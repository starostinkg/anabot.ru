var tlength = 2;
var anonPost = 1;

function trimTxt(s) {
 while (s.substring(0, 1) == ' ') {
  s = s.substring(1, s.length);
 }
 while (s.substring(s.length - 1, s.length) == ' ') {
  s = s.substring(0, s.length - 1);
 }
 return s;
}

function submitForm(){
 var pf = document.forms['postMsg'];
 var ftitle = false,  ftext = false,  flogin = false,  fpass = false,  user_usr = '',  user_pwd = '',  topicTitle = '',  postText = '',  fsubmit = true;
 if (pf.elements['user_usr']) {
  flogin = true;
  user_usr = trimTxt(pf.elements['user_usr'].value); 
 }
 if (pf.elements['user_pwd']) {
  fpass = true;
  user_pwd = trimTxt(pf.elements['user_pwd'].value);
 }
 if (pf.elements['postText']) {
  ftext = true;
  postText = trimTxt(pf.elements['postText'].value);
 }
 if (pf.elements['topicTitle']) {
  ftitle = true;  
  topicTitle = trimTxt(pf.elements['topicTitle'].value);
 }
 if (pf.elements['CheckSendMail'] && pf.elements['CheckSendMail'].checked) tlength = 0;
 if (flogin && fpass && user_usr != '' && user_pwd != '') fsubmit = true;
 else if (flogin && fpass && anonPost == 0 && user_pwd == '') fsubmit = false;
 else if (ftext && postText.length < tlength) fsubmit = false;
 else if (ftitle && topicTitle.length < tlength) fsubmit = false;
 if (fsubmit) {
  pf.elements['subbut'].disabled = true;
  document.forms['postMsg'].submit();
 }
 else { 
  alert("Ошибка. Возможно, вы пытаетесь отправить пустое сообщение...");
  return;
 }
}
