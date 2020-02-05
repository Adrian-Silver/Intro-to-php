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


?>