<?php
$x=20;
$y=10;
$z=15;
echo'****************************';
echo "\nWorking of IF condition";
echo "\n****************************";
if($x<$y)
{
echo "\nValue y:$y is larger.";
}
else
{
echo "\nValue x:$x is larger.";
}
echo "\n****************************";
echo "\nWorking of elseif";
echo "\n****************************";
if($x>$y)
{
echo "\nValue $x is greater then $y.";
}
elseif($x>$z)
{
echo "\nValue $x is also greater than $z.";
}				
else
{
echo "\nValue $x is smaller then $y and $z.";
}	
echo "\n*******************************************";
echo "\nWorking of switch statement";
echo "\n*******************************************";
$car="BMW";
switch($car)
{
case "BMW":
	echo "\nYou are interested in BMW.";
break;
case "toyta" :
	echo "\nYou are interested in toyta.";
break;
case "Hundai":
	echo "\nYou are interested in Hundai.";
break;
default:
	echo "\nNot interested in luxuries cars !";
}	
echo"\n********************************************";
echo "\nEnd of condition satatements.";
echo "\n*******************************************";
?>
