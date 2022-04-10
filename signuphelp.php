<?php
$connection = mysqli_connect('localhost', 'root');

if ($connection) {
    echo "Connection is Establish!";
   
}
else {
    echo "ERROR Connection Failed!";
}

mysqli_select_db($connection, 'authentication');

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$phonenumber=$_POST['phone'];


$data = "INSERT INTO credentials (FNAME, LNAME,PhoneNumber, EMAIL) VALUES ('$firstname', '$lastname','$phonenumber', '$email')";

$insert=mysqli_query ($connection, $data);
if($insert){
    echo "<script language='javascript'>";
echo "if(!alert('We Have Taken Your infromation. Our team will reach you as soon as possible ')){
    
}";

echo "</script>";


    
}
else
echo '<script>alert("Signup Not Successfull")</script>';


?>