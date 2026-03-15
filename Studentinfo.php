<!DOCTYPE html>
<html>
<head>
    <title>Student info</title>
    <style>
        body {
            display:flex;
            align-items:center;
            justify-content:center;
            height:100vh;
            background:#f2f2f2;
            font-family:Arial;
        }
        .container {
            background:#c8f1d1;
            padding:25px 40px;
            border:2px solid #2f7d32;
            border-radius:10px;
            text-align:center;
        }
        td { padding:8px; }
    </style>
</head>

<body>

<div class="container">
<h2>Student Information</h2>

<form action="save.php" method="POST" target="rightFrame">

<table>
<tr>
    <td>RollNo</td>
    <td><input type="text" name="rollno" required></td>
</tr>
<tr>
    <td>Name</td>
    <td><input type="text" name="name" required></td>
</tr>

<tr>
<td>Department</td>
<td>
<input type="radio" name="dept" value="CSE" required> CSE
<input type="radio" name="dept" value="IT"> IT
<input type="radio" name="dept" value="CSSE"> CSSE
<input type="radio" name="dept" value="CSCE"> CSCE
</td>
</tr>

<tr>
<td>Semester</td>
<td>
<select name="semester" required>
<option value="">Choose</option>
<option>1st</option><option>2nd</option>
<option>3rd</option><option>4th</option>
<option>5th</option><option>6th</option>
<option>7th</option><option>8th</option>
</select>
</td>
</tr>

<tr><td>Address</td><td><input name="address"></td></tr>
<tr><td>Mobile</td><td><input name="mobile"></td></tr>
<tr><td>Email</td><td><input type="email" name="email"></td></tr>
<tr><td>CGPA</td><td><input name="cgpa"></td></tr>
</table>

<br>
<button type="submit" name="submit">Save</button>
<button type="reset" name="reset">Cancel</button>

</form>
</div>

</body>
</html>
