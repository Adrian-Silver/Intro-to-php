<?php
/*An array stores multiple values in one single variable:
An array is a special variable, which can hold more than one value at a time      */
$fruit1="Mango";
$fruit2="Orange";
$fruit3="Guava";
$fruit4="Peach";
$fruit5="Melon";
$fruit6="Apple";
$fruit7="Passion";
//Create an array in php
//In PHP, the array() function is used to create an array:
$fruits=array("Mango", "Orange","Guava","Peach","Melon","Apple","Passion");
//echo $fruits;
//Count no. of items in an array: use count() function
$num_items = count($fruits);
echo $num_items. "<br>";

//Accessing array items: us esquare brackets() with index number iside
echo $fruits[0]. "<br>";
echo $fruits[1]. "<br>";
echo $fruits[2]. "<br>";
echo $fruits[3]. "<br>";
echo $fruits[4]. "<br>";
echo $fruits[5]. "<br>";
echo $fruits[6]. "<br><br>";
echo "My favourite fruit is ".$fruits[0]." and ".$fruits[4].'<br>';

//Looping through an indexed array: use foreach
foreach($fruits as $matunda){
    echo $matunda. '<br>';
}




?>