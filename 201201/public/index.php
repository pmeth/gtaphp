<?php
$view = array(
	'title' => 'GTA PHP 2012 Year in Review &amp; Looking Ahead to 2013',
	'slides' => array(),
);

$slides = array(
	'Welcome to GTAPHP 2013',
	'Thanks to Instaclick for this Space',
	'<h2>UPCOMING</h2>Jan 21 - Apr 22<br><br>Learn PHP - Virtual Self Study Group',
	'<h2>UPCOMING</h2>Feb 5<br><br>Hackathon',

	'PRIZES<br><br>#1 - Jetbrains License (Any product)<br>#2 - Modern Javascript by Larry Ullman',
	'<a href="winnergenerator">Winner Generator</a>',
);

$x = 0;
foreach($slides as &$slide) {
	$view['slides'][] = (object) array('id' => $x / 1000, 'x' => $x, 'y' => 0, 'content' => $slide);
	$x += 1000;
}

include '../views/index.php';
