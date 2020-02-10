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
function greetings3($name="PHP"){
    echo "I ame a $name developer <br>";
}
greetings3();
greetings3("CSS");





















?>