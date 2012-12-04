<?php
$view = array(
	'title' => 'GTA PHP 2012 Year in Review &amp; Looking Ahead to 2013',
	'slides' => array(),
);

$slides = array(
	'What happened in 2012?',
	'10 Meetups<br>35 attendees average',
	'Membership grew from 221 to over 530<br><img width="800" height="600" src="images/size.png"',
	'<h2>PRIZES</h2>
	<ul>
		<li>#1 - Jetbrains License (Any product)</li>
		<li>#2 - Virtual Conference Ticket</li>
	</ul>',
	'<a href="winnergenerator">Winner Generator</a>',
);

$x = 0;
foreach($slides as &$slide) {
	$view['slides'][] = (object) array('id' => $x / 1000, 'x' => $x, 'y' => 0, 'content' => $slide);
	$x += 1000;
}

include '../views/index.php';
