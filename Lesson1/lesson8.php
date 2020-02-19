<?php
/*
 * Some predefined variables in PHP are "superglobals" which means that,
 * the are always accessible regardless of the scope and you can access them
 * from any function clas or file withiut having to do anything special.
 *
 * The PHP superglobal variables are:
 *
 * $GLOBALS
 * $_SERVER
 * $_REQUEST
 * $_POST
 * $-GET
 * $_FILES
 * $_ENV
 * $_COOKIE
 * $_SESSION
 *
 */

// $GLOBALS
/*
 Super global variables are built in variables that are always available in all scopes
$GLOBALS is a PHP super global variable which is used to access global variables
from anywhere in the PHP script (also from within functions or methods).
PHP stores all global variables in an array called $GLOBALS[index]
The index holds the name of the variable.
 */
$GLOBALS["name"]="JOhn";
$x=75;
$y=25;
$GLOBALS["sum"]="$x+$y";

//$_SERVER
/*
 * Server is a PHP super global variable which holds info about headers,
 *  paths, and script locations.
 *
 * To find file location use element "PHP-SELF in $_SERVER
 */
$phpfilepath= $_SERVER["PHP_SELF"];
echo "$phpfilepath. <br>";

//get server name
$servername=$_SERVER["SERVER_NAME"];
echo "SERVER NAME:" .$servername. "<br>";

//get request method
$request_method=$_SERVER["REQUEST_METHOD"];
echo "REQUEST METHOD:". $request_method. "<br>";


//$_REQUEST: we need a form for this
//grabbing data
$get_name= $_REQUEST['jina'];
$get_email=$_REQUEST['arafa'];
echo "$get_name <br>";
echo "$get_email <br>";
echo "
    <form action='lesson8.php' method='post'>
    <label for=''>Username</label>
    <input type='text' name='jina'>
    <label for=''>e-mail</label>
    <input type='email' name='arafa'>
    <button type='submit'>Send Data</button>
    
    </form>
    "

















?>