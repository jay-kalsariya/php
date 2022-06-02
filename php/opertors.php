
<?php
echo "Arithmetic  Operators";
echo "<br>";
$x=20;
$y=50;
echo $x+$y;
echo "<br>";
$a=30;
$b=50;
echo $a-$b;
echo "<br>";
$x=7;
$y=5;
echo $x * $y;
echo"<br>";
$x=20;
$y=50;
echo $x /$y;
echo"<br>";
$x=80;
$y=30;
echo $x%$y;
echo"<br>";
$x=100;
$y=3;
echo $x ** $y;
echo"<br>";
echo "Assignment Operators";
echo"<br>";
$x = 30;
echo $x;
echo"<br>";
$x = 50;  
$x += 100;
echo $x;
echo"<br>";
$x = 70;  
$x -= 100;
echo $x;
echo"<br>";
$x = 90;  
$x *= 50;
echo $x;
echo"<br>";
$x = 70;  
$x /= 100;
echo $x;
echo"<br>";
$x = 100;  
$x %=300;
echo $x;
echo"<br>";
echo "Comparison Operators";
echo"<br>";
$x = 100;  
$y = "100";
var_dump($x == $y); 
echo"<br>";
$x = 300;  
$y = "100";
var_dump($x === $y); 
echo"<br>";
$x = 200;  
$y = "100";
var_dump($x != $y); 
echo"<br>";
$x = 150;  
$y = "20";
var_dump($x <> $y); 
echo"<br>";
$x = 500;  
$y = "200";
var_dump($x !== $y); 
echo"<br>";
$x = 100;
$y = 50;
var_dump($x > $y);
echo"<br>";
$x = 50;
$y = 90;
var_dump($x < $y);
echo"<br>";
$x = 50;
$y = 40;
var_dump($x <=$y);
echo"<br>";
$x = 100;
$y = 80;
var_dump($x >=$y);
echo"<br>";
$x = 5;  
$y = 10;
echo ($x <=> $y); 
echo"<br>";
$x = 10;  
$y = 10;
echo ($x <=> $y);
echo"<br>"; 
$x = 15;  
$y = 10;
echo ($x <=> $y);
echo"<br>";
echo  "Comparison Operators"; 
echo"<br>";
$x = 10;  
echo ++$x;
echo"<br>";
$x = 30;  
echo $x++;
echo"<br>";
$x = 20;  
echo --$x;
echo"<br>";
$x = 20;  
echo $x++;
echo"<br>";
echo  "Logical Operators"; 
echo"<br>";
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
echo"<br>";
$x = 100;  
$y = 80;

if ($x == 100 or $y == 80) {
    echo "Hello world!";
}
echo"<br>";
$x=100;
$y=50;
if ($x==100 xor $y ==80){
    echo "Hello world!";
    }
    echo"<br>";
    $x=50;
    $y=100;
    if ($x==50 && $y==100){
        echo "Hello Good morning";
    }
    echo"<br>";
    $x=200;
    $y=150;
    if ($x==200 || $y==100){
        echo "Hello Good morning";
    }
    echo"<br>";
    $x=100;
    if ($x !==350) {
        echo "hello world!";
    }
    echo "<br>";
    echo "string operators";
    echo "<br>";
    $txt1 ="hello";
    $txt2 ="world!";
    echo $txt1 . $txt2;
    echo "<br>";
    $txt1 ="hello";
    $txt2 ="world!";
    echo $txt1 .= $txt2;
    echo $txt1;
    echo "<br>";
    echo "Array operators";
    echo "<br>";
    $x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y); // union of $x and $y

echo "<br>";
$x =array ("a" =>"red","b" => "green");
$y =array ("c" =>"blue","d" => "pink");
var_dump($x == $y);
echo "<br>";
$x =array ("a" =>"red","b" => "green");
$y =array ("c" =>"yellow","d" => "pink");
var_dump($x === $y);
echo "<br>";
$x =array ("a" =>"red","b" => "green");
$y =array ("c" =>"yellow","d" => "pink");
var_dump($x != $y);
echo "<br>";
$x =array ("a" =>"red","b" => "green");
$y =array ("c" =>"yellow","d" => "pink");
var_dump($x <> $y);
echo "<br>";
$x =array ("a" =>"red","b" => "green");
$y =array ("c" =>"yellow","d" => "pink");
var_dump($x !== $y);
echo "<br>";
echo "Ternary operators";
echo "<br>";
echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "John Doe";
    //if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo "<br>";
   echo $user = $_GET["user"] ?? "anonymous";
   echo("<br>");
  
   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";
?>
