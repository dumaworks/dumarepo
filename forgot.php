<?
$phone_number = null; 

if (isset($_GET["pn"])){
	$phone_number = $_GET["pn"]; 
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
							<div class="span2" style="margin-bottom: 10px; width:90%">
							<h4 class="glow small" style="margin-top:10px;font-family: 'Trebuchet MS', sans-serif; font-size: 25px; font-weight: lighter; width: 800px; color:#444444; ">
							Change Password </h4>
							</div>
						</div>
						<? if (isset($_GET["B$@4it"]) || isset($_GET["rs"])){?> <div class="row" style="width:100%;">
						<div class="alert-message warning" style="background-color:orange; margin-left:150px; height: 20px;">
							<table bgcolor="orange"><tr><td><p style="color:white;"> 
							<?php $errno = $_GET["B$@4it"];
							if ($errno == 1) { echo "Error: Please fill in all fields and click submit";} 
							else if ($errno == 2) { echo "Error: Invalid phone number or confirm code";} 
							else if ($errno == 3) { echo "Error: The pins provided do not match";} 
							if ($phone_number && isset($_GET["rs"])){echo "The confirmation code has been resent to $phone_number";}
							
							?></p></td></tr></table>
							</div>
						</div><?}?>
						
						<div class="row " style="margin-left: 10px; margin-top: 10px; ">

							<div class = "span8" style="width:900px;">
							<h4>If you do not have your confirmation code, please insert your phone number and we shall send it to you</h4>
								<form action="process_forgot.php" method="post" class="pull-left">
									<table width="350px">
										<tbody>
											<tr>
												<td align="right" valign="middle" height="100%" style="vertical-align:middle; width:100px" > Phone</td>
												<td font=""> <input class="input-xlarge" type="text" name="phone_number"> </input></td>
												<input type="hidden" value="1" name="resend"></input>
												<td> <button class="btn large orange" type="submit"> Send Confirm Code </button></td>
											</tr>
										</tbody>
									</table>	
								</form>
							</div>
							
							<div class = "span8" style="width:900px;">
							<h4>If you already have your confirm code, reset your password below. </h4>
								<form action="process_forgot.php" method="post" class="pull-left">
									<table width="350px">
										<tbody>
											<tr>
												<td align="right" valign="middle" height="100%" style="vertical-align:middle; width:100px" > Phone</td>
												<td font=""> <input class="input-xlarge" type="text" name="phone_number" value="<?if ($phone_number) {echo "$phone_number"; }?>"> </input></td>
										
												<td align="right" valign="middle" height="100%" style="vertical-align:middle;width:100px"> New Pin </td>
												<td font=""> <input class="input-xlarge" type="password" name="pin1"> </input></td>
											</tr>
											<tr>
												<td align="right" valign="middle" height="100%" style="vertical-align:middle;width:100px"> Confirm Code </td>
												<td font=""> <input class="input-xlarge" type="text" name="confirm_code"> </input></td>
											
												<td align="right" valign="middle" height="100%" style="vertical-align:middle;width:100px"> Re-Enter Pin </td>
												<td font=""> <input class="input-xlarge" type="password" name="pin2"> </input></td>
											</tr>
											<tr>
												<td><p>&nbsp;</p></td>
												<td> <button class="btn large orange" type="submit">Reset Password </button></td>
											</tr>
										</tbody>
									</table>	
								</form>
							</div>
							
						</div>
					</div>
				</div>	
			</div>
			
		<?include "bottom_pane.php"?>
		<footer>
			<p>&copy; Duma 2011</p>
		</footer>
    </div> 
  </body>
</html>
