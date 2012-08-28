<?php
require 'FakeMailDetector.php';

//We declare two emails addresses for the test
$badUserEmail = 'toto@yopmail.com';
$goodUserEmail = 'toto@gmail.com';

//We create a new instance of the class
$mail = new FakeMailDetector();

//We test the first email address which is a bad email address
if ($mail->inBannedList($badUserEmail)) {
	echo $badUserEmail . ' is a fake email address <br />';
} else {
	echo $badUserEmail . ' is a good email address <br />';
}

//We test the second email address which is a good email address
if ($mail->inBannedList($goodUserEmail)) {
	echo $goodUserEmail . ' is a fake email address <br />';
} else {
	echo $goodUserEmail . ' is a good email address <br />';
}