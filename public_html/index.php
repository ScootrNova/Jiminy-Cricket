<!DOCTYPE html>
<html lang="en">

	<head>
		<link href="basic.css" rel="stylesheet" type="text/css" />
		<link href="paint.css" rel="stylesheet" type="text/css" />
		<meta charset="UTF-8" />
		<script src="canvas.js" type="text/javascript"></script>
		<script src="wepaint.js" type="text/javascript"></script>
		<title>Index @ We Paint.us</title>
	</head>

	<body onload="paintCanvasStart('paintCanvas')">
		<div id="header">
			<img src="images/wepaint.png" alt="WePaint.us" />
			<img src="images/nav/divider.png" />
			<img src="images/nav/spacer.png" />
			<a href="facebook.php"><img src="images/nav/facebook.png" alt="Facebook" class="noBorder" id="facebook" onmouseout="imgMouseOff('facebook')" onmouseover="imgMouseOn('facebook')" /></a>
		</div>
		<div id="content">
			<div id="contentLeft">
				<div class="bottomBorder" id="currentWord">
					currentWord
				</div>
				<div class="bottomBorder" id="paintArea">
					<canvas id="paintCanvas" height="440" width="700"></canvas>
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