
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
<link rel="stylesheet" href="css/style.css">  
<script src="js/jquery.js"> </script>
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
      </nav>
        <h4 align="center" id="msg"></h4>
        <h4 align="center" id="status"></h4>
       <div align="center" id="login button">
        <a href="index.php"><button hidden id="go_back">Continue</button>
        </a></div>
        
        <div  align="center" id="forgetpassword">

        <div id="forgetpasswordform">
                <label for="text">Enter OTP:
                    <br>
                    <input id="otp"; type="text" placeholder="Enter the otp"> 
                     <p id="status1"> <p>   
                 <button id='resend'>Resend</button> <button id="btn">Submit</button>
        </label> 
       </div>
    </div>
  
    <footer id="contact">
      <div id="mainfooter">
        <div class="contactitem" id="contactitem1">
          <h4>Follow Us</h4>
          <ul>
            <li>
              <a href=""
                ><img src="images/facebook_logo.svg" alt="Facebook" /> Facebook</a
              >
            </li>
            <li>
              <a href=""
                ><img src="images/instagram_logo.svg" alt="Instagram" /> Instagram</a
              >
            </li>
            <li>
              <a href=""
                ><img src="images/twitter_logo.svg" alt="Twitter" /> Twitter</a
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
                </body>
                <script>


                $(document).ready(function(){
                  <?php 
                  
session_start();
if(isset($_SESSION['id']))
{
  echo "$('#msg').hide();
          activated();
         ";
}
else

    if(isset($_GET['msg']) && isset($_SESSION['otp_id']) )
    {
              if($_GET['msg']==0)  
                {
                echo "$('#msg').html('OTP has been sent to {$_SESSION['email']} account').css('color','green');";}
                else
               { echo "$('#msg').html('OTP Sending Failed').css('color','red');";
                 echo "$('#btn').hide();";}

    }
    else
{
   header("location:signup.php");
} 
?>
                 
                  function activated()
                   {
                    $("#forgetpasswordform").hide();
                    $("#status").html("Your account is activated").css("color","green");
                    $("#msg").hide();
                    $("#go_back").show();
                   }
                  $("#otp").keydown(function(){
                    $("#status1").html("");
                     $("#status").html("");

                  })
                 $("#resend").click(function(){
                     $("#resend").html("Wait..");
                     $("#msg").html("Please Wait").css("color","white");
                    $.ajax({
                      url: "resend.php",
                      type :"post",
                      data : {resend : 1 },
                      success : function(data)
                       {
                        if(data==1)
                        {
                         <?php echo "$('#msg').html('OTP has been resent to {$_SESSION['email']} ').css('color','yellow');" ?>
                           $("#resend").html("Resend");
                           $("#btn").show();
                        }
                        else
                        {
                          $("#msg").html("OTP Resending Failed").css("color","red");
                           $("#resend").html("Resend");
                           $("#btn").hide();
                          }
                       }


                    });
                      
                  });
                  $("#btn").click(function(){
                     var otp =  $("#otp").val();
                      if(otp=="")
                      {
                        $("#status1").html("*fill this blank").css("color","red");
                         return false;
                      } 
                    $.ajax({
                      url : "otp_verifier.php",
                      type : "post",
                      data : {otp_id : otp},
                      success : function (data)
                      {
                         if(data==1)
                         {
                           activated();   
                        }else if(data==-1)
                        {
                          $("#status").html("OTP Is Expired").css("color","red");
                           $("#msg").hide();

                           $("#forgetpasswordform").hide();
                        }
                        else
                        {
                          $("#status").html("Invalid OTP").css("color","red");
                        }
                      }
                    });

                  });
 



                });
   </script>