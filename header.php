
<?php
  require('../_inc/functions.php');
?>
<!doctype html public >
<html xmlns="http://www.w3.org/199/xhtml" xml:lang="sk" lang="sk">
<html lang="en">
<html>

    <head>
        <title><?php 'SOF'S '. (basename($_SERVER["SCRIPT_NAME"], '.php'));?></title>
    <?php
      add_stylesheet();
    ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF" />
        <meta name="author" content=" Sofia Kučerová " />
        <meta name="description" content=" Upcycled Fashion "/>
        <meta name="keywords" content="fashion; Fashion; Sofs; sofs; Sofia Kučerová; sofia kučerová; sofia kucerova; sofa229; sofsofficial; sofa; upcycled; Fashion; fashion; worldvide; style; pinterest; pink; blue; grey; gray; love; lovecollection; sekacjelaska; sekac; secondhand; SOF’S; Sof’s; sof’s"/>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styleproducts.css">
        <style rel="stylesheet"></style>
    </head>

    <body>
        <nav>
            <div class="homeicon">
                <a href="home.html"><img src="sofslogo.png"></a>
                    </div>
            <ul class="sidebar"> <!---hamburger-->
            <?php
           $pages = array('Domov'=>'home.php',
                'Produkty'=>'products.php',
                'O nás'=>'aboutus.php',
                'Kontakt'=>'contact.php'  
           );
           //echo(generate_menu($pages));
           $menu_object  = new Menu($pages);
           echo($menu_object->generate_menu());

        ?>
                <li onclick=hideSidebar()><a href="#"><svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16"> <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" fill="white"></path> </svg></a></li>	
                <li><a href="products.html">Products</a></li>
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="home.html">Home</a></li>
                
            </ul>
            <ul>
    		<!---horná lišta-->
        <li class="hideOnMobile"><a href="products.html">Products</a></li>
        <li class="hideOnMobile"><a href="aboutus.html">About Us</a></li>
        <li class="hideOnMobile"><a href="contact.html">Contact</a></li>
        <li class="hideOnMobile"><a href="home.html">Home</a></li>
                <li onclick=showSidebar()><a href="#"><svg style="color: white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26" zoomAndPan="magnify" viewBox="0 0 30 30.000001" height="26" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><clipPath id="id1"><path d="M 3.386719 7.164062 L 26.613281 7.164062 L 26.613281 22.40625 L 3.386719 22.40625 Z M 3.386719 7.164062 " clip-rule="nonzero" fill="white"></path></clipPath></defs><g clip-path="url(#id1)"><path fill="white" d="M 3.398438 22.40625 L 26.601562 22.40625 L 26.601562 19.867188 L 3.398438 19.867188 Z M 3.398438 16.054688 L 26.601562 16.054688 L 26.601562 13.515625 L 3.398438 13.515625 Z M 3.398438 7.164062 L 3.398438 9.703125 L 26.601562 9.703125 L 26.601562 7.164062 Z M 3.398438 7.164062 " fill-opacity="1" fill-rule="nonzero"></path></g></svg></a></li>
            </ul>
            
        </nav>
