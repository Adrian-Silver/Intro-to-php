<?php
/*
 * PHP $_POST is a php super global variable which is used to collect form
 * data after submitting a html form with methods="post"
 * $_POST is also used to pass variables
 * receive form data using POST request/$_POST() superglobal
 */

//receive data
//declare variables to sent data
$name='';
$email='';

//check the request method: GET or POST; use $_SERVER[]
if ($_SERVER['REQUEST_METHOD']=='POST'){

//    if method is POST, grab data using the $_POST superglobal
    $name= $_POST['jina'] ;
    $email=$_POST['arafa'];
    $error =false;
//    if name is empty
    if (empty($name)){
        $error=true;
        echo "<p style='color: red'>Please fill in your name</p>";
    }
    if (empty($email)){
        $error=true;
        echo "<p style='color: red'>Please fill in your email</p>";
    }else{
        $name =safisha($name);
        $email =safisha($email);
        echo "<p style='color: green'>Your name is $name and email is $email </p><br>";

    }
    /*
     * print the data
     * if (!error){
     *     echo "<p style='color: green'>Your name is $name and email is $email </p><br>";
     *  }
      */



}

//validating /cleaning data
/**  1. To remove unwanted space use: trim()
    2. To remove backslashes use stripslashes
 */

//create a function to clean data

function safisha($data){
    $data= trim($data);
    $data= stripslashes($data);
    $data= htmlspecialchars($data);
    return $data;
}

?>


<!-- htmlspecialchars prevents hacking-->

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] )  ?>" method="post">
    <h3>Fill form...</h3>
    <input type="text" name="jina" placeholder="Enter name.." ><br><br>
    <input type="email" name="arafa" placeholder="Enter email.."><br>
    <button type="submit">Send</button>
<!--    name : is the key value entered in the form:
        this will result to an associative array of this format-->
</form>

<?php
//grabbing data sent via $_GET
$the_name=$_GET['name'];
$the_age=$_GET['age'];
$the_country=$_GET['country'];
echo "Your details: Name : $the_name, Age: $the_age, Country: $the_country <br>";


?>

<!-- $_GET : USed to collect data from a form just like $_POST
    collect data sent via the URL-->

<!--    NB:*** $_GET shouldn't be used in forms***-->

<a href="lesson9.php?name=Obrien&age=23&country=Kenya">Send details</a>















<?php
    $_POST =array("jina"=>"john", "arafa"=>"john@gmail.com")

?>



