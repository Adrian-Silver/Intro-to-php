<?php

//fetch user from db using the received id($user_id)
require 'header.php';
require 'config.php';

//grab id : use $_GET()
if (isset($_GET['id'])) {
    $id = $_GET['id'];

//fetch data from db using id
    $sql ="SELECT `id`, `products`, `price`, `description`, `condit` FROM `products3` WHERE id='$id'";
    $user = mysqli_query($connection, $sql);
//    create associative arra y to split data into column title and actual values: use mysqli_fetch_assoc
    $row = mysqli_fetch_assoc($user);

    echo "<div class='card'>";
    echo $row['products'] . '<br>';
    echo $row['price'] . '<br>';
    echo $row['description'] . '<br>';
    echo $row['condit'] . '<br>';


}

require 'footer.php';


