<!DOCTYPE html>
<html>
<head>
    <?include "contact2_header.php"?>
    <div class="container">
		<div class="content">
			<div class="row" style="margin-left: 0px";>
				<div class="span16">
					<div class="row " style="margin-left: auto; margin-right: auto; margin-bottom: 0px">
						<div class="span15" style="margin-top:0px;margin-bottom: 0px; margin-left: auto; margin-right: auto; ">
						<h4 class="glow" style="font-family: 'Lucida Grande', sans-serif; text-align: center; width: 100%; font-size: 20px; font-weight: lighter; color:#444444; "> &nbsp; </h4>
						</div>
<meta charset="utf-8" />

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
<br>
</br>
<br>
</br>


<? if (isset($_GET["B$@4it"])){?>
		<div class="row" style="width:100%;">
			<a class="close" data-dismiss="alert" href="#">&times;</a>
				<?php $errno = $_GET["B$@4it"];
				if ($errno == 1) { echo "Please fill in all the fields.";} 
				else if ($errno == 2) { echo "Error. Your message has not been sent. Please try again.";} 
				
				?></p></td></tr></table>
			</div>
		</div>
        <?}?>
<div id="contact" style="margin-left:54px; <? if (isset($_GET["B$@4it"])){ echo "margin:3px auto;"; }?>">
	<form action="email.php" method="post">
		<fieldset>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" placeholder="Enter your full name" />

			<label for="email">Email:</label>
			<input type="email" id="email" name = "email" placeholder="Enter your email address" />

			<label for="message">Message:</label>
			<textarea id="message" name = "message" placeholder="What's on your mind?"></textarea>

			<input type="submit" value="Send message" />

		</fieldset>
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
