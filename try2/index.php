<?php
require 'header.php';  //to include header code
require 'config.php';


echo "<h1>Our users</h1>";
//query for selecting all records from table users
$sql = "SELECT * FROM `products2`";

//store data from db in a variable called users
$users = mysqli_query($connection, $sql);

//loop through data from php
while ($row = mysqli_fetch_array($users)){
    echo "<div class='card'>";
    $user_id =$row['id'];
    echo "<a href='details.php?id=$user_id'>";
    echo $row['product'];
    echo $row['value'];
    echo $row['description'];
    echo $row['conditione'];

    echo"</a>";

    echo "<a href='delete.php?id=$user_id'>Delete</a>";
    echo "</div>";
    echo "<br>";
}


require 'footer.php';




?>
    <a href="details.php?id=2">go</a>
