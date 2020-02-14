<?php
//COMPLETE PHP FORM
//algorithm
/*
 * 1. create variables that will store received data
 */   $username=$first_name = $last_name = $email = $password1 = $password2 = $gender ='';
// * 2. create variables that will store error message
$username=$first_name = $last_name = $email = $password1 = $password2 = $gender ='';
// * 3. check if the data is empty


//        3.1. check the request method
if($_SERVER['REQUEST_METHOD']=='POST') {
    //     3.2. clean data
    $username = safisha($_POST['username']);
    $first_name = safisha($_POST['first_name']);
    $last_name = safisha($_POST['last_name']);
    $email = safisha($_POST['email']);
    $password1 = safisha($_POST['pass1']);
    $password2 = safisha($_POST['pass2']);
    $gender = safisha($_POST['gender']);
}
    //        3.3. check if data is empty
//    if true assign error messages to respective error variables
    if(empty($username)){
        $username_err ="Please fill in your username";
    }
    if(empty($first_name)){
        $first_name_err ="Please fill in your first name";
    }
    if(empty($last_name)){
        $last_name_err ="Please fill in your last name";
    }
    if(empty($email)){
        $email_err ="Please fill in your email";
    }
    if(empty($password1)){
        $password1_err ="Please fill in your password";
    }
    if(empty($password2)){
        $password2_err ="Please confirm your password";
    }
    if(empty($password1 != $password2)){
        $first_name_err ="Your password did not match";
    }
    if(empty($gender)){
        $gender_err = "Please select your gender";
    }
?>

    <table style="width: 100%">
        <tr>
            <td><?php echo $username. "<br>";?></td>
            <td><?php echo $first_name. "<br>";?></td>
            <td><?php echo $last_name. "<br>";?></td>
            <td><?php echo $email. "<br>";?></td>
            <td><?php echo $password1. "<br>";?></td>
            <td><?php echo $password2. "<br>";?></td>
            <td><?php echo $gender. "<br>";?></td>
        </tr>
    </table>



<?php

// * 4. display the data; SOON store data in a database
function safisha($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// */
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
    <fieldset>
        <h3>Register here...</h3>
        <label for="Username">Username</label> <br>
        <input type="text" name="username"> <br>
        <span class="error" style="color: orangered"><?php echo $username_err. "<br>" ?></span>

        <label for="First name">First name</label> <br>
        <input type="text" name="first_name"> <br>
        <span class="error" style="color: orangered"><?php echo $first_name_err. "<br>"?></span>

        <label for="Last name">Last name</label> <br>
        <input type="text" name="last_name"> <br>
        <span class="error" style="color: orangered"><?php echo $last_name_err. "<br>" ?></span>

        <label for="Email">Email</label> <br>
        <input type="email" name="email"> <br>
        <span class="error" style="color: orangered"><?php echo $email_err. "<br>" ?></span>

        <label for="Password">Password</label> <br>
        <input type="password" name="pass1"> <br>
        <span class="error" style="color: orangered"><?php echo $password1_err. "<br>" ?></span>

        <label for=" ConfirmPassword">ConfirmPassword</label> <br>
        <input type="password" name="pass2"> <br> <br>
        <span class="error" style="color: orangered"><?php echo $password2_err. "<br>" ?></span>

        Gender:
        <label for="radio"></label> <br>
        <input type="radio" name="gender" value="male">Male <br>
        <input type="radio" name="gender" value="female">Female <br>
        <input type="radio" name="gender" value="other">Other <br>

        <a href=""></a>
        <button type="submit">Join</button>


    </fieldset>

</form>












