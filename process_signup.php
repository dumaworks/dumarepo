<?php
include "connect.php"; 

$togo = null; 

function update_table($option_name, $userid){
	$table_name = "user_".$option_name; 
	
	$contents = mysql_query("SELECT * FROM $option_name") or die(mysql_error());
	
	$query = "INSERT INTO `dumaremote`.`$table_name` (
	`user_id` ,
	`skill_id` ,
	`rating`
	)
	VALUES "; 
	$num_updates = 0; 
	
	while ($content = mysql_fetch_assoc($contents)){
		$content_id = $content["id"];
		$cat_id = $option_name."_".$content_id; 
		$input = $_POST[$cat_id];
		if ($input){ 
			$query = $query . "('".$userid."', '".$content_id."', '') ,"; 
			$num_updates = $num_updates + 1; 
		} 
	}

	$query = substr($query, 0,-1);
	
	mysql_query("DELETE FROM `$table_name` WHERE user_id = $userid") or die (mysql_error()); 
	if ($num_updates) {
		mysql_query($query) or die(mysql_error());
	}
}

update_table("polytechnic", $userid);
update_table("university_degree", $userid);
update_table("work_experience", $userid);
update_table("skills", $userid);
if (isset($_POST['next']))
{
	$togo = "jobslist.php"; 
} 
else if (isset($_POST['previous'])) {
	$togo = "generalInfo.php"; 
}

echo '<META HTTP-EQUIV="Refresh" Content="0; URL= '.$togo.'">';    
exit; 

?>