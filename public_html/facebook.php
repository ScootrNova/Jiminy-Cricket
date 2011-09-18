<?php


	include 'chat.php';


?>


<!DOCTYPE html>
<html lang="en">

	<head>
		<link href="basic.css" rel="stylesheet" type="text/css" />
		<link href="paint.css" rel="stylesheet" type="text/css" />
		<meta charset="UTF-8" />
		<script src="wepaint.js" type="text/javascript"></script>
		<title>Facebook @ We Paint.us</title>
	</head>

	<body>
		<div id="header">
			<img src="images/wepaint.png" alt="WePaint.us" />
			<img src="images/nav/divider.png" />
			<img src="images/nav/spacer.png" />
			<a href="index.php"><img src="images/nav/canvas.png" alt="Canvas" class="noBorder" id="canvas" onmouseout="imgMouseOff('canvas')" onmouseover="imgMouseOn('canvas')" /></a>
		</div>
		<div id="content">
			<div id="contentLeft">
				<div class="bottomBorder" id="currentWord">
					currentWord
				</div>
				<div class="bottomBorder" id="paintArea">
					paintArea
				</div>
				<div id="toolBox">
					toolBox
				</div>
			</div>
			<div id="contentRight">
				<div class="bottomBorder" id="topicAndTime">
					topicAndTime
				</div>
				<div class="bottomBorder" id="whoIsPlaying">
					whoIsPlaying
				</div>
				<div class="bottomBorder" id="linkToInvite">
					linkToInvite
				</div>
				<div id="chatArea">
					chatArea
				</div>
			</div>
		</div>
	</body>

</html>

<!--
	Team Jiminy Cricket
-->