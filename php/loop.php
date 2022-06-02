<?php
$x=1;
while ($x<= 10){
    echo "The number is :$x <br>";
    $x++;
}
echo "<br>";
$x=0;
while ($x <= 100) {
    echo "The number is: $x <br>";
    $x+=10;
}
echo "<br>";
echo "Do while loop";
echo "<br>";
$x=1;
do{
echo "The number is: $x<br>";
$x++;
}
while($x <=4);
echo "<br>";
$x=6;
do{
echo "The number is: $x<br>";
$x++;
}
while($x <=5);
echo "<br>";
echo "for Loop";
echo "<br>";
for ($x=0; $x<=5; $x++){
    echo "The number is: $x <br>";
}
echo"<br>";
for ($x=0; $x<=100; $x+=10){
    echo "The number is: $x <br>";
}
echo "<br>";
echo "foreach loop";
echo"<br>";
$color = array("red","green","blue","yellow","pink");
foreach ($color as $value) {
    echo "$value <br>" ;
}

echo"<br>";
$age = array("tushar"=>"30","manoj"=>"32","kunal"=>"20");
foreach ($age as $x => $val) {
    echo "$x =$val <br>" ;
}

echo"<br>";
echo "continue statements";
echo"<br>";  
for ($x=0; $x<=10; $x++){
    if($x==3){
       // echo "Numbar.:".$x."<br>";
        continue;
        
    }
    echo "Number:".$x."<br>";
}
echo"<br>";
echo "break statements";
echo"<br>";  
for ($x=0; $x<=10; $x++){
    if($x==5){
       // echo "Numbar.:".$x."<br>";
        break;
      
    }
    echo "Number:".$x."<br>";
}
echo "<br>";
echo "Nested loop";
echo "<br>";
for($a =1; $a<=100;$a=$a+10){
   for($b=$a;$b<$a+10; $b++){
       echo $b."";
   }
   echo"<br>"; 

}

 


?>