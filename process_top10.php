<?php
include "connect.php"; 

$con_data = mysql_query ("SELECT * FROM `user_connections` WHERE `user_id` = $userid LIMIT 0 , 30 "); 
$rows = mysql_num_rows ($con_data); 
while ($con_array = mysql_fetch_array($con_data)) {
	$cnm = $con_array["connection_name"];
	$cnp = $con_array["connection_phone"];
} 

$index = 1; 
while ($index <= 10) {
	$string_name = "full_name".$index; 
	$string_phone = "phone_number".$index;
	$con_name = $_POST[$string_name];
	$con_phone = $_POST[$string_phone];
	
	$exists = mysql_query("SELECT *
	FROM `user_connections`
	WHERE `user_id` = '$userid'
	AND `connection_phone` = '$con_phone'
	LIMIT 0 , 30"); 
	
	if ((mysql_num_rows($exists) == 0) && ($con_name != null) && ($con_phone != null)) {
		mysql_query ("INSERT INTO `dumaremote`.`user_connections` (
		`user_id` ,
		`connection_name` ,
		`connection_phone` ,
		`connection_id`
		)
		VALUES (
		'$userid', '$con_name', '$con_phone', NULL
		);"); 

		}
	$index++;	 
}  



    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=welcome.php">';    
    exit; 


?>