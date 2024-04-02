<?php
    include_once('partials/header.php');
?> 
<!doctype html public >
<html xmlns="http://www.w3.org/199/xhtml" xml:lang="sk" lang="sk">
<html lang="en">
<html>

    <head>
    	<title>SOF’S</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF" />
        <meta name="author" content=" Sofia Kučerová " />
        <meta name="description" content=" Upcycled Fashion "/>
        <meta name="keywords" content="fashion; Fashion; Sofs; sofs; Sofia Kučerová; sofia kučerová; sofia kucerova; sofa229; sofsofficial; sofa; upcycled; Fashion; fashion; worldvide; style; pinterest; pink; blue; grey; gray; love; lovecollection; sekacjelaska; sekac; secondhand; SOF’S; Sof’s; sof’s"/>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylehome.css">

        <style rel="stylesheet">
    	
        
</style>
</head>

<body>


<nav>
	<ul class="sidebar">
    	<li onclick=hideSidebar()><a href="#"><svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16"> <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" fill="white"></path> </svg></a></li>	
		<li><a href="products.html">Products</a></li>
		<li><a href="aboutus.html">About Us</a></li>
		<li><a href="contact.html">Contact</a></li>
		<li><a href="home.html">Home</a></li>
		
	</ul>
	<ul>
    		
		<li class="hideOnMobile"><a href="products.html">Products</a></li>
        <li class="hideOnMobile"><a href="aboutus.html">About Us</a></li>
        <li class="hideOnMobile"><a href="contact.html">Contact</a></li>
        <li class="hideOnMobile"><a href="home.html">Home</a></li>
            <li onclick=showSidebar()><a href="#"><svg style="color: white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26" zoomAndPan="magnify" viewBox="0 0 30 30.000001" height="26" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><clipPath id="id1"><path d="M 3.386719 7.164062 L 26.613281 7.164062 L 26.613281 22.40625 L 3.386719 22.40625 Z M 3.386719 7.164062 " clip-rule="nonzero" fill="white"></path></clipPath></defs><g clip-path="url(#id1)"><path fill="white" d="M 3.398438 22.40625 L 26.601562 22.40625 L 26.601562 19.867188 L 3.398438 19.867188 Z M 3.398438 16.054688 L 26.601562 16.054688 L 26.601562 13.515625 L 3.398438 13.515625 Z M 3.398438 7.164062 L 3.398438 9.703125 L 26.601562 9.703125 L 26.601562 7.164062 Z M 3.398438 7.164062 " fill-opacity="1" fill-rule="nonzero"></path></g></svg></a></li>
    	</ul>

    	
			
    	
</nav>

<script>
	function showSidebar(){
		const sidebar=document.querySelector('.sidebar')
		sidebar.style.display ='flex'
	}
	function hideSidebar(){
		const sidebar=document.querySelector('.sidebar')
		sidebar.style.display ='none'
	}	
</script>

    		<a href="home.html"><h1 style="font-size:15vw">SOF'S</h1>
    		<h3 style="font-size:4vw">UPCYCLED FASHION</h3>
    	
    	
</div>
<div class="social">
	<a href="https://www.instagram.com/sofsofficial/"><img src="instagram.png" alt="Instagram"></a>
	<a href="https://www.facebook.com/sofiakucerobags"><img src="fb.png" alt="Facebook"></a>

</div>


<script>//javascript



const cookieBox = document.querySelector(".wrapper"),
acceptBtn=cookieBox.querySelector(".buttons button");

acceptBtn.onclick = () => { 
	document.cookie = "CookieBy=SOF'S; max-age="
		+ 60 * 60 * 24; 
	if (document.cookie) { 
		consentBox.classList.add("hide"); //schová cookie box
	} else { 
		alert 
			("Cookie can't be set!"); //ak nemoôe byť cookie tak sa stane error
	} 
}; 

rejectBtn.onclick = () => { 
	alert( 
		"Cookies rejected. Some functionality may be limited."); 
	consentBox.classList.add("hide"); 
}; 
//schovanie cookie boxu ak cookie box nie je expired
let checkCookie = 
	document.cookie.indexOf("CookieBy=SOF'S"); 
//ak je cookie nastavená na schovanie inak ju ukáž	
checkCookie !== -1 ? consentBox.classList.add("hide") : 
	consentBox.classList.remove("hide");

</script>

<!-- kreatívny bod -->
	</body>
	</html>
