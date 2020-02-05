<?php
//PHP data types
//Variables can store diff types of data, that do diff things

/*PHP supports the following data types
1.String
2. Integers
3. Float
4. Boolean
5. Arrays
6. Objects
7. NULL
8. Resources*/

//STRING
//A sequence of characters in double or single quotes
// e.g "hello world", 'hell world'
//Rules that govern names for variables

/*A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9,
Variable names are case sensitive ($age and $AGE are two different variables)*/
$x ="PhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhpPhp";
$y ="Kotlin";
$Y ="Android";
var_dump($x);
var_dump($y);
var_dump($Y);
echo "<br>";
//What if you want to know what makes up a string?
// USe strlen() function
// function: code that helps you do repetitive tasks
echo strlen($x);
echo "<br>";
echo strlen("Adrian Silver");
echo "<br>";
//count no. of words in a string: str word count() function
echo str_word_count("I love coding in php");
echo "<br>";
$num_words =str_word_count("Coding is awesome");
echo "$num_words";
echo "<br>";
//Search for a text within a String: strpos()
$position_for_world= strpos("Hello world", "world");
echo $position_for_world;
echo "<br>";
//Replace text within a string: use str_replace()
echo str_replace("World", "Dunia", "Hello World");
echo "<br>";


//Integers
/*are no.s that are non-decimal
must atleast have one digit*/
$age =21;
var_dump($age);
echo "<br>";


//Float
/*Is a no. with a decimal point*/
$cup_volume= 23.34;
var_dump($cup_volume);
echo "<br>";

//Boolean :true, false
//ofently usd in conditional statements
$a =true;
$b =false;
echo 3<5; //returns 1-true
echo "<br>";
echo 3>5; //returns nothing on the browser, it means false