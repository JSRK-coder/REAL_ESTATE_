<?php
 include 'connect.php';   
$link = mysqli_connect ('localhost', 'root','realestate') or die ('Unable to connect the server. ');
$userid = $user_id + 1; 
$username = $_POST["username"]; 
$useraddress = $_POST["adress"];
$useremail = $_POST["email"];
$user_phonenumber = $_POST["phone_number"]
$password = $_POST["password"];
//  $cpassword = $_POST["cpassword"];
$insert = "INSERT INTO new_users (user_id,user_name,user_address,user_email,user_phone_number,
password ) VALUES
('userid','username','useraddress','useremail','user_phonenumber','password')";

$results = mysqli_query($link,$insert) or die(mysqli_error());

echo "Data inserted successfully!";
?>




