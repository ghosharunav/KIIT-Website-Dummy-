<?php
session_start();

if (!isset($_SESSION['rollno'])) {
    header("Location: student.php"); 
    exit();
}

$conn = mysqli_connect("localhost", "root", "", "sap");
if (!$conn) {
    die("Database connection failed");
}

$rollno = $_SESSION['rollno'];

$sql = "SELECT * FROM student WHERE rollno = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $rollno);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>

<h2 style="color:green;">Student Details</h2>

<table border="1" cellpadding="10">
    <tr><th>Roll No</th><td><?php echo $row['rollno']; ?></td></tr>
    <tr><th>Name</th><td><?php echo $row['name']; ?></td></tr>
    <tr><th>Branch</th><td><?php echo $row['dept']; ?></td></tr>
    <tr><th>Semester</th><td><?php echo $row['semester']; ?></td></tr>
    <tr><th>Address</th><td><?php echo $row['address']; ?></td></tr>
    <tr><th>Mobile</th><td><?php echo $row['mobile']; ?></td></tr>
    <tr><th>Email</th><td><?php echo $row['email']; ?></td></tr>
    <tr><th>CGPA</th><td><?php echo $row['cgpa']; ?></td></tr>
</table>

<br>
<form method="post" action="logout.php">
    <button type="submit">Logout</button>
</form>

</body>
</html>

<?php mysqli_close($conn); ?>
