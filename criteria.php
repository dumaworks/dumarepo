<?
include "connect.php";

	$jid = -1; 

	if (isset($_GET["jid"])){
			$jid = $_GET["jid"];
		}
function print_body($category, $userid){
	$jid = -1; 

	if (isset($_GET["jid"])){
			$jid = $_GET["jid"];
		}

	if ($jid >= 0) {
		echo "<tbody>";
			$u_table_name = "jobs_".$category; 
			$contents = mysql_query("SELECT * FROM $category") or die (mysql_error());
			$given = mysql_query("SELECT * FROM $u_table_name WHERE user_id = $userid AND job_id = $jid") or die (mysql_error());
			$selected_items = array(); 
			while($given_item = mysql_fetch_assoc($given)){
				$item_index = $given_item["skill_id"];
				$selected_items[$item_index] = "1";
			}
			while ($content = mysql_fetch_assoc($contents)){
			echo "
				<tr>
					<td>";
						$content_name = $content["name"]; 
						$content_id = $content["id"]; 
						$cat_name = $category."_".$content_id; 
						
						echo "<input type=\"checkbox\" name=\"$cat_name\"";
						if (isset($selected_items[$content_id])){ echo " CHECKED ";}
						echo " value=\"1\" />"; 
						echo " $content_name "; 
						echo "
					</td>
				</tr>";
			}
			echo "</tbody>"; 
		}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <?include "signup_header.php"?>
    <div class="container">
		<div class="content">
		<form action="process_criteria.php" method="post">
			<input type="hidden" name="job_id" value="<?echo "$jid";?>"></input>
			<div class="row" style="margin-left: 0px";>
				<div class="span16">
					<div class="row " style="margin-left: -10px; margin-bottom: 0px">
						<div class="span2" style="margin-bottom: 10px">
						<h4 class="glow" style="font-family: 'Trebuchet MS', sans-serif; font-size: 30px; font-weight: lighter; color:#444444; "> &nbsp;Step 3:</h4>
						</div>
						<div class="row" style="margin-bottom: 10px; width:500px;">
						
						<h2 style="font-family: 'Trebuchet MS', sans-serif; font-weight: lighter; color:#444444; font-size: 25px; "> Tell us your hiring criteria for: </h2> 
						<select class="xlarge" style = "width: 340px;"name="location_select" id="location_select"> 
						<option value="nothing"> </option>
						<?
						$data = mysql_query("SELECT * from `jobs` where `user_id` = '$userid'") or die(mysql_query);
						while ($job_details = mysql_fetch_assoc($data)){
						$job_name = $job_details["job_name"];
						$job_id = $job_details["id"];
							if ($job_name) {
							echo "<option value=\"$job_id\""; if($jid == $job_id){echo "SELECTED";} echo"> $job_name </option>"; 
							}
						}
						?>
						</select>
						  <script language="javascript">
							var selectmenu=document.getElementById("location_select")
							
							selectmenu.onchange=function(){ //run some code when "onchange" event fires
							 var chosenoption=this.options[this.selectedIndex] //this refers to "selectmenu"
							 if (chosenoption.value!="nothing"){
							 var togo = "criteria.php?jid=" + chosenoption.value
							  window.location = togo //open target site (based on option's value attr) in new window
							 }
							}
							</script>
						
						</div>
						
					</div>
				</div>
			</div>
			
				<div class="row" style="margin-left: 0px";>
					<div class="span16">
						<div class="row" style="margin-left: 0px";>
							<div class="span3">
								<table height="25%" bgcolor="#6698ff;" style="vertical-align:middle; background-color: #6698ff;">
									<tbody>
										<tr height="100%">
											<td valign="middle" height="100%" style="vertical-align:middle;"> 
												<img src="images/Otechnicaltraining.png" height="55px"></img>
											</td>
											<td align="left" valign="middle" width="90%"height="100%" style="vertical-align:middle">
												<p style="font-size: 16px; font-family: 'Trebuchet MS', sans-serif; color: #000; font-weight: bold; ">Polytechnic or Technical School</p>
											</td>
										</tr>
									</tbody>
								</table>
							<div class="row" style="overflow-x:hidden; overflow-y:scroll; height:70%;margin-left:10px; margin-top:-15px;">
								<table class="zebra-striped" >
									<? print_body("polytechnic", $userid); ?>
								</table>
							</div>	
							</div>
							<div class="span3">
								<table height="25%" bgcolor="#6698ff;" style="vertical-align:middle; background-color: #6698ff;">
									<tbody>
										<tr height="100%">
											<td valign="middle" height="100%" style="vertical-align:middle;"> 
												<img src="images/Ouniversity.png" height="55px"></img>
											</td>
											<td align="left" valign="middle" width="90%"height="100%" style="vertical-align:middle;">
												<p style="font-size: 16px; font-family: 'Trebuchet MS', sans-serif; color: #000; font-weight: bold; "> University Degree</p>
											</td>
										</tr>
									</tbody>
								</table>
							<div class="row" style="overflow-x:hidden; overflow-y:scroll; height:70%;margin-left:10px; margin-top:-15px;">
								<table class="zebra-striped" >
										<? print_body("university_degree", $userid); ?>
								</table>
							</div>	
							</div><div class="span3">
								<table height="25%" bgcolor="#6698ff;" style="vertical-align:middle; background-color: #6698ff;">
									<tbody>
										<tr height="100%">
											<td valign="middle" height="100%" style="vertical-align:middle;"> 
												<img src="images/Oworkexperience.png" height="55px"></img>
											</td>
											<td align="left" valign="middle" width="90%"height="100%" style="vertical-align:middle;">
												<p style="font-size: 16px; font-family: 'Trebuchet MS', sans-serif; color: #000; font-weight: bold; "> Previous Work Experience</p>
											</td>
										</tr>
									</tbody>
								</table>
							<div class="row" style="overflow-x:hidden; overflow-y:scroll; height:70%;margin-left:10px; margin-top:-15px;">
								<table class="zebra-striped" >
									<? print_body("work_experience", $userid); ?>
								</table>
							</div>	
							</div><div class="span3">
								<table height="25%" bgcolor="#6698ff;" style="vertical-align:middle; background-color: #6698ff;">
									<tbody>
										<tr height="100%">
											<td valign="middle" height="100%" style="vertical-align:middle;"> 
												<img src="images/Ootherskills.png" height="60px"></img>
											</td>
											<td align="left" valign="middle" width="90%"height="100%" style="vertical-align:middle;">
												<p style="font-size: 16px; font-family: 'Trebuchet MS', sans-serif; color: #000; font-weight: bold; "> Other Skills</p>
											</td>
										</tr>
									</tbody>
								</table>
							<div class="row" style="overflow-x:hidden; overflow-y:scroll; height:70%;margin-left:10px; margin-top:-15px;">
								<table class="zebra-striped" >
										<? print_body("skills", $userid); ?>
								</table>
							</div>	
							</div>
						</div>
					</div>
				</div>
				<div class="row" style="margin-left: 0px";>
					<div class="span4" style="margin-top: 15px; min-height: 50px; margin-left: 25px; border-left: 0px;">
						<input class="btn small primary" type="submit" style="width:175px;" name="previous" value="Previous Step"> </input>
					</div>
					<div class="span3 offset8" style="margin-top: 15px;">
						<input class="btn small primary" type="submit" style="width:150px;" name="next" value="Next Step"> </input>
					</div>
				</div>
			</form>
			
		</div>
		<?include "bottom_pane.php"?>
		<footer>
			<p>&copy; Duma 2011</p>
		</footer>
    </div> 
  </body>
</html>
