<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="css/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap"
      rel="stylesheet"
    />
    <title>Different Tournament</title>
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
        <li><a href="index.php">Home</a></li>
        <li><a href="#explore">Explore</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <div id="loginbutton">
      <?php session_start();
       if(isset($_SESSION['id']))
        {   
           echo "{$_SESSION['name']}";
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
    <div class="freetourna">
        <div id="freetourna_box">
            <h3>Free solo Tournament</h3>
            <a href="tournamentform.php">
              <div id="item1" class="item">Win prize upto Rs. 20</div>
            </a>
            <div id="hide1" class="hide">  
              <ul>
                    <li>1 <sup>st</sup> place - 20</li>
                    <li>2 <sup>nd</sup> place - 10</li>
                    <li>3 <sup>rd</sup> place - 5</li>
                </ul>
            </div>
            <a href="tournamentform.php">
              <div id="item2" class="item">Win prize upto Rs. 40</div>
            </a>
            <div id="hide2" class="hide">
                <ul>
                    <li>1 <sup>st</sup> place - 40</li>
                    <li>2 <sup>nd</sup> place - 20</li>
                    <li>3 <sup>rd</sup> place - 10</li>
                </ul>
            </div>
          </div>
            <!-- Paid Tournament -->
          <div id="freetourna_box">
            <h3>Paid solo Tournament</h3>
            <a href="tournamentform.php">
              <div id="item1" class="item">Win prize upto Rs. 100</div>
            </a>
              <div id="hide1" class="hide">
                  <ul>
                      <li>Entry fee 5/-</li>
                      <li>1 <sup>st</sup> place - 100</li>
                      <li>2 <sup>nd</sup> place - 75</li>
                      <li>3 <sup>rd</sup> place - 50</li>
                  </ul>
              </div>
              <a href="tournamentform.php">
                <div id="item2" class="item">Win prize upto Rs. 300</div>
              </a>
              <div id="hide2" class="hide">
                  <ul>
                      <li>Entry fee 10/-</li>
                      <li>1 <sup>st</sup> place - 300</li>
                      <li>2 <sup>nd</sup> place - 150</li>
                      <li>3 <sup>rd</sup> place - 100</li>
                  </ul>
              </div>
          </div>
        </div>
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
            