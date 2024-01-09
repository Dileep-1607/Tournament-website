<?php
if(isset($_SESSION['id']))
{
 echo " <script>
   history.back();
   </script>";

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
    <script src="js/jquery.js"></script>
    
    <title>Login Page</title>

</head>
<style>
</style>
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
          <a href="signup.php">
            <button>Sign Up</button>
          </a>
        </div>
      </nav>
<div class="loginpage">
    <h3> Log in</h3>
    <form action="" class="loginpageform" >
        <p align="center" id="main_msg"></p>
        <span>Email:</span>
        <input id="email" type="email" placeholder="Enter your email" required >
        <p id="e_msg"></p>
        <label >Password:</label>
        <input id="pass" type="password" placeholder="Enter your password" required>
        <p id="p_msg"></p>
        <!-- <a href="forgot_password.html">forget password?</a> -->
        <button id="submit" >Submit</button>
        <!-- <a href="signup.html">New User? Register</a> -->
        <a href="forgot_password.html">forget password?</a>


    </div>
</form>    
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
  var e_mail=true;
  var pass_word = true;

    $("#email").keydown(function(){

      $("#e_msg").html("");

    });

    $("#email,#pass").keydown(function(){
      $("#main_msg").html("");
    })
    
    
    function email()
    {
      var e = $("#email").val();
      if(e=="")
      {
        $("#e_msg").html("*fill this blank").css("color","red");
        e_mail = false;
      }
    else {
     $.ajax({
      url : "checks/email_check.php",
      type : "post",
      data : {email:e},
      success : function(data)
      {
              if(data==1)
              {
                $("#e_msg").html("*email doesn't exists").css("color","yellow");
                 e_mail=false;
              }
             
      }
     
     });
    }
      
    }
   function pass()
   {
    if($("#pass").val()=="")
    {
      $("#p_msg").html("*fill this blank").css("color","red");
       pass_word=false;
    }
}
$("#pass").keydown(function(){

  $("#p_msg").html("");
})

$("#submit").click(function(){
      event.preventDefault();  
      email();
      pass();
      if(e_mail && pass_word)
      {     
           var _email = $("#email").val();
           var _pass = $("#pass").val();
           $.ajax({
            url: "user_handling/login_submit.php",
            type : "post",
            data : {email:_email , pass:_pass} ,
            success : function (data)
            {

              if(data==1)
               {
                  // $(location).attr("href","index.php");
                   history.back(); 
               }
              else{
                $("#main_msg").html("Entered Invalid User Details").css("color","red");
                 }

            }


           })
           
      }
});



});

</script>
</html>


