<?php
session_start();
$conn=new mysqli('localhost','root','Dhannu@2000','webcoursera');
if($conn->connect_error){
    die('Error:'.$conn->connect_errno . ' '.$conn->connect_errno);
}
$fname=mysqli_real_escape_string($conn,$_POST['fname']);
$lname=mysqli_real_escape_string($conn,$_POST['lname']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$password=mysqli_real_escape_string($conn,$_POST['password']);

if(strlen($fname)<2){
    echo 'fname';
}

else if(strlen($lname)<2){
    echo 'lname';
}

else if(strlen($password)<=4){
    echo 'pshort';
}

else if(strlen($email)<=4){
    echo 'eshort';
}
else if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){
    echo 'eformat';
}
else{
   
    $spassword=password_hash($password, PASSWORD_BCRYPT , array('cost'=>12));
    $query="SELECT * FROM users WHERE email='$email'";
    // if($conn->query($query))
   
    $result=mysqli_query($conn,$query) or die(mysqli_error());    
    $num_row=mysqli_num_rows($result);
    $row=mysqli_fetch_array($result);
   
    if($num_row<1){
        $insert_row=$conn->query("INSERT INTO users (fname,lname,email,password) values ('$fname','$lname','$email','$spassword')");
        if($insert_row){
            $_SESSION['login']=$conn->insert_id;
            $_SESSION['fname']=$fname;
            $_SESSION['lname']=$lname;
            echo 'true';
        }
    }
    else{
        echo 'false';
    }

}

?>
