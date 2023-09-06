<?php
    $db_hostname="b5jxywlglkhgslunehsf-mysql.services.clever-cloud.com";
    $db_username="uk1a5durfoai9luq";
    $db_password="TCy44ItBxQD1Nt9JB5VO";
    $db_name="b5jxywlglkhgslunehsf";

    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn)
    {
        echo"Connection Failed:",mysqli_connect_error();
        exit;
    }

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $sql="Insert into contact(Name,Emaail,Phone,Subject,Messagge) values ('$name','$email','$phone','$subject','$message')";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "error: ",mysqli_error($conn);
        exit;
    }
    echo "We will contact you soon";
    mysqli_close($conn);0
 
?>
