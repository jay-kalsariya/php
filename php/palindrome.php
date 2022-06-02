<?php
if (isset($_POST['submit'])){
$n=$_POST['str'];


   
    $rev=strrev($n);
    if ($n == $rev){
        echo "$n is pilidrome";
    }
    else{
        echo "$n is  not pilidrome";
    }
}
?>
<form method ="post">
    <input type ="text" name = "str" require/>
    <input type ="submit" name = "submit">
</form>


