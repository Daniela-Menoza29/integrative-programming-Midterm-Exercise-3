<!DOCTYPE html>
<html>
<head>
    <title>GET Method Result</title>
</head>
<body>

<h2>Submitted Information</h2>

<?php

$fname = $_GET["fname"];
$lname = $_GET["lname"];
$course = $_GET["course"];

echo "First Name: " . $fname . "<br>";
echo "Last Name: " . $lname . "<br>";
echo "Course: " . $course . "<br>";

?>

</body>
</html>