<?php
require 'config.php';
require 'header.php';

$username=$email=$password='';
$username_err=$email_err=$password_err='';
//process data
if (isset($_POST['btn_signup'])){
//    grab data from form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];




//    check if user exist
    $sql = "SELECT * FROM `owners` WHERE email ='$email'";
    $results = mysqli_query($connection, $sql);
    if(mysqli_num_rows($results) >0){
//        user exists
        header("location:login.php");
        exit();
    }
//    hash user password
    $password=md5($password);

//    add user to db and take to login page
    $sql ="INSERT INTO `owners`(`own_id`, `own_name`, `housetype`, `price`, `contact`, `description`) VALUES (NULL ,'$own_name','$housetype','$price','$contact','$description')";
    if(mysqli_query($connection, $sql)) {
//        if user has been successfully
        header("location:login.php");
        exit();
    }else{
        echo "ERROR: ".mysqli_error($connection);
    }
}


//    check if user exist
$sql = "SELECT * FROM `owners` WHERE email='$email'";
$results = mysqli_query($connection, $sql);
if (mysqli_num_rows($results)>0){
//        user exists
    header("location:logout.php");
    exit();
}
//    hash user password

//    add user to db and take to login page
$sql ="INSERT INTO `owners`(`own_id`, `own_name`, `housetype`, `price`, `contact`, `description`) VALUES (NULL ,'$own_name','$housetype','$price','$contact','$description')";

if(mysqli_query($connection, $sql)) {
//        if user has been successful
    header("location:login.php");
    exit();
}else{
    echo "ERROR: ".mysqli_error($connection);
}



?>

    <!--start signup form-->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-xl-3"></div>
            <div class="col-md-6 col-lg-6 col-xl-6">
                <div id="auth-form">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                        <fieldset>

                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-info btn-block" name="btn_signup">SignUp</button>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3"></div>
        </div>
    </div>








    <!--end signup form-->





















<?php
require 'footer.php';

?>
<?php

