<?php

// echo "============= String and It's Function ==============="."</br></br>";
 //$em ="Simple Present";
//$a ="Present Tense";
//echo $a."</br>";

//echo strlen($a)."</br>"; // String Length
//echo strrev($a)."</br>"; // String reverse

//  $k = "NITIN";
 //echo strrev($k)."</br>"; // Palindrome Example In terms of PHP
 //echo strtoupper($a)."</br>"; // All Character Upper Case 
 //echo strtolower($a)."</br>"; // All Character Lower Case

// echo strpos($a,"en")."</br>"; // Give the position of any character from given String



// $str = "TensorBase([1.0754e-03, 5.6430e-04, 2.5182e-03, 5.6953e-02, 9.2824e-01, 1.0651e-02])";
// $str = ltrim($str , 'TensorBase([');
//  $str = rtrim($str, '])');
// $str = explode(',' , $str);



// d in real life experince?
//  also take some information on it , I want answer from every student
 //sha1() // What is the main difference between md5() and sha1()// Tomorrow's Lecture String Function
 //explode() // With use String to array conversion
// implode() // With use Array to String Conversion
//md5() // Where it is use
 //what will be the o/p of sha1()?
// bin2hex() // Try one example on it
//hex2bin() // Try one example on it
 //trim()  // Try one example on it-
 //ltrim() // Try one example on it
//rtrim() // Try one example on it
//strstr() // Try one example on it
 //str_split() // Try one example on it



// echo "------ md5 Function ------"."</br>";
 //$pass = "Senza@2022";

//echo "Senza@2022 => ". md5($pass)."</br>"; // In live project used in form for password security

//echo "------ sha1 Function ------"."</br>";
 //echo sha1($pass)."</br>"; // In live project used in form for password security but at the moment not in use because //it's also decrypted


// echo "------ bin2hex Function ------"."</br>";
 //$binary = "Patel";
 //$hexa = bin2hex($binary); 

// echo $hexa."<br><br>"; // Convert binary to hexadecimal

//  echo "------ hex2bin Function ------"."</br>";

//  echo hex2bin($hexa)."</br>"; // Convert hexadecimal to binary

//$number = 2022;
 //$str = "establishment";
 //vprintf("senza solutions %s year is %u .",array($str, $number)); //vprintf() function outputs a formatted string.
// echo"<br><br>";

// $trim = "One Two Three One";
// echo "------ str_split Functions convert into array------"."<br><br>";
//  $kqq = str_split($trim);
//  echo"<pre>";
// print_r($kqq); 

// echo "----------String replace Function----------<br><br>";
//echo substr_replace("Senza PvtLmt","MNC",6) . "<br><br>"; // 0 will start replacing at the first character in the string

// echo "----------String replace Function----------<br><br>";
// echo str_replace("world","Peter","world Hello world!") . "<br><br>";


// echo "----------The Count Function----------<br><br>";
// echo "count is = " . substr_count("Hello world. The world is nice","world") . "<br><br>";

// echo "----------String Compare Function----------<br><br>";
// echo substr_compare("Hello world","world",2) . "<br>"; //If this function returns 0, the two strings are equal.

// echo "----------String translate Function----------<br><br>";
// echo strtr("Hilla Warld ","ia","eo"). "<br>" ; //The strtr() function translates certain characters in a string.

// echo "----------find last occurrence in the string----------<br><br>";
// echo strrpos("I love php, I love php too!","php") ."<br>"; //Find the position of the last occurrence of "php" inside the string

// echo "----------find last occurrence in the string----------<br><br>";
// echo strripos("I love php, I love php too!","PHP") . "<br><br>";


// finds the position of the last occurrence of a string and returns all characters from this position to the end of the string
// echo strrchr("Hello world! end ","world"); 

// echo "----------String Repeat Function----------<br><br>";
// echo  str_repeat("Senza",5) . "</br>";


// echo "----------Shuffle string Function----------<br><br>";
// echo str_shuffle("Hello World") . "<br><br>";


// echo "----------Query string Function----------<br><br>";
// parse_str("name=Peter&age=43");
// echo $name."<br><br>";
// echo $age;

// parse_str("name=Peter&age=43", $output);
// echo $output['name']."<br><br>";
// echo $output['age']."<br><br>"; 

// $filename = "word.php";
// $md5file = md5_file($filename); //The md5_file() function calculates the MD5 hash of a file
// echo $md5file;

// // echo "----------join string Function----impload------<br>";
// $arr = array('Hello','World!','Beautiful','Day!'); //The join() function returns a string from the elements of an array.
// echo join("-",$arr) ."<br><br>";

// echo "Convert the predefined characters (less than) and (greater than) to HTML entities<br>";
// $str = 'This is some <b>bold</b> text.';


//  echo $str ."<br><br>";
//  echo htmlspecialchars($str);
//  $str = "Mary Had A Little Lamb and She LOVED It So";
// $str = strtolower($str);
// echo $str; // Prints mary had a little lamb and she loved it so