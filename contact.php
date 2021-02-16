
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
  <style>
    
/* Style inputs with type="text", select elements and textareas */
input[type=text], input[type=email], select, textarea {
  width: 100%;
  padding: 18px;
  border: 1px #ccc;
  border-radius: 25px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
    outline: none;
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #db69a1;
    font-family: 'Raleway', sans-serif;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 10px;
  cursor:pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #da90b9;
}

/* Add a background color and some padding around the form */
.emailform {
  border-radius: 50px;
  background-color: #f2f2f2;
  margin: 15%;
    padding: 3%;
   font-family: 'Raleway', sans-serif;
    font-weight:600;
    color: black;
    
    letter-spacing: 1.2px;
    box-shadow: 4px 4px 8px 1px rgba(0, 0, 0, 0.2), 0 4px 20px 0 rgba(0, 0, 0, 0.19);
}

    
    
    </style>
    
    
    </head>
    
    <body>
    
        
        
        <div class="navegation">
            <ul>
        <li><a href="index.html" class="on">Home</a> </li>
                <li><a href="about-me.html">About Me</a></li>
                <li><a href="my-work.html">My Work</a></li>
                <li><a href="portfolio-graphic-designs.html">Portfolio</a></li>
                <li><a href="contact.php">Contact</a></li>
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