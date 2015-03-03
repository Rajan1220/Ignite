<?php
 include("lib.php");
$ob = new Intro();
$ob->userdata("ABC");
echo 'The user is:'." ".$ob->show();
$ob->show();
echo "\nContect number is:".$ob->$Contect_No;
echo "\nAddress of User is:".$ob->$address;
echo "\n";
?>
