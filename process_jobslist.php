<?php
include "connect.php"; 

$togo = null; 

$table_name = "jobs";

$query = "INSERT INTO `dumaremote`.`$table_name` (
`id` ,
`user_id` ,
`job_name`
)
VALUES "; 
$num_updates = 0; 
$index = 1; 
while ($index <= 3){

	$input = $_POST[$index];
	if ($input){ 
		$query = $query . "('', '".$userid."', '".$input."') ,"; 
		$num_updates = $num_updates + 1; 
	} 
	$index = $index + 1; 
}

$query = substr($query, 0,-1);

if ($num_updates) {
	mysql_query($query) or die(mysql_error());
}

if (isset($_POST['skipstep']))
{
	$togo = "top10.php";
} 
else if (isset($_POST['previous'])) {
   $togo = "signup.php"; 
}
else if (isset($_POST['next'])) {
   $togo = "criteria.php";    
}
else if (isset($_POST['add'])) {
   $togo = "jobslist.php";
}


echo '<META HTTP-EQUIV="Refresh" Content="0; URL= '.$togo.'">';    
exit; 
?>