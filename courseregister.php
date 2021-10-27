<?php
session_start();
$conn=new mysqli('localhost','root','Dhannu@2000','webcoursera');
if($conn->connect_error){
    die('Error:'.$conn->connect_errno . ' '.$conn->connect_errno);
}

$courseId = mysqli_real_escape_string($conn,$_POST['courseId']);
$userId = $_SESSION['login'];
   
   
    $query="SELECT * FROM courseregistration WHERE courseId='$courseId' AND userId= '$userId'";
    
   
    $result=mysqli_query($conn,$query) or die(mysqli_error());    
    $num_row=mysqli_num_rows($result);
    $row=mysqli_fetch_array($result);
   
    if($num_row<1){
        $insert_row=$conn->query("INSERT INTO courseregistration (userId,courseId) values ('$userId','$courseId')");
        if($insert_row){
            echo 'true';
        }
    }
    else{
        echo 'true';
    }

?>
