<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css">
    <title>Website name</title> 
  
    <style>
     
    </style>
   
  </head>
  <body>
    <nav id="navbar">
      <div>
        <a href="index.php">
          <img
            src="https://thumbs.dreamstime.com/b/water-wave-rs-logo-vector-swoosh-letter-design-business-company-identity-223255086.jpg"
            alt="Logo"
          />
        </a>
      </div>
      <ul>
        <li><a href="#navbar">Home</a></li>
        <li><a href="#explore">Explore</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <div id="loginbutton">
       <?php session_start();
       if(isset($_SESSION['id']))
        {   
           echo "{$_SESSION['name']} ";
           echo '<a href="logout.php">
           <button>Logout</button>
            </a>';
        }
        else{
          echo '<a href="login.php">
          <button>Login</button>
        </a>';
        }
      ?>
        
      </div>
    </nav>
    <!-- Images slider Start -->
    <div id="imageslider">

    </div>    
    <!-- Explore Section  -->

    <section id="explore">
      <p>To Join a Tournament click on the game below -
      </p>
      <div class="exploreitem">
        <div class="exploreitempicture">
          <a href="pubg_varioustourna.php">
            <img src="images/image_1.jpg" height="200px" width="100%" alt="" />
          </a>
        </div>
        <div class="exploreitempicture">
          <a href="freefire_varioustourna.php">
            <img src="images/image_2.jpg" height="200px" width="100%" alt="" />
          </a>
        </div>
      </div>
    </section>

     <!-- Winner Palette  -->
     <div id="winnerpalette">
    </div>

    <!-- About Section  -->

    <section id="about">
      <h3>About Us</h3>
      <p>
       Our Motive is to encourage players to play games and win exciting prizes in accordance with their skill.
       Also we want to contribute in the growth of gaming industry in India
      </p>
    </section>

    <!-- Footer / Contact Section  -->

    <footer id="contact">
      <div id="mainfooter">
        <div class="contactitem" id="contactitem1">
          <h4>Follow Us</h4>
          <ul>
            <li>
              <a href=""
                ><img src="images/facebook_logo.svg" alt="" /> Facebook</a
              >
            </li>
            <li>
              <a href=""
                ><img src="images/instagram_logo.svg" alt="" /> Instagram</a
              >
            </li>
            <li>
              <a href=""
                ><img src="images/twitter_logo.svg" alt="" /> Twitter</a
              >
            </li>
          </ul>
        </div>
        <div class="contactitem" id="contactitem2">
          <h4>Contact Us</h4>
          <ul>
            <li>Panchkula, Haryana, India</li>
            <li>livetournament @gmail.com</li>
            <li>+91-1234567890</li>
          </ul>
        </div>
      </div>
      <h6>Copyright @ Webiste name All rights reserved</h6>
    </footer>
  </body>
</html>
