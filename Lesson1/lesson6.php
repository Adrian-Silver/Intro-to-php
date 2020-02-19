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

//Accessing array items: us square brackets() with index number inside
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

echo "<br><br>";

/*Using a folder for loop from 0-100, if a number is a multiple of 3 echo "FIZZ"
If a number is a multiple of 5 echo "BUZZ".
If a multiple of both 3 and 5 echo "FIZZBUZZ".
Otherwise echo the number.   */

for ($x=0;$x<=100;$x++){
    if($x==0){
        echo $x." <br>";
    }
    elseif ($x %15==0){
        echo $x. "FIZZBUZZ <br>";
    }
    elseif ($x %3==0){
        echo $x. "FIZZ <br>";
    }
    elseif ($x %5==0){
        echo $x. "BUZZ <br>";
    }

    else{
        echo $x. "<br>";
    }
}

echo "<br><br><br>";


//solution 1 to fizzbuzz
for ($x=0 ; $x<100; $x++){
//    $x: start of the loop
//    $x<100 : test condition
//    $x++ : increment value
    if ($x %15==0){
        echo "$x FIZZBUZZ <br>";
    }elseif ($x%3==0){
        echo "$x FIZZ <br>";
    }elseif ($x %5){
        echo "$x BUZZ <br>";
    }else{
        echo "$x <br>";
    }
}

echo "<br><br><br>";

//osln 2 to fizzbuzz
for ($i= 100; $i<100; $i++){
    if ($i%3==0 and $i%5==0){
        echo "$x FIZZBUZZ <br>";
    }elseif($i %3==0){
        echo "FIZZ <br>";
    }elseif($i%5==0){
        echo "$i BUZZ";
    }else{
        echo "$i";
    }
}

echo "<br><br><br>";




/*for (initial value; text value;increment value){
    code to be executed
}   */
for ($x=0; $x< count($fruits);$x++){
//    echo out each item by accessing them using index numbers
    echo $fruits[$x]."<br>";

}
$num_fruits=count($fruits);
for ($x=0; $x<$num_fruits;$x++){
//    echo out each item by accessing them using index numbers
    echo $fruits[$x]."<br>";
}
echo "<br><br>";
//Associative array: 1-Populating directly
$geeks_fruits = array("Craig"=>"Mango","Steve"=>"Apple","Victor"=>"Mapera","Masood"=>"Grapes");



$foota= array("Chelsea"=>"Blue","Liverpool"=>"Maroon","Wolves"=>"Yellow","Norwich"=>"Green","Man-Utd"=>"Red");

//Associative array:2-populating one by one
$country_car_brands["Kenya"] ="Nyayo";
$country_car_brands["Germany"]=array("Benz","BMW","VW");
$country_car_brands["US"]="Ford";
$country_car_brands["Japan"]=array("Mitsubishi","Toyota");
$country_car_brands["China"]=array("Hyundai");

//Accessing associative array item: USe the keys
echo $country_car_brands["Kenya"]. "<br><br>";

foreach ($country_car_brands["Germany"] as $germany){
    echo $germany. "<br>";
}
echo "<br>";

$car_count=count($country_car_brands["Germany"]);
for ($i=0; $i<$car_count;$i++){
    echo $country_car_brands["Germany"][$i]."<br>";
}
echo "<br>";

$car_count=count($country_car_brands["Germany"]);//no. of cars
$cars_found_germany=$country_car_brands["Germany"];//actual indexed array in German key
for($i=0;$i<$car_count;$i++){
    echo $cars_found_germany[$i]. "<br>";
}










?>