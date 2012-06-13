<?
include "connect.php";

function print_body($category, $userid){
echo "<tbody>";
	$u_table_name = "user_".$category; 
	$contents = mysql_query("SELECT * FROM $category") or die (mysql_error());
	$given = mysql_query("SELECT * FROM $u_table_name WHERE user_id = $userid ") or die (mysql_error());
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




?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?include "signup_header.php"?>
    <div class="container">
		<div class="content">
			<div class="row" style="margin-left: 0px";>
				<div class="span16">
					<div class="row " style="margin-left: -10px; margin-bottom: 0px">
						<div class="span2" style="margin-bottom: 10px">
						<h4 class="glow" style="margin-top:10px;font-family: 'Trebuchet MS', sans-serif; font-size: 30px; font-weight: lighter; color:#444444; "> &nbsp;Step 2:</h4>
						</div>
						<div class="span5" style="margin-bottom: 10px; width:350px;">
						<h2 style="margin-top:10px;font-family: 'Trebuchet MS', sans-serif; font-weight: lighter; color:#444444; font-size: 25px; "> Tell us what you can do</h2>
						</div>
						
					</div>
				</div>
			</div>
			<form action="process_signup.php" method="post">
				<div class="row" style="margin-left: 0px";>
					<div class="span16">
						<div class="row" style="margin-left: 0px";>
							<div class="span3">
								<table height="25%" bgcolor="#f88017" style="vertical-align:middle">
									<tbody>
										<tr height="100%">
											<td valign="middle" height="100%" style="vertical-align:middle;"> 
												<img src="images/technicaltraining.png" height="55px"></img>
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
								<table height="25%" bgcolor="#f88017" style="vertical-align:middle;">
									<tbody>
										<tr height="100%">
											<td valign="middle" height="100%" style="vertical-align:middle;"> 
												<img src="images/university.png" height="55px"></img>
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
								<table height="25%" bgcolor="#f88017">
									<tbody>
										<tr height="100%">
											<td valign="middle" height="100%" style="vertical-align:middle;"> 
												<img src="images/workexperience.png" height="55px"></img>
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
								<table height="25%" bgcolor="#f88017">
									<tbody>
										<tr height="100%">
											<td valign="middle" height="100%" style="vertical-align:middle;"> 
												<img src="images/otherskills.png" height="60px"></img>
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
						<input class="btn small orange" type="submit" style="width:175px;" name="previous" value="Previous Step"> </input>
					</div>
					<div class="span3 offset8" style="margin-top: 15px;">
						<input class="btn small orange" type="submit" style="width:150px;" name="next" value="Next Step"> </input>
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
