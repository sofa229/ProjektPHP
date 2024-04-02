<?php
    include_once('partials/header.php');
?> 
       
<script>//hamburger
	function showSidebar(){//ukazsidebar
		const sidebar=document.querySelector('.sidebar')
		sidebar.style.display ='flex'
	}
	function hideSidebar(){//schovajsidebar
		const sidebar=document.querySelector('.sidebar')
		sidebar.style.display ='none'
	}	
</script>
       

       
       
        <h1 style="font-size:15vw">Our Products</h1>
      </br></br>
      <p style="padding:6px; " class="base"><strong>Our products are always created/upcycled with love. </br>We are trying to make every single piece unique and timeless and with upcycling is it not difficult at all.</br> Fabrics or pieces of clothing are ALWAYS second-hand. </br>These pieces of clothing are usually of much higher quality than clothes in fast-fashion chains,</br> that means that they last longer. So, when we create our pieces, </br>we please the planet, our wardrobe and your wallets too.</br> Because they can last forever.<em> </br></br>YOU CAN BE FOREVER ECO AND TIMELESS WITH US</em></strong></p>
       <h2 style="font-size: 9vw;">Collab SOF’S </br>X Sekáč je Láska</h2>
        <div class="box">
          <img src="sekacjelaska.jpg" alt="Sekáč je láska" style="float: left; margin: 5px;">
        </div>
        <p style="padding:6px;" class="sekac"> </br></br>is one of the best secondhands in Nitra. They started their journey in 2019. Sekáč is family business, in which each of them found their application. </br></br> They create a space for meeting people with the same passion for fashion and an ecological way of life. On a regular basis, they organize clothing bazaars under the name <strong> "Sedemdesiat sukien mala" </strong>and clothing swaps, so that we can too have the opportunity to sell or exchange our clothes that we no longer wear. </br>The bazaars are accompanied by interesting workshops and lectures focused on the topic of sustainability. Sekáč je láska is secondhand with vintage pieces, high-quality clothing, and they also have the <strong> UPCYKLOVÉ </strong>collection, in which we collaborated. This collab, our first and We hope, not the last, was about 9 men's upcycle shirts, which were cropped by them and painted by me. Below you can see some of them. </p>
      </br>
      </br>
              <div class="w3-content4 w3-section4" style="max-width:450px">
                <img class="mySlides4" src="obr1.jpg" style="width:100%">
                <img class="mySlides4" src="obr2.jpg" style="width:100%">
                <img class="mySlides4" src="obr3.jpg" style="width:100%">
                <img class="mySlides4" src="obr4.jpg" style="width:100%">
                <img class="mySlides4" src="obr5.jpg" style="width:100%">
              </div>

        


        <h2 style="font-size: 9vw;">Product care</h2>
        <p style="padding: 6px;" class="nadpis"> <strong>Caring for the products is not difficult at all, just 
              follow the individual steps:</strong></p>
              <p style="padding: 6px;" class="sekac">&#x2022; the picture is painted with textile paint, so the clothes must be washed from the opposite side at a maximum of 30-40 °C
              </p>
              <p style="padding: 6px;" class="sekac">&#x2022; clothes should be ironed through a piece of fabric, on a lower level
              </p>
              <p style="padding: 6px;" class="sekac">&#x2022; the hand painted picture must not be dry cleaned
              </p>
              <p style="padding: 6px;" class="sekac">&#x2022; it must also not be dried in a tumble dryer where it may wrinkle, dry out or be destroyed
              </p>
              <p style="padding: 6px;" class="sekac">&#x2022; when any of the mentioned problems happen, don't hesitate to contact me and I believe we can solve the problem together
              </p>
        <h2 style="font-size: 9vw;">Reviews</h2>
        <!--recenzie fotky-->
        
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="rec1.jpg">
              <img src="rec1.jpg" alt="Recenzia" width="600" height="400">
            </a>
            <div class="desc"></div>
          </div>
        </div>
        
        
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="rec2.jpg">
              <img src="rec2.jpg" alt="Recenzia" width="600" height="400">
            </a>
            <div class="desc"></div>
          </div>
        </div>
        
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="rec3.jpg">
              <img src="rec3.jpg" alt="Recenzia" width="600" height="400">
            </a>
            <div class="desc"></div>
          </div>
        </div>
        
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="rec4.jpg">
              <img src="rec4.jpg" alt="Recenzia" width="600" height="400">
            </a>
            <div class="desc"></div>
          </div>
        </div>
        

</br>

   <hr new4> <!--čiara-->

           
   <?php
   include_once('partials/footer.php')
 ?>  

    <script> //slideshow images
        var myIndex4 = 0;
        carousel4();
        
        function carousel4() {
          var i;
          var x = document.getElementsByClassName("mySlides4");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex4++;
          if (myIndex4 > x.length) {myIndex4 = 1}    
          x[myIndex4-1].style.display = "block";  
          setTimeout(carousel4, 2000); // Change image every 2 seconds
        }
        </script>
    </body>

</html>
