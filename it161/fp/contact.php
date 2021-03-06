<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Kathleen Baker's IT161 Portal Website</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="bl-styles/portal.css" />
  <link rel="stylesheet" href="bl-styles/nav.css" />
  <link rel="stylesheet" href="bl-styles/forms.css" />
 </head>
 <body>
     <header>
     <a class="topheader" href="index.html">
         <h1>Big Leather</h1>
        </a>
     <nav class="topnav" id="myTopnav">
     <a href="index.html" class="active">home</a>
      <a href="music.html">music</a>
      <a href="shop.html">shop</a>
      <a href="art.html">gallery</a>
      <a href="about.html">about page</a>
      <a href="showschedule.html">show schedule</a>
      <a href="contact.php">contact Big Leather</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
     </nav>
     </header>

     <div class="iconlist">
     <a href="https://www.instagram.com/_bigleather_/" target="_blank">
       <img class="icon" src="bl-images/insta-logo.png" alt="Instagram icon"/>
      </a>
     <a href="https://bigleather.bandcamp.com/" target="_blank">
       <img class="icon" src="bl-images/bc-logo.png" alt="BandCamp icon"/>
      </a>
     <a href="https://open.spotify.com/artist/6xF7J1fNTVVRgd7beuhwhL?si=8vDi4eqFTGakwZiLHBUkGA&dl_branch=1" target="_blank">
       <img class="icon" src="bl-images/spotify-logo.png" alt="Spotify icon"/>
      </a>
   </div>

   <div class="wrapper">
       
       <h2 class="page-header">Contact Big Leather</h2>
       
       <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include '../includes/contact_include.php'; #site keys & code here
    
        $toAddress = "kathleen.a.baker@seattlecolleges.edu";  //place your/your client's email address here
        $toName = "Big Leather"; //place your client's name here
        $website = "Big Leather's Contact Form";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
     <footer>
      <p><small>&copy; 2021 by 
          <a href="contact.php">Kathleen Baker</a>, All Rights Reserved ~ 
          <a id="html-checker" href="#">Check HTML</a> ~ 
          <a id="css-checker" href="#">Check CSS</a> ~ 
          <a href="disclaimer.html">Disclaimer / Privacy Notice</a> ~
        </small></p>
    </footer>
    
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    //https://tinyurl.com/dynamic-html-checker
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
	  document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);

    //manages mobile nav 
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
     
 </body>
</html>