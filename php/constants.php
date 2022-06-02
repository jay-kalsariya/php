<?php
define("GREETRING","WELCOME TO JAY");
echo  GREETRING;
echo "<br>";
define("GREETING", "Welcome to jay", true);
echo greeting;
echo "<br>";

define ("cars",[
    "BMW","i20","oddi"
]);
echo cars[0];
define("GREETING", "Welcome to hello how are you!");

echo "<br>";
function myTest() {
  echo GREETING;
}
 
myTest();
echo "<br>";
?>