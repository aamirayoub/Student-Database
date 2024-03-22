<?php
include 'header.php';
$ser="127.0.0.1";
$user="root";
$pass="";
$db="info";
$conn= mysqli_connect("$ser","$user","$pass","$db");
$sql= "SELECT * from student";
$abc = mysqli_query($conn, $sql);
$number = mysqli_num_rows($abc);

?>
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_assoc($abc)){
            ?>
            <tr>
            <td><?php echo  $row['id'];?></td>
            <td><?php echo  $row['name'];?></td>
            <td><?php echo  $row['address'];?></td>
            <td><?php echo  $row['class'];?></td>
            <td><?php echo  $row['phone'];?></td>
            <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td> 
            <?php
            }
            ?>
                
                
            </tr>
           
           
           
            
        </tbody>
    </table>
</div>
</div>
</body>
</html>
