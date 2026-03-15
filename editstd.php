<?php
$conn = mysqli_connect("localhost", "root", "", "sap");

$rollno = $_GET['rollno'];
$result = mysqli_query($conn, "SELECT * FROM student WHERE rollno=$rollno");
$data = mysqli_fetch_assoc($result);
?>

<h2>Update Student</h2>

<form action="update.php" method="POST">
<!-- Roll No:
<input type="text" name="rollno" value="<?= $data['rollno'] ?>"><br><br> -->

Name:
<input type="text" name="name" value="<?= $data['name'] ?>"><br><br>

Branch:
<input type="radio" name="dept" value="CSE" <?= ($data['dept']=="CSE")?"checked":"" ?>>CSE
<input type="radio" name="dept" value="IT" <?= ($data['dept']=="IT")?"checked":"" ?>>IT
<input type="radio" name="dept" value="CSSE" <?= ($data['dept']=="CSSE")?"checked":"" ?>>CSSE
<input type="radio" name="dept" value="CSCE" <?= ($data['dept']=="CSCE")?"checked":"" ?>>CSCE<br><br>

Semester:
<select name="semester">
<option <?= ($data['semester']=="1st")?"selected":"" ?>>1st</option>
<option <?= ($data['semester']=="2nd")?"selected":"" ?>>2nd</option>
<option <?= ($data['semester']=="3rd")?"selected":"" ?>>3rd</option>
<option <?= ($data['semester']=="4th")?"selected":"" ?>>4th</option>
<option <?= ($data['semester']=="5th")?"selected":"" ?>>5th</option>
<option <?= ($data['semester']=="6th")?"selected":"" ?>>6th</option>
<option <?= ($data['semester']=="7th")?"selected":"" ?>>7th</option>
<option <?= ($data['semester']=="8th")?"selected":"" ?>>8th</option>
</select><br><br>

Address:
<textarea name="address"><?= $data['address'] ?></textarea><br><br>

Mobile:
<input type="text" name="mobile" value="<?= $data['mobile'] ?>"><br><br>

Email:
<input type="email" name="email" value="<?= $data['email'] ?>"><br><br>

CGPA:
<input type="cgpa" name="cgpa" value="<?= $data['cgpa'] ?>"><br><br>


<button type="submit">UPDATE</button>
</form>