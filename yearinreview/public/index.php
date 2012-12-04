<?php
$view = array(
	'title' => 'GTA PHP 2012 Year in Review &amp; Looking Ahead to 2013',
	'slides' => array(),
);

$slides = array(
	'What happened in 2012?',
	'10 Meetups<br>35 attendees average',
	'Membership grew from 221 to over 540<br><img width="800" height="488" src="images/size.png">',
	'40 new members in November<br><img width="800" height="487" src="images/growth.png">',
	'JUNE<br><br>I joined the organizing committee',
	'SEPTEMBER<br><br>Celebrated our 2 Year Anniversary',
	'OCTOBER<br><br>Moved to Instaclick',
	'NOVEMBER<br><br>True North PHP Conference',
	'What\'s up for 2013?',
	'2 x 30 Presentation Format',
	'Hackathons',
	'Weekend Workshops',
	'Training Courses',
	'GTAPHP North',
	'True North PHP #2',
	'PRIZES<br><br>#1 - Jetbrains License (Any product)<br>#2 - Virtual Conference Ticket',
	'<a href="winnergenerator">Winner Generator</a>',
);

$x = 0;
foreach($slides as &$slide) {
	$view['slides'][] = (object) array('id' => $x / 1000, 'x' => $x, 'y' => 0, 'content' => $slide);
	$x += 1000;
}

include '../views/index.php';
