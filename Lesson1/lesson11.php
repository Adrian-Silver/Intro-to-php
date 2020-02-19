<?php
/*In development, we often need to store data collected from users of our systems
MySQL is the database base system used for both big and small businesses and it uses the
SQL (Structured Query Language) to interact with data.
A DB is made uo of related tables

Before usuing the database you have to connect to it by providing
the following info:
    /*
 * 1.hostname
 * 2.username
 * 3.password
 * 4.database name
 */

//PHP has helper functions that will make database interactions easy

//CONNECTING TO THE DATABASE
//credentials to connecting to a db
$hostname = 'localhost';
$username = 'root';
$password ='';
$databasename = 'demo1';

/*To connect to a database: use the php function called mysqli_connect()
//mysqli function returns a boolean datatype
 */

$connection = mysqli_connect($hostname, $username, $password, $databasename);
//check connection
if ($connection==false){
    echo "Connection not successful <br>";
//    echo mysqli_connect_error(). "<br>";

//    stop connection if unsuccessful
    die("ERROR:" .mysqli_connect_error());
}

//Inserting data into the table
$sql = "INSERT INTO `users`(`id`, `username`, `firstname`, `lastname`, `email`, `password`, `gender`) VALUES (NULL,'Silver','Allan','Gitau','allang@gmail.com','pass1234','Male')";
if(mysqli_query($connection, $sql)){
    echo "Data inserted successfully <br>";
}else{
    echo "Data not inserted". mysqli_error($connection);
}
/*
//Create a database
$sql ="CREATE DATABASE demo1"; //request/query to the DB system
//make the request/execute: mysqli_query: return boolean
if(mysqli_query($connection, $sql)){
    echo "Database created successfully <br>";
}else{
    echo "ERROR: could not execute $sql" .mysqli_error($connection);
}

*/









?>















