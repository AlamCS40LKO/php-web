<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>

    <?php
    require('dbconn.php');

    $sql = "select * from student join class where student.sclass = class.cid";

    $result = mysqli_query($conn, $sql) or die("Query Not Running");

    if(mysqli_num_rows($result)>0){
 
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Course</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)){

            ?>
            <tr>
            <!-- $row['sid'] It's a database table column name -->
                <td><?php echo $row['sid'] ?></td>
                <td><?php echo $row['sname'] ?></td>
                <td><?php echo $row['saddress'] ?></td>
                <td><?php echo $row['phone'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row["sid"] ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row["sid"] ?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php }?>
</div>
</div>
</body>
</html>
