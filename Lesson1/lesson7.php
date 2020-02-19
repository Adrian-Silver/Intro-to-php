<?php
/*
 * Besides the built-in PHP functions, it is possible to create your owm functions
 * A function is a block of statements that can be used repeatedly in a program./does a specific task
 * A function will not execute automatically when a page loads
 * A function will be executed by a  call to the function.
 */

//syntax
/*function function name(){
    code to execute ONLY WHEN THIS FUNCTION IS CALLED/USED
}    */

//function creation/declaration
function greetings(){
    echo "Hello world <br>";
}

//using a function;USE A FUNCTION NAME FOLLOWED BY A PARENTHESIS  NB:You must call your function to work.
greetings();

function greetings1(){
    echo "Nyama Choma <br>";
}
greetings1();

function greetings2($name,$age){
    echo "Hello ".$name."<br>You are".$age."<br>";
}
greetings2("Silver",24);
/* greetings2();  call this function with enough arguments   */

//functions with default arguments
function greetings3($name="PHP",$country="Kenya"){
    echo "I ame a $name developer from $country<br>";
}
greetings3();
greetings3("CSS","Uganda");

//functions that return values
function greetings4($name){
    $get_name=$name;
    return $get_name;
}

$found_name = greetings4("John");
echo $found_name;
echo "<br><br><br>";

function areaOfCircle($radius){
//    area =>pie*r*r
    $pie=3.142;
    $area =$pie *$radius*$radius;
    return $area;
}
$c1=7;
$c2=14;
$areaC1=areaOfCircle($c1);
$areaC2=areaOfCircle($c2);
echo $areaC1. "<br>";
echo $areaC2;

echo "<br><br>";

//function that takes an array as an argument
function looparray($array_name, $myforeach=true){
    if ($myforeach){
        echo "FOR EACH LOOP <br>";
        foreach ($array_name as $item){
            echo "$item <br>";
        }
//        uses foreach by default
    }else {
        echo "FOR LOOP <br>";
        //    get the length of the array
        //    FOR LOOP
        $length = count($array_name);
        for ($s = 0; $s < $length; $s++) {
            echo "$array_name[$s] <br>";
        }
    }

}

$games = array("GTA","NFS","FIFA","PES","MORTAL KOMBAT","JACK RYAN","ANGRY BIRDS","CANDY CRUSH");
looparray($games);
echo "<br><br>";
looparray($games, $myforeach=false);

/*
Assignment:
write a function that calculates the area of circle and prints the results with unit of measurement chosen.
This function should have options for unit of measurements.
*/


echo "<hr>";

function area_unit($radius, $cm=true){
    $pie=3.142;
    $area=$pie*$radius*$radius;
    if($cm){
//        area in cm
        echo "Area is $area cm <br>";
    }else{
//        area in m
        echo "Area is $area m <br>";
    }

}
area_unit(7);
area_unit(14, $cm=false);


?>