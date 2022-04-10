<?php
$connection = mysqli_connect('localhost', 'root');

if ($connection) {
    echo "Connection is Establish!";
}
else {
    echo "ERROR Connection Failed!";
}

mysqli_select_db($connection, 'query');

$name = $_POST['name'];
$email = $_POST['email'];
$query = $_POST['querybox'];


$data = "INSERT INTO querybox (FULLNAME,EMAIL,QUERY) VALUES ('$name', '$email', '$query')";

mysqli_query ($connection, $data);
header('location:contactus.php');

?>