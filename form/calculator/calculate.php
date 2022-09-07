<?php
$num1=$_POST['number1'];
$num2=$_POST['number2'];

if(isset($_POST['plus'])){
$res=$num1+$num2;
echo("Addition of $num1 and $num2 is $res");
}
if(isset($_POST['minus'])){

    $res=$num1-$num2;
    echo("Subtraction of $num1 and $num2 is $res");
    
}
if(isset($_POST['multiply'])){

    $res=$num1*$num2;
    echo("Multiplication of $num1 and $num2 is $res");
    
}
if(isset($_POST['divide'])){

    $res=$num1/$num2;
    echo("Division of $num1 and $num2 is $res");
    
}
?>