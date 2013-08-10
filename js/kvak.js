function kvak() {
 var h;
 kvaks = gpnrGetClass("kvak");
 kvak_grads = gpnrGetClass("kvak_grad");
 for (var i = 0; i < kvaks.length; i++) {
  h = kvaks[i].offsetHeight;
  h = h + '';
  if (h.search("112") != "-1") kvak_grads[i].style.top = '-119px';
 }
}