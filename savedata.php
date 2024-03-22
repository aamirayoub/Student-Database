<?php
include ('confg.php');
if(isset($_POST['save_btn'])){    
    $name = mysqli_real_escape_string($conn,$_POST['sname']);
    $address = mysqli_real_escape_string($conn,$_POST['saddress']);
    $class = mysqli_real_escape_string($conn,$_POST['class']);
    $phone = mysqli_real_escape_string($conn,$_POST['sphone']);
    
    if (empty($name)) {
        $error=  "name field is empty";
    }
    elseif (empty($address)) {
        $error= "Address field is empty";
    }
    elseif (empty($class)) {
        $error= "fill the class field";
    }
    elseif (empty($phone)) 
    {
        $error= "Enter your phone Number";
     }
     elseif (strlen($phone) < 3 or strlen($phone) > 11)
     {
        $error= "must be greater then 3 or less then 11" ;
     }
     elseif (strlen($name) < 5 or strlen($name) > 15)
     {
        $error= "must be greater then 5 or less then 15" ;
     }
     elseif (strlen($address) < 10 or strlen($address) > 20)
     {
        $error= "must be greater then 10 or less then 20" ;
     }
     
     else
      {        
    $sql="INSERT INTO student (name, address, class, phone) VALUES ('$name','$address','$class','$phone')";
    $abc = mysqli_query($conn, $sql) or die("data do not saved");
    $error= "Data saved";
    //echo $error;
    header("location: index.php");
    
     }
     
}

echo $error;
//mysqli_close($conn);
//$loc="index.php";
?>

