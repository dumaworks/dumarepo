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
<title>CSS3 Contact Form</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
<br>
</br>
<br>
</br>
<div id="contact" style="margin-left:54px">
	<form action="email.php" method="post">
		<fieldset>
			<label for="name">Name:</label>
			<input type="text" id="name" placeholder="Enter your full name" />

			<label for="email">Email:</label>
			<input type="email" id="email" placeholder="Enter your email address" />

			<label for="message">Message:</label>
			<textarea id="message" placeholder="What's on your mind?"></textarea>

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
