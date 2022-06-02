<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
// print_r($cars);
echo "<br>";
echo "Associtive  Array";
echo"<br>";
$age =array ("peter" =>"35","tushar"=>"33","manoj" =>"35");
echo "tushar is".$age['tushar']."year old.";
echo"<br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
}
  echo "<br>";
  echo "multidimensional Array";
  $emp=[
  [1,"krishana","manager",50000],
  [2,"salman","salesman",20000],
  [3,"mohan","driver",50000],

  ];
  print_r($emp);
    
  
?>