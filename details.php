<?php

// call file with databse connection
include('config/db_connect.php');

// check GET request id parameter
if (isset($_GET['id'])) {

    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // make the sql
    $sql = "SELECT * FROM pizzas WHERE id = $id";

    // get query results
    $result = mysqli_query($conn, $sql);

    // fetch result in array format
    $pizza = mysqli_fetch_assoc($result);

    // free result and close connection
    mysqli_free_result($result);
    mysqli_close(($conn));


    print_r($pizza);
}

?>


<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>

<h2>details</h2>

<?php include('templates/footer.php'); ?>

</html>