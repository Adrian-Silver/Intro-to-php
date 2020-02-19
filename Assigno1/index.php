<?php

require 'header.php';  //to include header code
require 'config.php';

echo "This is a *-like mock-up";

$sql ="SELECT * FROM `jumia-like`";

//store data from db in a variable called users
$users = mysqli_query($connection, $sql);



//loop through data from php
while ($row = mysqli_fetch_array($users)){
    echo "<div class='card'>";
    $user_id =$row['id'];
    echo "<a href='details.php?id=$user_id'>";
    echo $row['name'];
    echo $row['value'];
    echo $row['description'];


    echo"</a>";

    echo "<a href='delete.php?id=$user_id'>Delete</a>";
    echo "</div>";
    echo "<br>";
}






?>