<?php
include "connect.php"; 

$togo = null; 

function update_table($option_name, $userid, $jobid){
	$table_name = "jobs_".$option_name; 
	
	$contents = mysql_query("SELECT * FROM $option_name") or die(mysql_error());
	
	$query = "INSERT INTO `dumaremote`.`$table_name` (
	`user_id` ,
	`skill_id` ,
	`job_id`,
	`rating`
	)
	VALUES "; 
	$num_updates = 0; 
	
	while ($content = mysql_fetch_assoc($contents)){
		$content_id = $content["id"];
		$cat_id = $option_name."_".$content_id;
		if (isset($_POST[$cat_id])){
			$input = $_POST[$cat_id];
			if ($input){ 
				$query = $query . "('".$userid."', '".$content_id."', '".$jobid."','') ,"; 
				$num_updates = $num_updates + 1; 
			} 
		}
	}

	$query = substr($query, 0,-1);

	mysql_query("DELETE FROM `$table_name` WHERE user_id = $userid and job_id = $jobid") or die (mysql_error()); 
	if ($num_updates) {
		mysql_query($query) or die(mysql_error());
	}
}

if (isset($_POST['job_id'])){
	$jobid = $_POST['job_id']; 
}
if ($jobid){
	update_table("polytechnic", $userid, $jobid);
	update_table("university_degree", $userid, $jobid);
	update_table("work_experience", $userid, $jobid);
	update_table("skills", $userid, $jobid);
}
if (isset($_POST['next']))
{
    $togo = "top10.php";    
} 
else if (isset($_POST['previous'])) {
    $togo = "jobslist.php"; 
}

echo '<META HTTP-EQUIV="Refresh" Content="0; URL= '.$togo.'">';    
exit; 
?>