<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Home</title>
	<link rel="stylesheet" href="assets/css/global.css" type="text/css">
	<link rel="shortcut icon" type="image/x-icon" href="assets/favicons/favicon-32x32.png">
	<script src="assets/js/min/responsive-nav-min.js"></script>
	<meta name="viewport" content="width=device-width,height=device-height,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<?php include"favicons.php" ?>
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div class="section">
		<div class="_1"></div>
		<div class="_1"></div>
		<div class="_1"></div>
		<div class="_1"></div>
		<div class="_1"></div>
		<div class="_1"></div>
		<div class="_1"></div>
		<div class="_1"></div>
		<div class="_1"></div>
		<div class="_1"></div>
		<div class="_1"></div>
		<div class="_1"></div>
	</div>
	<div class="section">
		<div class="_2"></div>
		<div class="_2"></div>
		<div class="_2"></div>
		<div class="_2"></div>
		<div class="_2"></div>
		<div class="_2"></div>
	</div>
	<div class="section">
		<div class="_3"></div>
		<div class="_3"></div>
		<div class="_3"></div>
		<div class="_3"></div>
	</div>
	<div class="section">
		<div class="_4"></div>
		<div class="_4"></div>
		<div class="_4"></div>
	</div>
	<div class="section">
		<div class="_5"></div>
		<div class="_5"></div>
		<div class="_2"></div>
	</div>
	<div class="section">
		<div class="_6"></div>
		<div class="_6"></div>
	</div>
	<div class="section">
		<div class="_7"></div>
		<div class="_5"></div>
	</div>
	<div class="section">
		<div class="_8"></div>
		<div class="_4"></div>
	</div>
	<div class="section">
		<div class="_9"></div>
		<div class="_3"></div>
	</div>
	<div class="section">
		<div class="_10"></div>
		<div class="_2"></div>
	</div>
	<div class="section">
		<div class="_11"></div>
		<div class="_1"></div>
	</div>
	<div class="section">
		<div class="_12"></div>
	</div>
	<div class="size">
		w<div id="width"></div> <br>
		h<div id="height"></div>
	</div>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script>
	$(document).ready(function(e) {
		showViewportSize();    
	});
	$(window).resize(function(e) {
		showViewportSize();
	});
	function showViewportSize() {
		var the_width = $(window).width();
		var the_height = $(window).height();                   
		$('#width').text(the_width);
		$('#height').text(the_height);
	}
	</script>
</body>
</html>
