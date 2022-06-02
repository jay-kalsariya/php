<?php
$x=5566;
$y=10.65;
$z="hello word!";
$z=null;
var_dump($z);
echo"<br>";
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo"<br>";
var_dump($x);
 echo"<br>";
var_dump($y);
echo"<br>";
echo "impload";
$arr =array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);
echo "hebrev";
echo"<br>";
echo hebrev("á çùåï äúùñâ");
echo"<br>";
echo "globle";
$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
} 

myTest();   run function
echo $y; output the new value for variable $y
echo"<br>";
echo "float";
echo"<br>";
$x = 1.9e411;
var_dump($x);
echo"<br>";
echo "expload";
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));
echo"<br>";
echo "echo print";
echo"<br>";
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

?>
