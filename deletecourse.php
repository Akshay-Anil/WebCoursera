<?php
session_start();
$conn=new mysqli('localhost','root','Dhannu@2000','webcoursera');
if($conn->connect_error){
    die('Error:'.$conn->connect_errno . ' '.$conn->connect_errno);
}


$courseId = $_POST['courseId'];
   
   
    $query="DELETE FROM courseregistration Where CourseID = $courseId";
    
   
    $result=mysqli_query($conn,$query) or die(mysqli_error());    
    
    echo 'true';
  
?>
