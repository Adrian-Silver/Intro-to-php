<?php
require 'header.php';
require 'config1.php';
////create a database
//$sql = "CREATE DATABASE demo1";//request/query to the db system
////make the request/execute: mysqli_query: return boolean
//if (mysqli_query($connection, $sql)){
//    echo "Database created successfully<br>";
//}else{
//    echo "ERROR: could not execute $sql".mysqli_error($connection);
//}




//complete PHP Form
//algorithm
//1. create variables that will store received data
$username = $first_name = $last_name = $email = $pass1 = $pass2 = $gender = '';
//2. create variables that will store error messages
$username_err = $first_name_err = $last_name_err = $email_err = $pass1_err = $pass2_err = $gender_err = '';
//3. process incoming data
    //3.1 check the request method
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //3.2 clean data
    $username = safisha($_POST['username']);
    $first_name = safisha($_POST['first_name']);
    $last_name = safisha($_POST['last_name']);
    $email = safisha($_POST['email']);
    $pass1 = safisha($_POST['pass1']);
    $pass2 = safisha($_POST['pass2']);
    $gender = safisha($_POST['gender']);
}

    //3.3 check if data is empty
//if true assign error messages to respective error variables
if (empty($username)){
    $username_err = "Please fill in your username";
}
if (empty($first_name)){
    $first_name_err = "Please fill in your first name";
}
if (empty($last_name)){
    $last_name_err = "Please fill in your last name";
}
if (empty($email)){
    $email_err = "Please fill in your email";
}
if (empty($pass1)){
    $pass1_err = "Please fill in your password";
}
if (empty($pass2)){
    $pass2_err = "Please confirm your password";
}
if (empty($gender)){
    $gender_err = "Please select your gender";
}
//check if pass1 and pass2 are matching
if ($pass1 != $pass2){
    $pass1_err = "Your passwords did not match";
}else{
//    md5(encrypts password)-password hashing
    $pass1 = md5($pass1);
    //inserting data into the table
    $sql = "INSERT INTO `users`(`id`, `username`, `firstname`, `lastname`, `email`, `password`, `gender`) VALUES (NULL,'$username','$first_name','$last_name','$email','$pass1','$gender')";

    if (mysqli_query($connection, $sql)){
        echo "Data inserted successfully<br>";
    }else{
        echo "Data not inserted".mysqli_error($connection);
    }
}


echo "DETAILS: $username, $first_name, $last_name, $email, $pass1, $pass2, $gender";

//4. display the data: soon store data in a database

function safisha($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<!--enctype - send data not text eg images, videos-->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
    <fieldset>
        <h3>Register here</h3>
        <label for="">Username</label><br>
        <input type="text" name="username"><br>
<!--        show error if there is one-->
        <span class="error" style="color: orangered"><?php echo $username_err?></span><br>

        <label for="">First name</label><br>
        <input type="text" name="first_name"><br>
        <!--        show error if there is one-->
        <span class="error" style="color: orangered"><?php echo $first_name_err?></span><br>

        <label for="">Last name</label><br>
        <input type="text" name="last_name"><br>
        <!--        show error if there is one-->
        <span class="error" style="color: orangered"><?php echo $last_name_err?></span><br>

        <label for="">Email</label><br>
        <input type="email" name="email"><br>
        <!--        show error if there is one-->
        <span class="error" style="color: orangered"><?php echo $email_err?></span><br>

        <label for="">Password</label><br>
        <input type="password" name="pass1"><br>
        <!--        show error if there is one-->
        <span class="error" style="color: orangered"><?php echo $pass1_err?></span><br>

        <label for="">Confirm Password</label><br>
        <input type="password" name="pass2"><br>
        <!--        show error if there is one-->
        <span class="error" style="color: orangered"><?php echo $pass2_err?></span><br>

        Gender:
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="other">Others <br><br>
        <!--        show error if there is one-->
        <span class="error" style="color: orangered"><?php echo $gender_err?></span><br>

        <button type="submit">SignUp</button>
    </fieldset>
</form>

<?php
require 'footer.php';
?>
