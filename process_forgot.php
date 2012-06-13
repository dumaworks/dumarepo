<?
require "connect_wr.php";
require "send_sms.php";

$resend = null; 
$phone_number = null; 
$pass_code = null; 

if (isset($_POST['resend'])){
	if (isset($_POST['phone_number'])){
		$phone_number = $_POST['phone_number']; 
		$resend = $_POST['resend'];
	}
}

if (isset($_POST['phone_number'])){
	if (isset($_POST['pin1'])){
		if (isset($_POST['pin2'])){
			if (isset($_POST['confirm_code'])){
				$phone_number = $_POST['phone_number']; 
				$confirm_code = $_POST['confirm_code']; 
				$pin1 = $_POST['pin1'];
				$pin2 = $_POST['pin2'];
			}
		}
	}
}

if ($confirm_code && $phone_number && $pin1 && $pin2) {
	if ($pin1 == $pin2 && $pin1 != null){
		$info = mysql_query ("SELECT * FROM `users` WHERE `username` = '$phone_number' AND `forgotten_password_code` = '$confirm_code' LIMIT 0 , 30") or die (mysql_error());
		if (mysql_num_rows($info) > 0){
			$cryptedPassword = md5($pin1);
			mysql_query("UPDATE `dumaremote`.`users` SET `password` = '$cryptedPassword' WHERE `username` = '$phone_number' and `forgotten_password_code` = '$confirm_code' LIMIT 1") or die (mysql_error());
			header("location:index.php?B$@4it=10");
		}
		else{
			header("location:forgot.php?B$@4it=2&pn=".$phone_number);
		}
	}
	else{
		header("location:forgot.php?B$@4it=3&pn=".$phone_number);
	}
}
else if ($resend && $phone_number){
	$result = mysql_query("SELECT * FROM `users` WHERE `username` = '$phone_number' LIMIT 0 , 30") or die(mysql_error());
	if (mysql_num_rows($result) > 0) {
		$result = mysql_fetch_assoc($result); 
		$passkey = $result["forgotten_password_code"]; 
		
		$message = "Your password reset code is $passkey.";
		$result = send_message($phone_number, $message);
		
		if($result)
		{
			//send add with lastID
			header("location:forgot.php?pn=$phone_number&rs=1");
		}
		else
		{
			header("location:index.php?B$@4it=2");
		}
	}
	else{
		header("location:forgot.php?B$@4it=3");
	}
}
else{
	header("location:forgot.php?B$@4it=1");
}

?>