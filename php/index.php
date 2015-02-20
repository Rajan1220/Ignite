<?php
	echo '*******************************************';
	echo "\nUse of php Functions and Classes:";
	echo "\n*******************************************";
	echo "\n";
	echo "\n********************************************";
	echo "\nPerforming Operations using Functions:";
	echo "\n*******************************************";
	echo "\n";
	function sum()
	{
		$x=10;
		$y=10;
		$sum=$x+$y;
		echo "\nSum of x and y is:".$sum;
	}
	function sub()
	{
		$x=5;
		$y=6;
		$sub=$x-$y;
		echo "\nSubtraction of x and y is:".$sub;
	}
	function mul()
	{
		$x=7;
		$y=27;
		$mul=$x*$y;
		echo "\nMultiplication of x and y is:".$mul;
	}
	function div()
	{
		$x=65;
		$y=21;
		$div=$x/$y;
		echo "\nDivision of x and y is:".$div;
	}
	sum();
	sub();
	mul();
	div();
echo "\n";
echo "\n*****************************************************";
echo "\nNow Performing Operations using Classes:";
echo "\n*****************************************************";
claSS arithop
	{	
		public function add()
		{
			$a=4;
			$b=101;
			$add= $a+ $b;
			echo "\nAddition of $a and $b:".$add;
		}
		public function minus()
		{
			$a=4;
			$b=101;
			$minus=$a-$b;
			echo "\nSubtraction of $a and $b is:".$minus;
		}
		public function product()
		{
			$a=4;
			$b=101;	
			$product=$a*$b;
			echo "\nProduct of $a and $b is:".$product;	
		}
		public function division()
		{
			$a=4;
			$b=101;
			$divison=$a/$b;
			echo "\nDivision of $a and $b is:".$divison;
		}	
	}
$obj=new arithop();
echo "\n";
$obj-> add();	
$obj-> minus();
$obj-> product();
$obj-> division();
?>

