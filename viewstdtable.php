<?php
$conn = mysqli_connect("localhost", "root", "", "sap");

if (!$conn) {
    die("Database connection failed");
}

$result = mysqli_query($conn, "SELECT * FROM student");
?>

<h2>Student List</h2>

<table border="1" cellpadding="10">
<tr>
    <th>Roll No</th>
    <th>Name</th>
    <th>Branch</th>
    <th>Semester</th>
 <th>Address</th>
    <th>Mobile</th>
    <th>Email</th>
    <th>CGPA</th>
    <th>Action</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row['rollno']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['dept']; ?></td>
    <td><?php echo $row['semester']; ?></td>
 <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['mobile']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['cgpa']; ?></td>
    <td>
        <a href="editstd.php?rollno=<?php echo $row['rollno']; ?>">Edit</a>
    </td>
</tr>
<?php } ?>

</table>