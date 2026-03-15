<?php
$conn = mysqli_connect("localhost", "root", "", "sap");

if (!$conn) {
    die("Database connection failed");
}

if (isset($_GET['rollno'])) {
    $rollno = intval($_GET['rollno']);

    $query = "DELETE FROM student WHERE rollno = $rollno";
    mysqli_query($conn, $query);
}

header("Location: delete.php");
exit();
?>
