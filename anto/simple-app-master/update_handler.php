<?php


require 'config.php';

if (isset($_POST['update_btn'])){
//    if button was clicked,
//    grab id first
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        //    grab form data

            $name =$_POST['product_name'];
            $price =$_POST['product_price'];
            $description =$_POST['description'];
        $sql = "UPDATE `products` SET `name`='$name',`price`='$price',`description`='$description' WHERE id =$id";

//    execute update instruction
        if(mysqli_query($conn,$sql)){
            header("location:details.php?id=$id");

                exit();

        }else{
            echo "ERROR".mysqli_error($conn);
        }

    }

}



?>