<?php
$conn = mysqli_connect("localhost", "root", "", "sap");

if (!$conn) {
    die("Connection failed");
}

$rollno   = $_POST['rollno'];
$name     = $_POST['name'];
$dept     = $_POST['dept'];
$semester = $_POST['semester'];
$address  = $_POST['address'];
$mobile   = $_POST['mobile'];
$email    = $_POST['email'];
$cgpa     = $_POST['cgpa'];

$sql = "UPDATE student SET
        name='$name',
        dept='$dept',
        semester='$semester',
        address='$address',
        mobile='$mobile',
        email='$email',
        cgpa='$cgpa'
        WHERE rollno='$rollno'";

if (mysqli_query($conn, $sql)) {
    header("Location: viewstdtable.php");
} else {
    echo "Update failed: " . mysqli_error($conn);
}
?>
