<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "sap");
if (!$conn) {
    die("Database connection failed");
}

if (isset($_POST['search'])) {

    $rollno   = $_POST['rollno'];
    $password = $_POST['password'];

    $hashed_password = hash("sha256", $password);

    $sql = "SELECT * FROM studentpass WHERE rollno = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $rollno, $hashed_password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) === 1) {

        $_SESSION['rollno'] = $rollno;

        header("Location: student_details.php");
        exit();
    } 
    else {
        echo "<h2 style='color:red'>❌ Invalid Roll No or Password</h2>";
    }
}

if (isset($_POST['cancel'])) {
    header("Location: Student.html");
    exit();
}

mysqli_close($conn);
?>