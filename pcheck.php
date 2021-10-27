<?php
session_start();
$conn=new mysqli('localhost','root','Dhannu@2000','webcoursera');
if($conn->connect_error){
    die('Error:'.$conn->connect_errno . ' '.$conn->connect_errno);
}

$email=mysqli_real_escape_string($conn,$_POST['email']);
$password=mysqli_real_escape_string($conn,$_POST['password']);

if(strlen($email)<=4){
    echo 'false';
}

else{
      
   
    $query="SELECT * FROM users WHERE email='$email' ";
    
   
    $result=mysqli_query($conn,$query) or die(mysqli_error());    
    $num_row=mysqli_num_rows($result);
    $row=mysqli_fetch_array($result);
   
    if($num_row>=1){
        
        if(password_verify($password,$row['password'])){
            $_SESSION['login']=$row['id'];
            $_SESSION['fname']=$row['fname'];
            $_SESSION['lname']=$row['lname'];
           
            echo 'true';
        }
        else{
            'false';
        }
    }
    else{
        echo 'false';
    }

}

?>