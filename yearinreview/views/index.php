<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=1024" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<title><?php echo $view['title']; ?></title>

		<meta name="author" content="Peter Meth" />

		<link href="css/fonts.css" rel="stylesheet" />
		<link href="css/impress-demo.css" rel="stylesheet" />

		<link rel="shortcut icon" href="favicon.png" />
		<link rel="apple-touch-icon" href="apple-touch-icon.png" />
	</head>
	<body class="impress-not-supported">
		<div class="fallback-message">
			<p>Your browser <b>doesn't support the features required</b> by impress.js, so you are presented with a simplified version of this presentation.</p>
			<p>For the best experience please use the latest <b>Chrome</b>, <b>Safari</b> or <b>Firefox</b> browser.</p>
		</div>
		<div id="impress">
			<?php	foreach ($view['slides'] as $slide): ?>
			<div class="step" data-x="<?php echo $slide->x; ?>" data-y="<?php echo $slide->y; ?>">
				<?php echo $slide->content; ?>
			</div>
			<?php endforeach; ?>
			<!--<div id="bored" class="step slide" data-x="-1000" data-y="-1500">-->
			<!--  <q>Aren't you just <b>bored</b> with all those slides-based presentations?</q>-->
			<!--</div>-->
			<!--<div class="step slide" data-x="0" data-y="-1500">-->
			<!--  <iframe style="width: 100%; height: 100%; border: 1px solid black" src="http://www.easttorontoweb.com/gtaphp_growth.php"></iframe>-->
			<!--</div>-->

			<!--<div class="step slide" data-x="1000" data-y="-1500">-->
			<!--  <q>Would you like to <strong>impress your audience</strong> with <strong>stunning visualization</strong> of your talk?</q>-->
			<!--</div>-->
		</div>
		<script>
			if ("ontouchstart" in document.documentElement) {
				document.querySelector(".hint").innerHTML = "<p>Tap on the left or right to navigate</p>";
			}
		</script>
		<script src="js/impress.js"></script>
		<script>impress().init();</script>
	</body>
</html>
