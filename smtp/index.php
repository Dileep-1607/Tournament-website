<?php
include('smtp/PHPMailerAutoload.php');

// $html="verification code is :- 
// 	 <h1 align='center'>{11}</h1>
// 	 or 
// 	 link to active your account : -
// 	 http://localhost/new/smtp/check.php?login={23}";
//  _mailer('cdas99633@gmail.com','Account Registration',$html);

function _mailer($to,$subject,$msg){
	$mail = new PHPMailer(); 
	$mail->SMTPDebug  = 0;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "timepracticee@gmail.com";
	$mail->Password = "123@time123";
	$mail->SetFrom("timepracticee@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));

	if(!$mail->Send()){
     return true;
	}
	else{
		return false;
	}

}

?>