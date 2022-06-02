<?php
if(isset($_POST['submit'])){
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    if(strlen($name) <=5)
    {
        echo "user name Sould be more then 5 charactr";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>from Handing</title>
</head>
<body>
    <from action ="post.php" method ="post"> 
        Name: <input type ="text" name ="name"><br>
        Email: <input type ="text" name="email"><br>
        <br>
        <input type ="submit">
</from>
</body>
</html>