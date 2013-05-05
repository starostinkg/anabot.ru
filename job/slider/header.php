<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="web design, website development, web application development, print design, database development, ecommerce websites, search engine optimization, packaging design" />
<meta name="description" content="Tutorial demo showing how to create a simple menu slider using jQuery" />
<meta name="robots" content="all" />
<title>jQuery Tutorial Demo - Creating A jQuery Menu Slider</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script type="text/JavaScript">

$(document).ready(function() {

  // Declare variables
  
var hrefname = document.location + '';
hrefname = hrefname.split('?');
hrefname = hrefname[0];
hrefname = hrefname.split('#');
hrefname = hrefname[0];
  
  var width = 400;
  var slides = $('#list-images li');
  var numSlides = slides.length;
  
  var i = $('#list-links li');
    for (j = 0; j < numSlides; j++) {
     if (i[j].firstElementChild.href == hrefname) {
      i[j].className = 'hover';
      break;
    }
  }
  
  // Wrap the slides & set the wrap width - this will be used to animate the slider left/right
  slides.wrapAll('<div id="slide-wrap"></div>').css({'float' : 'left','width' : width});
  $('#slide-wrap').css({width: width * numSlides});
  
  // Hover function - animate the slides based on index of links
  $('#list-links li a').hover(function(){
	$('#list-links li').removeClass('hover');
	var i = $(this).index('#list-links li a');
	$(this).parent().addClass('hover');
	$('#slide-wrap').stop().animate({'marginLeft' : width*(-i)});
  });


	var i = $('#list-links li');
    for (j = 0; j < numSlides; j++) {
     if (i[j].className == 'hover') {
      i = j;
      $('#slide-wrap').stop().animate({'marginLeft' : width*(-i)}, 1);
      break;
     }
    }




});
</script>

<style type="text/css">
body,html,div,blockquote,img,label,p,h1,h2,h3,h4,h5,h6,pre,ul,ol,li,dl,dt,dd,form,a,fieldset,input,th,td{border:0;outline:none;margin:0;padding:0;}
body{height:100%;background:#fff;color:#1f1f1f;font-family:Arial,Verdana,sans-serif;font-size:13px;padding:7px 0;}
ul, ol{list-style:none;}
a {text-decoration: none;}
.text-center {text-align: center; padding: 10px 0;}
h2 {margin-bottom: 30px;}
.wrap {width: 653px; margin: 0 auto;}
.clear {clear: both;}

/* Tutorial CSS */
#menu-slider {
background: url(images/bg_menu_slider.png) no-repeat 0 0; 
padding: 15px; 
margin-bottom: 20px;
}

/* Required */
#list-images, #list-images li {
height: 292px; 
width: 400px; 
display: block;
}
#list-images {
float: right; 
overflow: hidden; /* Required to hide the inactive slides */
border: 1px solid #ccc;
}
#list-images li {
position: relative;
}

#list-images li img {
background: #fff; 
position: absolute; 
top: 0; 
left: 0;
}

/* Image captions */
#list-images li span {
background: url(images/grid1.png) repeat 0 0; 
position: absolute; 
bottom: 0; 
left: 0; 
width: 362px; 
display: block; 
padding: 14px 20px; 
font: bold 20px Arial, sans-serif; 
color: #fff; 
height: 20px; 
line-height: 20px;
}

/* Menu text links */
#list-links {
width: 220px; 
float: left;
}
#list-links li {
padding: 0 15px 0 0;
}
#list-links li a {
font: normal 12px Arial, sans-serif; 
color: #222; 
padding: 8px 5px 8px 8px; 
border-bottom: 1px solid #ccc; 
font-weight: bold; 
font-size: 13px; 
display: block;
}
#list-links li.hover {
background: url(images/tab_current.png) no-repeat 100% center;
}
#list-links li.hover a, #list-links li.hover a:hover {
color: #fff; 
background: none; 
border-bottom: none; 
padding-bottom: 9px;
}
#list-links li.last a {
border-bottom: none;
}
</style>
</head>
<body>
<div class="wrap">
  <h2 class="text-center">jQuery Demo: Create A jQuery Menu Slider</h2>
	<div id="menu-slider">
    <ul id="list-links">
        <li><a href="index.php">Mega Menu</a></li>
        <li><a href="index2.php">Vertical Mega Menu</a></li>
        <li><a href="index3.php">Vertical Accordion Menu</a></li>
        <li><a href="index4.php">jQuery Drill Down iPod Menu</a></li>
        <li><a href="index5.php">jQuery Slick Menu</a></li>
        <li><a href="index6.php">Floating Menu</a></li>
        <li><a href="index7.php">Floating Tweets</a></li>
        <li><a href="index8.php">Slick Contact Forms</a></li>
        <li><a href="index9.php">Slick Social Share Buttons</a></li>
    </ul>

    <ul id="list-images">
        <li><a href="index.htm">Mega Menu
            <img src="http://www.designchemical.com/media/images/mega_1a.jpg" alt="" />
            <span>jQuery Horizontal Mega Menu</span></a>
        </li>
        <li><a href="index2.htm">Vertical Mega Menu
            <img src="http://www.designchemical.com/media/images/mega_2a.jpg" alt="" />
            <span>jQuery Vertical Mega Menu</span></a>
        </li>
        <li><a href="index3.htm">Vertical Accordion Menu
            <img src="http://www.designchemical.com/media/images/mega_3a.jpg" alt="" />
            <span>jQuery Vertical Accordion Menu</span></a>
        </li>
        <li><a href="index4.htm">jQuery Drill Down iPod Menu
            <img src="http://www.designchemical.com/media/images/mega_4a.jpg" alt="" />
            <span>jQuery Drill Down iPod Menu</span></a>
        </li>
        <li><a href="index5.htm">jQuery Slick Menu
            <img src="http://www.designchemical.com/media/images/mega_5a.jpg" alt="" />
            <span>jQuery Slick Menu</span></a>
        </li>
        <li><a href="index6.htm">Floating Menu
            <img src="http://www.designchemical.com/media/images/mega_6a.png" alt="" />
            <span>Floating Menu Widget</span></a>
        </li>
        <li><a href="index7.htm">Floating Tweets
            <img src="http://www.designchemical.com/media/images/mega_7a.png" alt="" />
            <span>Floating Tweets Widget</span></a>
        </li>
        <li><a href="index8.htm">Slick Contact Forms
            <img src="http://www.designchemical.com/media/images/mega_8a.jpg" alt="" />
            <span>Slick Contact Forms</span></a>
        </li>
        <li><a href="index9.htm">
            <img src="http://www.designchemical.com/media/images/mega_9a.jpg" alt="" />
            <span>Slick Social Share Buttons</span></a>
        </li>
    </ul>
    <div class="clear"></div>
</div>
		
		<p class="clear text-center"><a href="http://www.designchemical.com/blog/index.php/jquery/jquery-tutorial-create-a-jquery-menu-slider/">View jQuery Menu Slider Tutorial</a></p>
	  </div>
</body>
</html>
