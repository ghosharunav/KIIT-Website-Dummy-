<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>

    <style>
        body {
            background-color: #f0f0f0;
        }

        .box {
            width: 300px;
            padding: 30px;
            margin-top: 150px;
            background-color: lightblue;
            border: 2px solid black;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            font-size: 16px;
            text-decoration: none;
            color: black;
            background-color: white;
            border: 1px solid black;
            text-align: center;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #d9d9d9;
        }
    </style>
</head>

<body>

<center>
    <div class="box">

        <a href="Studentinfo.php" target="rightFrame" class="btn">ADD</a>
        <a href="viewstdtable.php" target="rightFrame" class="btn">UPDATE</a>
        <a href="delete.php" target="rightFrame" class="btn">DELETE</a>
        <a href="display.php" target="rightFrame" class="btn">DISPLAY</a>
        

    </div>
</center>

</body>
</html>
