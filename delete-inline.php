<?php

$stu_id = $_GET['id'];

require('dbconn.php');

$sql = "DELETE FROM STUDENT WHERE sid = '{$stu_id}'";

$result = mysqli_query($conn, $sql) or die("something go wrong");

header('Location: http://localhost/php%20projects/Yahoo%20baba%20CRUD/index.php');

mysqli_close($conn);

?>