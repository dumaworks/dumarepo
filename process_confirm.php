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
	if (isset($_POST['pass_code'])){
		$phone_number = $_POST['phone_number']; 
		$pass_code = $_POST['pass_code']; 
	}
}

if ($pass_code && $phone_number) {
	$info = mysql_query ("SELECT * FROM `users` WHERE `username` = '$phone_number' AND `activation_code` = '$pass_code' LIMIT 0 , 30") or die (mysql_error());
	if (mysql_num_rows($info) > 0){
		mysql_query("UPDATE `dumaremote`.`users` SET `has_confirmed` = '1' WHERE `username` = '$phone_number' and `activation_code` = '$pass_code' LIMIT 1") or die (mysql_error());
		header("location:index.php?B$@4it=9");
	}
	else{
		header("location:confirm.php?B$@4it=2&pn=".$phone_number);
	}
}
else if ($resend && $phone_number){
	
	$result = mysql_query("SELECT * FROM `users` WHERE `username` = '$phone_number' LIMIT 0 , 30") or die(mysql_error());
	if (mysql_num_rows($result) > 0) {
		$result = mysql_fetch_assoc($result); 
		$passkey = $result["activation_code"]; 
		
		$message = "Your Confirmation code is $passkey. ";
		$result = send_message($phone_number, $message);
		
		if($result)
		{
			//send add with lastID
			header("location:confirm.php?pn=$phone_number&rs=1");
		}
		else
		{
			header("location:index.php?B$@4it=2");
		}
	}
	else{
		header("location:confirm.php?B$@4it=3");
	}
}
else{
	header("location:confirm.php?B$@4it=1");
}

?>