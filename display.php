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
            background: #f4f6f9;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            background: #ffffff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
        }

        th {
            background: #2f80ed;
            color: white;
            text-transform: uppercase;
            font-size: 14px;
        }

        tr:nth-child(even) {
            background: #f2f2f2;
        }

        tr:hover {
            background: #eaf1ff;
            transition: 0.3s;
        }

        td {
            color: #333;
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
    </tr>
    <?php } ?>

</table>

</body>
</html>
