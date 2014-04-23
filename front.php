<?php
include 'Log.php';
session_start();
?>
<html><body>
<?php
$now=strftime('%c');
if(!isset($_SESSION['logger'])){
	$logger=new Log('./persintent_log');
	$_SESSION['logger']=$logger;
	$logger->write('created' . $now);
	echo ('<p>sessin and log object has been created</p>');
	$logger->write('first' . $now);
	echo '<p>Log contents</p>';
	echo nl2br($logger->read());
}
?>
<a href='next.php'>next</a></body></html>
