<?php 

// connect to database
$conn = mysqli_connect('localhost', 'navika', 'php8090', 'ninja-pizza-php');

// check connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
