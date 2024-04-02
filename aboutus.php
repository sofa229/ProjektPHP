<?php
    include_once('partials/header.php');
?> 

       
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
       
       
    	<h1 style="font-size:13vw">About Us</h1></br></br></br></br>
        <h2 style="font-size: 8vw;">This is me </h2>
    
<img src="me.jpg" alt="This is me" class="ja">
<p class="mb-5">It all started in <strong>2019.</strong> Covid came with a lot of free time and it had to be filled somehow. </br></br></p><p style="padding: 6px;" class="nadpis"> <strong>My name is Sofia and I always wanted to be different from others.</strong></p></br></br> <p class="mb-5">For Christmas I received my first set of fabric paints. <strong>At first I didn't think I would ever touch them</strong>, but it was the free time that made me start. It started with the <strong>first canvas bag </strong>which I sold on the handmade website called Sashe. Later, more and more orders and satisfied customers came.</p>
<img src="prvy.jpg" alt="First canvas bag" class="ja">
<h3 style="font-size: 8vw;">Why canvas? </h3>
 <p class="mb-5"><strong>Ecology was and still is a topic that is very important to address.</strong> I was also interested in her because I want us to have the best time in this world. And making ourselves better can be changed with the help of small steps. Bringing your own shopping bag to the store instead of buying a plastic one is one of them. And this is exactly what I wanted to support. <strong>Make shopping more stylish and more ecological, and thanks to our bags, I think it is possible.</strong> </p>
            <h1 style="font-size:13vw">Let's make the world more beautiful!</h1>
                        <p><strong>Later we discovered that we didn't want to create just beautiful bags, but we also wanted to bring our fashion to people that would like to be fun and unique. We started painting on second-hand jackets, pants, t-shirts and created upcycled pieces for you that no one else had, has and won't have.</strong></p>
                        </br></br>
                        <p>The idea of the <strong> SOF'S brand </strong>is to bring you the highest quality, upcycled products that are the 
                        most ecological for our nature.</p>
                        </br></br>
                        <div class="w3-content4 w3-section4" style="max-width:400px">
                            <img class="mySlides4" src="prod1.jpg" style="width:100%">
                            <img class="mySlides4" src="prod2.jpg" style="width:100%">
                            <img class="mySlides4" src="prod3.jpg" style="width:100%">
                            <img class="mySlides4" src="prod4.jpg" style="width:100%">
                          </div>
                          </br> </br>
                          <p>We're currently working on even bigger projects that we can't wait to show you.</p>
                          <p style="padding: 6px;" class="nadpis"> <strong>Thank you for the trust and support you give us as customers.</strong></p>
                        <p> <strong>your SOF'S</strong></p>
</p>
     
<h3>Leave your contact to receive fresh news :</h3>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="slovakia">Slovakia</option>
      <option value="czech republic">Czech Republic</option>
      <option value="germany">Germany</option>
      <option value="hungary">Hungary</option>
      <option value="austria">Austria</option>
      <option value="ukraine">Ukraine</option>
    </select>
    <input type="text" id="email" pattern="+@example.com" size="30" placeholder="Email address" name="mail" required>
   

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
 <label>
      <input type="checkbox" checked="checked" name="subscribe"> I agree to the processing of personal data
    </label>
</br>
</br>
    <input type="submit" value="Submit">
  </form>
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

<script>

    document.addEventListener( 'wpcf7mailsent', function( event ) {
    
    location = 'thankyou.html';
    
    }, false );
    
    </script>
    </body>

</html>
