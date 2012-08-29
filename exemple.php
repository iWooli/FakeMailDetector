<?php
require 'FakeMailDetector.class.php';

//We declare an email address for the test
$userEmail = 'toto@yopmail.com';

//We create a new instance of the class
$mail = new FakeMailDetector($userEmail);

//We test the email address
if ($mail->inBannedList()) {
	echo $userEmail . ' is a disposable email address <br />';
} else {
	echo $userEmail . ' seems to be a valid email address <br />';
}
