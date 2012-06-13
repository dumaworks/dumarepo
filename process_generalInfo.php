<?
/* writes user info into meta table */

include "connect.php";

$error = 2;

if (isset($_POST["email"])){
	$email = $_POST["email"];
}
/*else
{
	$error = 1; 
}*/

// required fields: location, gender, age
// optional: education level, email address
$location = $_POST["location_select"];
if (isset($location) && $location){
	
	echo "loc set: $location <br>";
}
else
{
    echo "loc not set <br>";
	$error = 1; 
}
$age = $_POST["age_select"];
if (isset($age) && $age){
	echo "age set: $age <br>";
}
else
{
	$error = 1; 
}
$gender = $_POST["gender_select"];
if (isset($gender) && $gender){
	echo "gender set: $gender<br>";
}
else
{
	$error = 1; 
}

if (isset($_POST["edu_primary"])){
	$edu_primary = 1;
}  
else $edu_primary = 0;

if (isset($_POST["edu_secondary"])){
	$edu_secondary = 1;
}  
else $edu_secondary = 0;

if (isset($_POST["edu_university"])){
	$edu_university = 1;
}  
else $edu_university = 0;

if (isset($_POST["edu_technical"])){
	$edu_technical = 1;
}  
else $edu_technical = 0;

echo " em: $email , loc: $location , age: $age, gender: $gender,
	pri: $edu_primary, sec: $edu_secondary, uni: $edu_university, 
	tech: $edu_technical <br>";

echo "user id $userid <br>";
if ($error == 2) {
	mysql_query("UPDATE `dumaremote`.`meta` SET
	`email` = '$email', 
	`location` = '$location',
	`age` = '$age',
	`gender` = '$gender',
	`edu_primary` = '$edu_primary',	
	`edu_secondary` = '$edu_secondary',
	`edu_university` = '$edu_university', 
	`edu_technical` = '$edu_technical'
	 WHERE `meta`.`user_id` = '$userid' LIMIT 1;") or die (mysql_error());
	header("location:signup.php");
	}
else {
	header("location:generalInfo.php?B$@4it=1");
	//echo "error <br>";
}

?>