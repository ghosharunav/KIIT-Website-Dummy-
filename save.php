<?php
$conn = mysqli_connect("localhost","root","","sap");
if(!$conn){ die("DB Error"); }

if(isset($_POST['submit'])){

$rollno = $_POST['rollno'];
$name = $_POST['name'];
$dept = $_POST['dept'];
$semester = $_POST['semester'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$cgpa = $_POST['cgpa'];

$sql = "INSERT INTO student 
        (rollno, name, dept, semester, address, mobile, email, cgpa)
        VALUES
        ('$rollno','$name','$dept','$semester',
         '$address','$mobile','$email','$cgpa')";

if(mysqli_query($conn,$sql)){
    echo "<script>
        alert('Student Saved Successfully');
        window.location.href='change.php';
    </script>";
}else{
    if(mysqli_errno($conn) == 1062){
        echo "<script>
            alert('Roll Number already exists. Please use another roll number.');
            window.history.back();
        </script>";
    } else {
        echo "Database Error: " . mysqli_error($conn);
    }
}
}
mysqli_close($conn);
?>
