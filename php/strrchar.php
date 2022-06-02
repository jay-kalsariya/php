<?php
echo strrchr("Hello world!","world");
echo strrev("hello world");
$string = "Hello world. Beautiful day today.";
$token = strtok($string, " ");

while ($token !== false)
{
echo "$token<br>";
$token = strtok(" ");
}
$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"Hed!");
echo ucfirst("hello world!");
$str = "An example of a long word is: Supercalifragulistic";
echo wordwrap($str,15,"<br>\n");
echo "0: " .(boolval(0) ? 'true' : 'false') . "<br>";
echo "4: " .(boolval(42) ? 'true' : 'false') . "<br>";
echo '"": ' .(boolval("") ? 'true' : 'false') . "<br>";
echo '"Hello": ' .(boolval("Hello") ? 'true' : 'false') . "<br>";
echo '"0": ' .(boolval("0") ? 'true' : 'false') . "<br>";
echo "[3, 5]: " .(boolval([3, 5]) ? 'true' : 'false') . "<br>";
echo "[]: " .(boolval([]) ? 'true' : 'false') . "<br>";
$a = "Hello world!";
echo debug_zval_dump($a) . "<br>";
$a = "1234.56789";
echo doubleval($a) . "<br>";

$b = "1234.56789Hello";
echo doubleval($b) . "<br>";

$c = "Hello1234.56789";
echo doubleval($c) . "<br>";
$a = 0;

// True because $a is empty
if (empty($a)) {
  echo "Variable 'a' is empty.<br>";
}

// True because $a is set
if (isset($a)) {
  echo "Variable 'a' is set.";
}
/*$a = array("red", "green", "blue");

$arr = get_defined_vars();

print_r($arr["a"]);*/

/*$file = fopen("test.txt","r");
echo get_resource_type($file);*/
$a = 3;
echo gettype($a) . "<br>";

$b = 3.2;
echo gettype($b) . "<br>";

$c = "Hello";
echo gettype($c) . "<br>";

$d = array();
echo gettype($d) . "<br>";

$e = array("red", "green", "blue");
echo gettype($e) . "<br>";

$f = NULL;
echo gettype($f) . "<br>";

$g = false;
echo gettype($g) . "<br>";
$a = 32;
echo intval($a) . "<br>";

$b = 3.2;
echo intval($b) . "<br>";

$c = "32.5";
echo intval($c) . "<br>";

$d = array();
echo intval($d) . "<br>";

$e = array("red", "green", "blue");
echo intval($e) . "<br>";
$a = 1;
echo "a is " . is_bool($a) . "<br>";

$b = 0;
echo "b is " . is_bool($b) . "<br>";

$c = true;
echo "c is " . is_bool($c) . "<br>";

$d = false;
echo "d is " . is_bool($d) . "<br>";
