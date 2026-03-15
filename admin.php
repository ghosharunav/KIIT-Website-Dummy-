


<?php

$conn = mysqli_connect("localhost", "root", "", "sap");

if (!$conn) {
    die("Database connection failed");
}

$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];

$hashed_password = hash("sha256", $password);

$sql = "SELECT * FROM admin WHERE username=? AND password=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ss", $username, $hashed_password);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) === 1) {
    
    $_SESSION['username'] = $username; 
    echo "<script>
        alert('✅ Login Successful');
        window.location.href='change.php'; 
    </script>";
} else {
    
    echo "<h2 style='color:red'>❌ Invalid Username or Password</h2>";
}

mysqli_close($conn);
?>