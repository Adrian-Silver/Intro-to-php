<?php

require 'header.php';
require 'config.php';





//COMPLETE PHP FORM
//algorithm
/*
 * 1. create variables that will store received data
 */   $product=$value = $description = $conditione ='';
// * 2. create variables that will store error message
$product_err=$value_err = $description_err = $conditione_err ='';
// * 3. check if the data is empty


//        3.1. check the request method
if($_SERVER['REQUEST_METHOD']=='POST') {
    //     3.2. clean data
    $product = safisha($_POST['product']);
    $value = safisha($_POST['value']);
    $description = safisha($_POST['description']);
    $conditione = safisha($_POST['conditione']);



    /* ***I think there is an error here. ****/


    //        3.3. check if data is empty
    //    if true assign error messages to respective error variables
    if (empty($product)) {
        $product_err = "Please fill in your username";
    }
    if (empty($value)) {
        $value_err = "Please fill in your first name";
    }
    if (empty($description)) {
        $conditione_err = "Please fill in your last name";

    } else {
        //Inserting data into the table
        $sql = "INSERT INTO `products2`(`id`, `product`, `value`, `description`, `conditione`) VALUES (NULL,'$product','$description',$conditione)";
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
            <td><?php echo $product. "<br>";?></td>
            <td><?php echo $value. "<br>";?></td>
            <td><?php echo $description. "<br>";?></td>
            <td><?php echo $conditione. "<br>";?></td>
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
// /* There could e an error here (above). */

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
    <fieldset>
        <h3>Register here...</h3>
        <label for="product">Product</label> <br>
        <input type="text" name="product"> <br>
        <span class="error" style="color: orangered"><?php echo $product_err. "<br>" ?></span>

        <label for="value">value</label> <br>
        <input type="text" name="value"> <br>
        <span class="error" style="color: orangered"><?php echo $value_err. "<br>"?></span>

        <label for="description">description</label> <br>
        <input type="text" name="description"> <br>
        <span class="error" style="color: orangered"><?php echo $description_err. "<br>" ?></span>



        Conditione:
        <label for="radio"></label> <br>
        <input type="radio" name="conditione" value="good">Good <br>
        <input type="radio" name="conditione" value="fair">Fair <br>
        <input type="radio" name="conditione" value="bad">Bad <br>

        <a href=""></a>
        <button type="submit">View</button>


    </fieldset>

</form>

<?php
require 'footer.php';
?>










