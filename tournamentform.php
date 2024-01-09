<?php session_start();
       if(!(isset($_SESSION['id'])))
        {   
          header("location:login.php");
        }
        
      ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Document</title>
  </head>
  <body>
    <!-- Start of Navbar -->
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
        <li><a href="index.php">Home</a></li>
        <li><a href="#explore">Explore</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <div id="loginbutton">
        <?php echo "{$_SESSION['name']}"; ?>
      <a href="logout.php">
           <button>Logout</button>
            </a>  
      </div>
    </nav>
    <!--  End of navbar-->

    
    <div class="tournament_page">
      <h1>Tournaments form</h1>
      <form class="tournament_pageform">
        <label> Pubg ID: </label>
        <input
          class="input"
          placeholder="Enter your pubg Id"
          type="text"
          name="firstname"
          size="15"
        />
       
        <label> Player name: </label>
        <input
          class="input"
          placeholder="Enter Your Name"
          type="text"
          name="middlename"
          size="15"
        />
        <input type="button" value="submit" />
      </form>
    </div>
    <footer id="contact">
      <div id="mainfooter">
        <div class="contactitem" id="contactitem1">
          <h4>Follow Us</h4>
          <ul>
            <li>
              <a href="https://www.facebook.com" target="_blank"
                ><img src="images/facebook_logo.svg" alt="" /> &nbsp; Facebook</a
              >
            </li>
            <li>
              <a   href="https://www.Instagram.com" target="_blank"
                ><img src="images/instagram_logo.svg" alt="" />&nbsp; Instagram</a
              >
            </li>
            <li>
              <a href="https://www.twitter.com" target="_blank"
                ><img src="images/twitter_logo.svg" alt="" /> &nbsp; Twitter</a
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
