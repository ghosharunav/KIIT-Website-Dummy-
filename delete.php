<?php
$conn = mysqli_connect("localhost", "root", "", "sap");

if (!$conn) {
    die("Database connection failed");
}

$result = mysqli_query($conn, "SELECT * FROM student");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eef2f7;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        table {
            width: 95%;
            margin: auto;
            border-collapse: collapse;
            background: #ffffff;
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background: #058132;
            color: white;
            text-transform: uppercase;
            font-size: 14px;
        }

        tr:nth-child(even) {
            background: #f7f9fc;
        }

        tr:hover {
            background: #eef5ff;
        }

        /* Delete Button Styling */
        .delete-btn {
            color: white;
            background: #e74c3c;
            padding: 6px 14px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .delete-btn:hover {
            background: #c0392b;
            box-shadow: 0 3px 8px rgba(0,0,0,0.3);
        }
    </style>
</head>

<body>

<h2>Student List</h2>

<table>
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
        <a class="delete-btn"
           href="deletestd.php?rollno=<?php echo $row['rollno']; ?>"
           onclick="return confirm('Are you sure you want to delete this student?');">
           Delete
        </a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>
