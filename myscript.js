function showSidebar(){
    const sidebar=document.querySelector('.sidebar')
    sidebar.style.display ='flex'
}
function hideSidebar(){
    const sidebar=document.querySelector('.sidebar')
    sidebar.style.display ='none'
}	
function showSidebar(){
    const sidebar=document.querySelector('.sidebar')
    sidebar.style.display ='flex'
}
function hideSidebar(){
    const sidebar=document.querySelector('.sidebar')
    sidebar.style.display ='none'
}
function showSidebar(){
    const sidebar=document.querySelector('.sidebar')
    sidebar.style.display ='flex'
}
function hideSidebar(){
    const sidebar=document.querySelector('.sidebar')
    sidebar.style.display ='none'
}
function showSidebar(){//ukazsidebar
    const sidebar=document.querySelector('.sidebar')
    sidebar.style.display ='flex'
}
function hideSidebar(){//schovajsidebar
    const sidebar=document.querySelector('.sidebar')
    sidebar.style.display ='none'
}	
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

document.addEventListener( 'wpcf7mailsent', function( event ) {
    
    location = 'thankyou.html';
    
    }, false );
    

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
