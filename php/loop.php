<?php
echo "progrma for loop statemets:";
echo "\*****************************";
echo"\n";
echo"\nworking of FOR loop";
$n=15;
$z=5;
$fact=1;
for($i=1;$i<=$n;$i++)
{
$fact = $fact * $i;
}
echo "\nFactorial of $n is:".$fact;	
echo "\n";
echo "\n";
echo "\nWOrking of while loop";
echo "\n";
echo "\n";
$j=1;
$fact1=1;
while($z>=$j)
{
$fact1=$fact * $j;
$j++;
}
echo "\nFactorial of $z is:".$fact1;
echo "\n*****************************";
echo "\n";
echo "\n";
echo "\nworking of foreach statement:";
$car=array("BMW","TATA","AUDI","SUZUKI");
echo "\nThe Available Cars are:";
foreach($car as $c)
{
echo "\n$c";
}
?>
