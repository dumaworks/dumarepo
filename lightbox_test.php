<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<title>LIGHTBOX EXAMPLE</title>
		 <link href="css/lightbox.css" rel="stylesheet">
	</head>
	<body>
		<p>Kuto this is it <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">here</a></p>
		<div id="light" class="white_content">This is the lightbox content. <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a></div>
		<div id="fade" class="black_overlay"></div>
	</body>
</html>