<?php
$myfile = fopen("chat.txt", "a") or die("Unable to open file!");
$txt = $_GET['uname'].': '.$_GET['comment']."\n";
fwrite($myfile, $txt);
fclose($myfile);
?>