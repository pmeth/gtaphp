<!DOCTYPE html>
<html>
	<head>
		<meta>
		<title>Winner generator</title>
	</head>
	<body style="font-family: arial, helvetica, sans;">
		<div style="width: 300px; float: left; height: 600px;">
			<textarea id="names" style="border: 1px solid black; width: 280px; font-size: 15pt; height: 580px;"></textarea>
		</div>
		<div style="width: 300px; float: left; height: 600px;">
			<input id="pick" type="button" value="Pick a winner"><br>
			<div id="winner" style="font-size: 25pt; font-weight: bold; color: green; border: 1px solid gray; padding: 10px; margin-top: 10px;"></div>
		</div>
		<!-- scripts -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
		<script>
			$(document).ready(function() {
				$('#pick').click(function() {
					var matches = $('#names').val().match(/^.+$/gm);
					var random = Math.floor(Math.random() * matches.length);
					$('#winner').html(matches[random]);
				});
			});
		</script>
	</body>
</html>
