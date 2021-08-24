<?php
$var1=(string)$_GET['fach'];
exec("python3 testsend.py $var1", $output); #var1=Fach
#print($var1);
header('Location: http://192.168.2.150');
?>