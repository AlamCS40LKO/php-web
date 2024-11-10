<?php
 $s_name = $_POST['sname'];
 $s_address = $_POST['saddress'];
 $s_class = $_POST['class'];
 $s_phone = $_POST['sphone'];

 require('dbconn.php');

 $sql = ("INSERT INTO `student` (`sname`, `saddress`, `sclass`, `phone`) VALUES ('$s_name', '$s_address', '$s_class', '$s_phone')");

 $result = mysqli_query($conn, $sql) or die('insertion rukh gya');

 if($result){
    header('Location: index.php');
    mysqli_close('$result');
    exit();
 }else{

 }