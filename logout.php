<?php
session_start();
session_destroy();
header("Location: Student.html");
exit();
?>
