<?php 
    $con=mysqli_connect('localhost','root','');

    if(!$con){
        echo 'Not connected';
    }
    if(!mysqli_select_db($con, 'test_task_emails')){
        echo 'Not connected to database';
    }
    $email=$_POST['subscribe_email'];

    $sql="INSERT INTO emails (email) VALUES ('$email')";

    if(!mysqli_query($con,$sql)){
        echo 'Not inserted';
    }

?>