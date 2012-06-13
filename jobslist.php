<?include "connect.php"; ?>
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
							<h4 class="glow" style="margin-top:10px;font-family: 'Trebuchet MS', sans-serif; font-size: 30px; font-weight: lighter; color:#444444; "> &nbsp;Step 3:</h4>
							</div>
							<div class="span12" style="margin-bottom: 10px;">
							<h2 style="margin-top:10px;font-family: 'Trebuchet MS', sans-serif; font-weight: lighter; color:#444444; font-size: 25px; "> Tell us what jobs you have</h2>
							</div>
						
						<div class="span15" style="margin-bottom: 7px; margin-left: 30px; margin-right: auto;">
						<form action="process_jobslist.php" method="post" >
							<h2 style="font-family: 'Trebuchet MS', sans-serif; text-align: left; font-weight: medium; color:#444444; font-size: 16px; line-height: 20px;"> 
								This step only applies for employers.  If you will not be using DUMA to hire employees, you can 
								
								<button class="btn small orange" type="submit" style="width:160px; height:30px; font-size:15px;" name="skipstep"> Skip this step <button/>
								 
							</h2>
							</div>
						</form>
						</div>
						<div class="row " style="margin-left: -10px; margin-bottom: 0px; ">

							<div class = "span8" style="">
								<form action="process_jobslist.php" method="post" class="pull-left">
									<div class="row" style="margin-left: 0px";>
										<div class="span4" style="margin-top: 0px; min-height: 40px; border-left: 0px solid #eee;">
											
										</div>
									</div>
									<table width="350px" style="margin-left:-50px;margin-top:-40px;margin-bottom: -20px;">
										<tbody>
											<tr>
												<td align="right" valign="middle" height="100%" style="vertical-align:middle; " > Job 1 </td>
												<td font=""> <input class="input-xlarge" type="text" name="1" placeholder="Keyword (e.g. mechanic)"> </input></td>
												
												 
											</tr>
											<tr>
												<td align="right" valign="middle" height="100%" style="vertical-align:middle;"> Job 2 </td>
												<td font=""> <input class="input-xlarge" type="text" name="2" placeholder="Keyword (e.g. electrician)"> </input></td>
											</tr>
											<tr>
												<td align="right" valign="middle" height="100%" style="vertical-align:middle;"> Job 3 </td>
												<td font=""> <input class="input-xlarge" type="text" name="3" placeholder="Keyword (e.g. tailor)"> </input></td>
											</tr>
										</tbody>
									</table>
									<div class="row" style="margin-left: 0px; margin-top: 30px;">
										<div class="row" style="margin-top: 0px; min-height: 50px; border-left: 0px solid #eee;">
											<input class="btn small primary" type="submit" name="add" value="Add Another Job" style="margin-left:38px;height: 30px; width: 150px; font-size: 15px;"> </input>
											<div class="btn small primary" value="View Listed Jobs" 
											onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'"
											style="margin-left: 15px; height: 15px; width: 150px; font-size: 15px;"> View Listed Jobs </div>
											
											<div id="light" class="white_content"><a href = "javascript:void(0)" style="color:blue;" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a>
												<table width="100%">
													<?$data = mysql_query("SELECT * from `jobs` where `user_id` = '$userid'") or die(mysql_query);
													while ($job_details = mysql_fetch_assoc($data)){
														$job_name = $job_details["job_name"]; if ($job_name) {?>
													<tr>
														<td>
															<?echo "$job_name"; ?>
														</td>
													</tr>
													<?}}?>
	
												</table>
											
											
											</div>
											<div id="fade" class="black_overlay"></div>
										</div>
									</div>
									<div class="row" style="margin-left: 0px";>
										<div class="span15" style="margin-top: 0px; min-height: 50px; border-left: 0px solid #eee;">
											<p style="margin-left:-8px;font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight:bold;"> When you wish to hire someone for these jobs, simply text "#keyword" to 07xx-xxx-xxx (Example:#mechanic) </br>
												You can always request a job by texting "menu" and then selecting from our standard list of jobs, </br>
												but creating job profiles on MyDuma.org allows you to specify your own hiring criteria.
											</p>
										</div>
									</div>
									
									<div class="row" style="margin-left: 0px; height: 20px; margin-top: 5px; ">
										<div class="span4" style="margin-left:-10px;margin-top: -5px; min-height: 30px; border-left: 0px solid #eee;">
											<input class="btn small orange" type="submit" style="width:175px;" name="previous" value="Previous Step"> </input>
										</div>
										<div class="span4 " style="font-size:15px;margin-top: -5px; margin-left: -50px; min-height: 30px; border-left: 0px solid #eee;">
											<input class="btn small orange" type="submit" style="width:150px;" name="next" value="Next Step"> </input>
										</div>
									</div>
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
