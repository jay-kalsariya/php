<?php 

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(10, 10 );
function SetHeight(int $minheight =50){
    echo "The hight is: $minheight<br>";
}
SetHeight(350);
SetHeight(); 
SetHeight(135);
SetHeight(80);
echo"<br>";
function sum(int $x,int $y) {
    $z =$x +$y;
    return $z;
}
    echo "20 + 25 = " . sum(20,25) . "<br>";
    echo "10 + 75 = " . sum(10,75) . "<br>";
    echo "20 + 25 = " . sum(20,25);
echo"<br>";
function add_five(&$value) {
    $value +=10;
}
$num =5;
add_five($num);
echo $num;
echo"<br>";

class test{
   public  $name;
    function set_name($name){
        $this->name =$name;
    }
    function get_name() {
        return $this->name;
    }
}
$apple = new test();
$banana = new  test();
$apple->set_name('Apple');
$banana->set_name('Banana');
echo $apple ->name;
echo"<br>";
echo $banana ->name;

echo"<br>";
function famailyName($fname){
    echo "$fname Refsnes.<br>";
}
famailyName("piku");
famailyName("Rakesh");
famailyName("vijay");
famailyName("kalu");
famailyName("rajesh");


?>