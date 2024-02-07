 <?php

$num1=$_POST['num1'];
$num2=$_POST['num2'];
$soma=$num1+$num2;

include 'num1.php';
include 'num2.php';
  
echo "valor 1: $num1 <br>";
echo "valor 2: $num2 <br>";

print "a soma dos intervalos é: $num1+$num2=$soma";
