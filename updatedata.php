<?php

 $stu_id = $_POST['sid'];
 $s_name = $_POST['sname'];
 $s_address = $_POST['saddress'];
 $s_class = $_POST['sclass'];
 $s_phone = $_POST['sphone'];


 require('dbconn.php');

 $sql = "update student set sname = '{$s_name}', saddress = '{$s_address}',sclass = '{$s_class}',phone = '{$s_phone}' where sid = '{$stu_id}'";

 $result = mysqli_query($conn, $sql) or die('insertion rukh gya');

 if($result){
    header('Location: index.php');
    mysqli_close('$result');
    exit();
   // echo "Student Deltail Update";
 }else{
   echo "Student Deltail not Update";
 }
 ?>