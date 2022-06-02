<?php
echo "<br>";
$str = ",2&5L;&\@=V]R;&0A `";
echo convert_uudecode($str);
echo "<br>";

echo  "substr"; 
echo substr("Hello world",6);
echo  "strtr";
echo "<br>";

echo strtr("Hilla Warld","ia","eo");
echo "<br>";
echo "strtok";

$string = "Hello world. Beautiful day today.";
$token = strtok($string, " ");

while ($token !== false)
  {
  echo "$token<br>";
  $token = strtok(" ");
  }
  echo "<br>";
  echo "strtag";
  echo "<br>";
  echo  strip_tags("hello <b> world!<b>");
  echo "strpos";
  echo "<br>";
  echo "strtag";
  echo "<br>";
  echo strpos("i love php,i love php tool!","php");
  echo "<br>";

?>
