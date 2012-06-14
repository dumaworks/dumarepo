<?include "connect.php";?><!DOCTYPE html>
<html lang="en">
  <head>
    <?include "signup_header.php"?>
    <div class="container">
		<div class="content">
			<div class="row" style="margin-left: 0px;";>
				<div class="span16">
					<div class="row " style="margin-left: -10px; margin-bottom: 0px">
						<div class="span2" style="margin-bottom: 5px">
						<h4 class="glow" style="margin-top:5px;font-family: 'Trebuchet MS', sans-serif; font-size: 30px; font-weight: lighter; color:#444444; "> &nbsp;Step 4:</h4>
						</div>
						<div class="span5" style="margin-bottom: 7px; width:350px;">
						<h2 style="margin-top:7px;font-family: 'Trebuchet MS', sans-serif; font-weight: lighter; color:#444444; font-size: 25px; "> List your "Top 10"</h2>
						</div>
						<div class="span15" style="margin-bottom: 7px;">
						<h2 style="font-family: 'Trebuchet MS', sans-serif; font-weight: medium; color:#444444; font-size: 15px; line-height: 20px;"> 
						Who do you ask for help when you need a job or when you want to hire? <br> You might consider listing close friends and family or your best employees. </br> 
						 </h2>
						</div>
						
					</div>
				</div>
			</div>
			<form action="process_top10.php" method="POST">
				<div class="row" style="margin-left: 0px";>
					<div class="span16">
						<div class="row" style="margin-left: 0px";>
						
						<table width="200px" style="margin-bottom: 5px; width: 150px;">
							<tbody>
								<div class="img">  <img src="images/socialweb.png" alt="social web" height="375px"align="right"valign="top" style="margin-top:-60px"/></img>
								<?$index = 1; 
								$con_data = mysql_query ("SELECT * FROM `user_connections` WHERE `user_id` = $userid LIMIT 0 , 30 ");

								while ($index <= 10) {
								$con_array = mysql_fetch_array($con_data); 
								$cnm = null; 
								$cnp = null; 
								
								if ($con_array != null) {
									$cnm = $con_array["connection_name"];
									$cnp = $con_array["connection_phone"];
									}
								?>
								<tr>
									<td width="10%"align="right" valign="middle" height="100%" style="vertical-align:middle;" > <?echo "$index";?> </td>
									<td width="40%"> <input class="input-medium" style="height: 15px;"type="text" name = "full_name<?echo ($index);?>"
									placeholder="Full Name " <?if ($cnm != null) {echo "value=\"$cnm\"";}?> > </input></td>
									<td width="40%"> <input  class="input-medium" style="height: 15px;"type="text" name = "phone_number<?echo ($index);?>" 
									placeholder="Phone Number" <?if ($cnp != null) {echo "value=\"$cnp\"";}?>> </input></td>
								</tr>
								<? $index++; } ?>
									
							</tbody>
						</table>
						
						</div>
					</div>
				</div>
				<div class="row" style="margin-left: 0px";>
										<div class="span3" style="margin-top: -38px;margin-bottom:-10px;">
						<input class="btn small orange" type="submit" style="margin-left: 375px; height:30px;font-size:15px;width:150px;" name="submit" value="Submit!"> </input>
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
