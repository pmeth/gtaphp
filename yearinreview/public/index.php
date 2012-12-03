<?php
$view = array(
	'title' => 'GTA PHP 2012 Year in Review &amp; Looking Ahead to 2013',
	'slides' => array(),
);

$slides = array(
	'What happened in 2012?',
	'10 Meetups',
	'35 attendees average',
	'Membership grew from 221 to over 530',
);

$x = 0;
foreach($slides as &$slide) {
	$view['slides'][] = (object) array('x' => $x, 'y' => 0, 'content' => $slide);
	$x += 1000;
}

include '../views/index.php';
