<?php
$servername="localhost";
$username ="root";
$password="";
$dbname ="sms";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name =$_POST['fullname'];
$age =$_POST['age'];
$address= $_POST['address'];
$fathers_name =$_POST['Fathername'];
$father_profession =$_POST['Fatherprofession'];
$fathers_mobile_number =$_POST['Fathermobileno'];
$mothers_name =$_POST['mothername'];
$mothers_profession =$_POST['motherprofession'];
$mothers_mobile_number =$_POST['mothermobileno'];
$phone_number = $_POST['phonenumber'];

$sql = "INSERT INTO students (name, age, address, fathers_name, fathers_profession, fathers_mobile_number,mothers_name,mothers_profession,mothers_mobile_number,phone_number)
VALUES ('$name', '$age', '$address', '$fathers_name', '$father_profession', '$fathers_mobile_number', '$mothers_name', '$mothers_profession','$mothers_mobile_number','$phone_number')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
