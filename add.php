<?php include 'confg.php'; ?>
<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class" type="text">
                <option type="text" value="text">Select Class</option>
                <?php
                $sql= "SELECT * from s_class";
                $abc = mysqli_query($conn, $sql);
                $number = mysqli_num_rows($abc);
                ?>
                <?php
            while($row = mysqli_fetch_assoc($abc)){
            ?>
                <option> <?php echo  $row['cid'];?>
                <?php echo  $row['cclass'];?></option>
            <?php
            }
            ?>
            </select>
            
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" name="save_btn" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
