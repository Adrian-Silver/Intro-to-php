<?php
//FOR loops
//loops:
//We use loops to execute a block of code again and again as long as a certain condition is true
/*In pHP, we have the following loop types:
while - loops through a block of code as long as the specified condition is true
do...while -loops through a block of code once, and then repeats the loop as long as the specified
for - loops through a block of code a specified no. of times
foreach - loops through a block of code a specified no. of times    */


//1. While-loops through a block of code as long as the specified condition is true
$count=10;
//syntax
/*while (condition){
    code to execute
}
*/

while ($count<20){
    echo "Hello World <br>";

    $count ++;
}

$count=0;
while ($count<10){
    echo "$count. <br>";
    $count ++;
    echo "<br>";
}
$count=0;
while ($count<20){
    if($count==0){
        echo "$count.is not divisible by three<br>";
    }
    elseif($count %3==0){
        echo $count. "Divisible by three<br>";
    }else{
        echo  $count. "is not divisible by three <br>";
    }
    $count ++;
}

/*$count< 20:continue the loop as long as$count is less than 20
***NB***$count++  increases the loop  as long as $count is less than 20
$do...while - loops through a block of code once, and then repeats the loop as long as the
//syntax
do{
    code to execute
while(condition is true)
}
*/

$x=0;
do{
    echo "<div style='border: 2px solid red'>
            <p>$x</p>
        </div>";
    $x ++;
}while($x<10);

//for - loops through a block of code a specified no. of times
//syntax
/*for (initial value; text value;increment value){
    code to be executed
}   */
/*initial value: Initialize the loop counter value: determines the starting of a loop
test value:evaluated for each loop iteration. if it evaluates to true , the loop continues.
    if ti evaluate to false, the loop ends.
increment value: increases the loop counter value
foreach - loops through a block of code for each element in an array.  */

for ($x=0;$x<10;$x+=2){
    echo "<span>Value: $x </span> <br>";
}

echo "<b>numbers divisible by 5</b> <br>";

for ($x=0;$x<=100;$x+=5){
    echo "$x <br>";
}
//create code that enable sdetermine if no. is divisible by 5 from 0-100   (Q)
?>