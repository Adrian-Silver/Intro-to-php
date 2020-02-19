<?php
require 'header.php';
require 'config.php';

//COMPLETE PHP FORM
//algorithm
/*
 * 1. create variables that will store received data
 */   $name=$value = $description =$conditions='';
// * 2. create variables that will store error message
$name_err=$value_err = $description_err =$conditions_err ='';
// * 3. check if the data is empty


//        3.1. check the request method
if($_SERVER['REQUEST_METHOD']=='POST') {
    //     3.2. clean data
    $name = safisha($_POST['name']);
    $value = safisha($_POST['value']);
    $description = safisha($_POST['description']);






    //        3.3. check if data is empty
    //    if true assign error messages to respective error variables
    if (empty($name)) {
        $name_err = "Please fill in the product's name";
    }
    if (empty($value)) {
        $value_err = "Please fill in the product's value";
    }
    if (empty($description)) {
        $last_name_err = "Please give a description of the item";
    }
    else {

        //Inserting data into the table
        $sql = "INSERT INTO `jumia-like`(`id`, `name`, `value`, `description`) VALUES (NULL,'$name','$value','$description','$conditions')";
        if (mysqli_query($connection, $sql)) {
            echo "Data inserted successfully <br>";
        } else {
            echo "Data not inserted" . mysqli_error($connection);
        }
    }
}
?>

    <table style="width: 100%">
        <tr>
            <td><?php echo $name. "<br>";?></td>
            <td><?php echo $value. "<br>";?></td>
            <td><?php echo $description. "<br>";?></td>
            <td><?php echo $conditions. "<br>";?></td>

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


?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
    <fieldset>
        <h3>Register here...</h3>
        <label for="name">Username</label> <br>
        <input type="text" name="name"> <br>
        <span class="error" style="color: orangered"><?php echo $name_err. "<br>" ?></span>

        <label for="Value">Value</label> <br>
        <input type="text" name="value"> <br>
        <span class="error" style="color: orangered"><?php echo $value_err. "<br>"?></span>

        <label for="Description">Description</label> <br>
        <input type="text" name="description"> <br>
        <span class="error" style="color: orangered"><?php echo $description_err. "<br>" ?></span>


        Condition:
        <label for="radio"></label> <br>
        <input type="radio" name="description" value="good">Good <br>
        <input type="radio" name="description" value="fair">Fair <br>
        <input type="radio" name="description" value="bad">Bad <br>

        <a href=""></a>
        <button type="submit">View</button>


    </fieldset>

</form>

<?php
require 'footer.php';
?>













