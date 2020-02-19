<?php
require 'header.php';
require 'config.php';





//COMPLETE PHP FORM
//algorithm
/*
 * 1. create variables that will store received data
 */   $product=$value = $description = $condit ='';
// * 2. create variables that will store error message
$product_err=$value_err = $description_err = $condit_err ='';
// * 3. check if the data is empty


//        3.1. check the request method
if($_SERVER['REQUEST_METHOD']=='POST') {
    //     3.2. clean data
    $product = safisha($_POST['products']);
    $value = safisha($_POST['price']);
    $description = safisha($_POST['description']);
    $condit = safisha($_POST['condit']);


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
        $description_err = "Please fill in your last name";
    }
    if (empty($condit)) {
        $condit_err = "Please fill in your email";

    }
        //Inserting data into the table
        $sql ="INSERT INTO `products3`(`id`, `products`, `price`, `description`, `condit`) VALUES (NULL ,'$product','$value','$description','$condit')";
        if (mysqli_query($connection, $sql)) {
            echo "Data inserted successfully <br>";
        } else {
            echo "Data not inserted" . mysqli_error($connection);
        }

}
?>

    <table style="width: 100%">
        <tr>
            <td><?php echo $product. "<br>";?></td>
            <td><?php echo $value. "<br>";?></td>
            <td><?php echo $description. "<br>";?></td>
            <td><?php echo $condit. "<br>";?></td>

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
            <h3>Our Products...</h3>
            <label for="Product">Product</label> <br>
            <input type="text" name="products"> <br>
            <span class="error" style="color: orangered"><?php echo $product_err. "<br>" ?></span>

            <label for="Value">Value</label> <br>
            <input type="text" name="price"> <br>
            <span class="error" style="color: orangered"><?php echo $value_err. "<br>"?></span>

            <label for="Description">Description</label> <br>
            <input type="text" name="description"> <br>
            <span class="error" style="color: orangered"><?php echo $description_err. "<br>" ?></span>

            <label for="Condition">Condition</label> <br>
            <input type="text" name="condit"> <br>
            <span class="error" style="color: orangered"><?php echo $condit_err. "<br>" ?></span>


            <a href=""></a>
            <button type="submit">View</button>


        </fieldset>

    </form>

<?php
require 'footer.php';
?>











