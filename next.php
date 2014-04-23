<?php
include 'Log.php';
session_start();
?>
<html><body>
<?php
$now=strftime('%c');
$logger=$_SESSION['logger'];
$logger->write('2page hour' . $now);
echo '<p>Log Contents</p>';
echo nl2br($logger->read());
?>
</body></html>
