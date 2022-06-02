<?php
$p= date("H");
if ($p<"20"){
    echo "have a good day";
    echo "<br>";
    echo "if else statement";
    echo "<br>";
    $q= date("H");
    if ($q <"20"){
        echo "have a good day";
    }else{
        echo "have a good night";
    }
    echo "<br>";
    echo "if else if statement";
    echo "<br>";
    $t =date("H");
    if ($t <"20"){
        echo "Have a good  morning!";
    } else if($t <"20"){
        echo "have a good day";

    }
    else{
        echo "have a good day";
    }
}
    

?>
