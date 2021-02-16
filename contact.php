<?php

if($_POST["submit"]) {
    $recipient="nichole.ramos602@gmail.com";
    $subject="Form to email message";
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $email=$_POST["email"];
    $phonenumber=$_POST["phonenumber"];
    $subject=$_POST["subject"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $firstname <$email>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
   <link rel="stylesheet" href="style.css">
    
    
    </head>
    
    <body>
    
        
        
        <div class="navegation">
            <ul>
        <li><a href="index.html" class="on">Home</a> </li>
                <li><a href="about-me.html">About Me</a></li>
                <li><a href="my-work.html">My Work</a></li>
                <li><a href="portfolio-graphic-designs.html">Portfolio</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
                </div>
        
       
        <center>

            <div class="social-media">
                
                 <h1>Contact me!</h1>
  <div class="contact-column">
      <a href="https://www.youtube.com/channel/UCktCD2w2sGtgmx38X9Kzvmw?view_as=subscriber">
    <img src="imagenes/GIF/youtube-gif.gif" alt="YouTube" style="width:37.4%">
          </a>
 
    <p>Visit my YouTube Channel for more animations!</p>
  </div>
                
  <div class="contact-column">
      <a href="https://www.instagram.com/punpunartz/">
    <img src="imagenes/GIF/insta-gif.GIF" alt="Instagram" style="width:40%">
          </a>
 
    <p>Follow me on Instagram for more drawings!</p>
  </div>
                
  <div class="contact-column">
      <a href="mailto:punpunartz@gmail.com">
    <img src="imagenes/GIF/gmail-gif.GIF" alt="Gmail" style="width:41%">
        </a>

   <p>Send me an email so I can reach out to you!</p>
  </div>
</div>
        
            
    <div class="emailform">
  <form action="/contact.php" method="post">
    <label for="fname">FIRST NAME</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <label for="lname">LAST NAME</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

    <label for="email">EMAIL</label>
    <input type="email" id="email" name="email" placeholder="Your email" required>

      <label for="pnumber">PHONE NUMBER</label>
    <input type="text" id="email" name="phonenumber" placeholder="Your phone number" required>
      
      
    <label for="subject">SUBJECT</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

            
            
    
        </center>
        
            
            <div class="footer2"><p>PunPunArtz • Nichole Ramos León • Copyright © 2020</p></div>
        
       
    </body>
    </html>