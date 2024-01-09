
<?php
session_start();
if(isset($_SESSION['id']))
{
  header("location:index.php");
  


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <script src="js/jquery.js"> </script> <title>Sign Up</title>
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
          <a href="login.php">
            <button>Login</button>
          </a>
        </div>
      </nav>
      
    
<div class="signup_page">
   
    <h3> SIGN UP</h3>
    <h2 id="h"></h2>
    <form id="form" class="signup_pageform">
        <span>Name:</span>
        <input type="text" name="name" placeholder="Enter your name" id="name">
        <p id="s_name"></p>
        <span>Email:</span>
        <input type="email" name="email" placeholder="Enter your email" id="email">
        <span>Password:</span>
        <input type="password" name="pass" placeholder="Enter your password" id="pass">
        <span>Confirm Password:</span>
        <input type="password" placeholder="confirm your password" id="con-pass">
        <p id="status"></p>
        <button id="submit">Submit</button>
        <!-- <a href="login.html">Already a user</a> -->
    </div>
</form>




    <!--  End of navbar-->

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
<script>
$(document).ready(function(){

var name,email,pass,con_pass;
 
$("#name").keyup(function(){
   _name();
});

$("#con-pass").keyup(function(){
_con_pass();
});
 function _name()
 {
    var var1 = $("#name").val();

   $.ajax({
     url: "checks/filter.php",
     type: "post",
     data: {str : var1 },
     success : function(data)
     {
       if(data==1)
       {
        $("#s_name").html("*fill this blank").css("color","red");
        name=false;
       }
       else
       if(data==2)
       { 
         $("#s_name").html("*special character aren't allowed").css("color","red");
         
         name=false; }
       else
      { $("#s_name").html("");
          name=true;
      }
     }
  

   });



}

  function _con_pass()
  {
   var c_pass = $("#con-pass").val();
   var pass = $("#pass").val();
   if(c_pass=="")
   {
     $("#status").html("*fill this blank").css("color","red");
   }
   else if(pass===c_pass)
   {
     $("#status").html(" ");
     con_pass=true;
   }
    else
    {
      $("#status").html("*Password Aren't Matched").css("color","red"); 
       con_pass=false;
    }

  }

 $("#submit").click(function(){
   
      //$("#submit").html('');
       event.preventDefault();
         _name();
         _con_pass();
       
        if(name && con_pass)
        {
            $("#submit").html("Please Wait");
            //$("#submit").attr("Disabled");
      
          $.ajax({
            
            url: "user_handling/submit.php",
            type: "post",
            data: $("#form").serialize(),
            success : function(data)
             { 

                 if(data==1)
                $(location).attr("href","otp_redirect.php");
               
                else
                $("#h").html("Error Occured").css("color","red");
                    
            
             }

            
          });
          
        
        }
       
    
   })  

});

</script>
</html>

