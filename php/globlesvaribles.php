<html>
<body>
    <form method ="post" action=""<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
  <input type="submit">
</form>
<?php
$x=50;
$y=80;
 function addition(){
     $GLOBALS['z']=$GLOBALS['x'] + $GLOBALS['y'];
 }
 addition(0);
 echo $z;
 echo "<br>";
 echo "Request method";
 echo "<br>";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}

?>

 </body>
 </html>