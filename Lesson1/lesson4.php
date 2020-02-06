<?php
//Conditional statements
/*Conditional statements are used to  perform different actions based on different conditions
to allow you to code to perform different actions based on diff variables.
PHP has the following if conditional statements:
1. if statement - executes some code if one condition is true
2. if...else statement  - executes some code if a condition is true and another code if that
condition is false
3. if..elseif..else statement - executes different codes for more than two conditions
4. switch statement - selects one of may blocks of code to be executed.

a. if(condition to examine){
    code to be executed if condition is TRUE
}
 */
$db_first_name = "John Doe";
$user_first_name ="John Doe";
if ($user_first_name == $db_first_name){
    echo "<p>Credentials matched . You can login...</p>";
}

$age = 15;
if ($age < 18){
    echo "<h2>You can't take alcohol. Go home and study hard.";
}

//b. if...else: executes code if the condition is true, and the other condition is false.

$age = 10;
if ($age < 18){
    echo "<h2>You can't take alcohol. Go home and study hard.";
}else{
    echo "<h1>Hurray, you are old enough, grab a crate</h1>";
}

$age = 20;
if ($age < 18){
    echo "<h2>You can't take alcohol. Go home and study hard.";
}else{
    echo "<h1>Hurray, you are old enough, grab a crate</h1>";
}

//3. if..elseif..else statement - executes different codes for more than two conditions
/*if(condition to examine){
    code to be executed if condition is TRUE
    elseif(condition){
        code to be executed if the first condition is FALSE, and this condition is true
    elseif(condition){
    code to be executed if the second condition is FALSE, and this condition is true
  else{code to be executed if the all conditions are false}

    }
    }
}
*/

$age = 19;
$kenyan = false;
if ($age < 18){
    echo "<h3>You can't take alcohol. GO home and study hard.</h3>";
}elseif($kenyan == true){
    echo "<h2>Hurray, you are old enough, grab a crate</h2>";
}else{
    echo "<h4>You are under age and not kenyan, you ae kidding</h4>";
}
echo "<br>";

//Assignment
/*
 1.Using a conditional statement, check if 100 is a multiple of 2.
  if true, echo "100 is a multiple of 2" else echo "100 is not a multiple 2"

 2.Write code that calculates the volume of a cylinder of height 14 and diameter14.
  echo "This is the cylinder to use if the volume is grater than 10"
*/

$a=100;
$b=2;
$div=$a/$b;
echo $div. "<br>";
var_dump($div);
echo "<br>";
if (var_dump($div)!="float"){
    echo "100 is a multiple of 2";
}else{
    echo "100 is not a multiple of 2";
}
echo "<br><br>";

$a=100;
$b=2;
$mod=$a%$b;
echo $mod. "<br>";
if ($mod==0){
    echo "100 is a multiple of 2";
}else{
    echo "100 is not a multiple of 2";
}
echo "<br><br>";




//no. 2
$height=14;
$diameter=14;
$radius=$diameter/2;
$volume=(22/7) *$height*$radius*$radius;
echo $volume. "<br>";
if ( $volume >10){
    echo "THis is the cylinder to use if the volume is greater than 10";
}



















?>