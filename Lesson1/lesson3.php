<?php
//PHP operators
/*USe dto perform operations on variables and values
php has the following operators
1. Arithmetic operators
2. Assigment ops
3. Comparison ops
4. Logical ops*/

//Arithmetic operators
//+:addition
$x =23;
$y =234;
$sum =$x + $y;
echo $sum. "<br>";
echo "the sum of 23 and 234 is". $sum."<br>";
echo 23+234;
echo "<br> <br>";

//-:subtraction
$x =23;
$y =234;
$sub =$y - $x;
echo $sub. "<br>";
echo "the sub of 234 and 23 is". $sub."<br>";
echo 234-23;
echo "<br> <br>";
//*:multiplication
$x =23;
$y =234;
$mult =$y * $x;
echo $mult. "<br>";
echo "the mult of 234 and 23 is". $mult."<br>";
echo 234*23;
echo "<br> <br>";
// (/):Division (/)
$x =23;
$y =234;
$div =$y / $x;
echo $div. "<br>";
echo "the div of 234 and 23 is". $div."<br>";
echo 234/23;
echo "<br> <br>";
// %:Modulus
$x =3;
$y =2;
$mod =$x % $y;
echo $mod. "<br>";
echo "the mod of 3 and 2 is". $mod."<br>";
echo 3%2;
echo "<br> <br>";
// **:Exponential
echo 2**3;
echo "<br>";
echo "the exponential of 2 to power3 is 8";
echo "<br>";

//2. Assignment ops
//used to write a value to a variable
$car ="Benz";
$i =12;
$f =12.12;
//Assignment ops with other arithmetic ops
$s =30;
$sum = $i + $s;
$i =$i + $s;
echo $i;
echo "<br>";
$i += $s;
echo $i;
echo "<br><br>";

$a =100;
$b =200;
$a +=100;
echo $a;
echo "<br><br>";
//subtraction
$i =12;
$s =30;
$sub = $i - $s;
$i =$i - $s;
echo $i;
echo "<br>";
$i -= $s;
echo $i;
echo "<br><br>";
//division
$i =12;
$s =30;
$sub = $i / $s;
$i =$i / $s;
echo $i;
echo "<br>";
$i /= $s;
echo $i;
echo "<br><br>";
//multiplication
$i =12;
$s =30;
$sub = $i * $s;
$i =$i * $s;
echo $i;
echo "<br>";
$i *= $s;
echo $i;
echo "<br><br>";
//exponential
$i =12;
$s =30;
$sub = $i ** $s;
$i =$i ** $s;
echo $i;
echo "<br>";
$i **= $s;
echo $i;
echo "<br><br>";
//modulus
$i =12;
$s =30;
$sub = $i % $s;
$i =$i % $s;
echo $i;
echo "<br>";
$i %= $s;
echo $i;
echo "<br><br><br>";

//3.Comparison ops
/*USed to comparer values
 NB:Comparison ops returns a boolean data types: true, false NB*/
//a. ==(equals sign)
$s=2;
$t=3;
$j=2;
$answer = $s ==$t;
var_dump($answer);
echo "<br><br>";

$db_username = "johndoe";
$db_password ="ekapassword";

$user_username ="mikedoe";
$user_password ="1234pass";

$check =$db_username ==$db_password;
var_dump($check);
echo "<br><br>";

//b. ===: Identical :returns true if any one variable is equal to another variable and these two variables are of the same datatype
$check =$db_username ===$db_password;
var_dump($check);
echo "<br><br>";

//c.!= : not equal to: true if two variables are not equal
$check =$db_username !=$db_password;
var_dump($check);
echo "<br><br>";

//d. !==: not identical: returns true if variables are not identical
$check =$db_username !==$db_password;
var_dump($check);
echo "<br><br>";

//e. > : Greater than: return true idf a value is greater than the other value
$myname ="Adrian Silver";
$yourname = "Sliver Mwingine";
$result =strlen($myname) > strlen($yourname);
var_dump($result);
echo "<br><br>";

//f. < : Less than: return true idf a value is greater than the other value
$myname ="Adrian Silver";
$yourname = "Sliver Mwingine";
$result =strlen($myname) < strlen($yourname);
var_dump($result);
echo "<br><br>";

//g. <= : Less than or equals to: return true if a value is greater than the other value
$myname ="Adrian Silver";
$yourname = "Sliver Mwingine";
$result =strlen($myname) <= strlen($yourname);
var_dump($result);
echo "<br><br>";

//h. >= : Greater than or equals to: return true if a value is greater than the other value
$myname ="Adrian Silver";
$yourname = "Sliver Mwingine";
$result =strlen($myname) >= strlen($yourname);
var_dump($result);
echo "<br><br>";

//4. Logical ops
/*Used to combine conditional statements*/
//a. and : returns true if two operations are true
$x=100;
$y=200;
if($x ==100 and $y ==200){
    echo "<h1>It is true $x is equal to 100 and $y is equal to 200</h1>";
}
//b. or : returns true if either of the two operations are true
$x=100;
$y=200;
if($x ==300 or $y !=$x){
    echo "<h1>It is true $x is equal to 100 and $y is not equal to 200</h1>";
}
/*   || also means or*/
if($x ==300 || $y !=$x){
    echo "<h1>It is true $x is equal to 100 and $y is not equal to 200</h1>";
}
//c. not : returns true if a variable is false
$check = !($x == 100 and $y ==200);
var_dump($check);

















?>