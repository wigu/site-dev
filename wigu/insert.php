<?php
$con=mysqli_connect("localhost","root","","caninelife");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$first_name = mysqli_real_escape_string($con, $_POST['first_name']);
$last_name = mysqli_real_escape_string($con, $_POST['last_name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$dob_day = mysqli_real_escape_string($con, $_POST['dob_day']);
$dob_month = mysqli_real_escape_string($con, $_POST['dob_month']);
$dob_year = mysqli_real_escape_string($con, $_POST['dob_year']);
$androidphone = mysqli_real_escape_string($con, $_POST['androidphone']);
$iosphone = mysqli_real_escape_string($con, $_POST['iosphone']);
$androidtablet = mysqli_real_escape_string($con, $_POST['androidtablet']);
$iostablet = mysqli_real_escape_string($con, $_POST['iostablet']);
$timespentdaily = mysqli_real_escape_string($con, $_POST['timespentdaily']);
$newsletter = mysqli_real_escape_string($con, $_POST['newsletter']);




$sql="INSERT INTO betatesters (first_name, last_name, email,dob_day,dob_month,dob_year,androidphone,iosphone,androidtablet,iostablet,timespentdaily,newsletter)
VALUES ('$first_name', '$last_name', '$email', '$dob_day','$dob_month','$dob_year','$androidphone','$iosphone','$androidtablet','$iostablet','$timespentdaily','$newsletter')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
?>