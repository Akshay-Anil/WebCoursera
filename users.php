<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="css/users.css">
</head>
<body>
    
    <?php

        $server="localhost";
        $user="root";
        $passw="Dhannu@2000";
        $db="webcoursera";

        $conn=mysqli_connect($server,$user,$passw,$db);

        if(!$conn){
             die('Connect Error('.mysqli_connect_errno().')' ); 
        }


    ?>
    <div class="box">
        <h1>AJAX</h1>
        <?php
            $result1=mysqli_query($conn,"SELECT fname,email From users
            WHERE users.id IN (SELECT UserId FROM courseregistration WHERE CourseID='1004') ");
        ?>
        <?php
        if (mysqli_num_rows($result1) > 0) {
        ?>
        <table class='table'>
        <tr>
        <th>Name</th>
        <th>email id</th>
        </tr>
        <?php
        $i=0;
        while($row = mysqli_fetch_array($result1)) {
        ?>
        <tr>
        <td><?php echo $row["fname"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        </tr>
        <?php
        $i++;
        }
        ?>
        </table>
        <?php
        }
        else{
        echo "No result found";
        }
        ?>
   

     
<h1>HTML</h1>
    <?php
        $result2=mysqli_query($conn,"SELECT fname,email From users
         WHERE users.id IN (SELECT UserId FROM courseregistration WHERE CourseID='1001') ");
    ?>
    <?php
    if (mysqli_num_rows($result2) > 0) {
    ?>
    <table class='table'>
    <tr>
    <th>Name</th>
    <th>email id</th>
    </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($result2)) {
    ?>
    <tr>
    <td><?php echo $row["fname"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    </tr>
    <?php
    $i++;
    }
    ?>
    </table>
    <?php
    }
    else{
    echo "No result found";
    }
    ?>

    <h1>CSS</h1>
    <?php
        $result3=mysqli_query($conn,"SELECT fname,email From users
         WHERE users.id IN (SELECT userId FROM courseregistration WHERE CourseID='1002') ");
    ?>
    <?php
    if (mysqli_num_rows($result3) > 0) {
    ?>
    <table class='table'>
    <tr>
    <th>Name</th>
    <th>email id</th>
    </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($result3)) {
    ?>
    <tr>
    <td><?php echo $row["fname"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    </tr>
    <?php
    $i++;
    }
    ?>
    </table>
    <?php
    }
    else{
    echo "No result found";
    }
    ?>

<h1>JAVA</h1>
    <?php
        $result4=mysqli_query($conn,"SELECT fname,email From users
         WHERE users.id IN (SELECT userId FROM courseregistration WHERE CourseID='1007') ");
    ?>
    <?php
    if (mysqli_num_rows($result4) > 0) {
    ?>
    <table class='table'>
    <tr>
    <th>Name</th>
    <th>email id</th>
    </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($result4)) {
    ?>
    <tr>
    <td><?php echo $row["fname"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    </tr>
    <?php
    $i++;
    }
    ?>
    </table>
    <?php
    }
    else{
    echo "No result found";
    }
    ?>

<h1>JAVASCRIPT</h1>
    <?php
        $result5=mysqli_query($conn,"SELECT fname,email From users
         WHERE users.id IN (SELECT userId FROM courseregistration WHERE CourseID='1003') ");
    ?>
    <?php
    if (mysqli_num_rows($result5) > 0) {
    ?>
    <table class='table'>
    <tr>
    <th>Name</th>
    <th>email id</th>
    </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($result5)) {
    ?>
    <tr>
    <td><?php echo $row["fname"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    </tr>
    <?php
    $i++;
    }
    ?>
    </table>
    <?php
    }
    else{
    echo "No result found";
    }
    ?>

<h1>PYTHON</h1>
    <?php
        $result6=mysqli_query($conn,"SELECT fname,email From users
         WHERE users.id IN (SELECT userId FROM courseregistration WHERE CourseID='1006') ");
    ?>
    <?php
    if (mysqli_num_rows($result6) > 0) {
    ?>
    <table class='table'>
    <tr>
    <th>Name</th>
    <th>email id</th>
    </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($result6)) {
    ?>
    <tr>
    <td><?php echo $row["fname"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    </tr>
    <?php
    $i++;
    }
    ?>
    </table>
    <?php
    }
    else{
    echo "No result found";
    }
    ?>

<h1>PHP</h1>
    <?php
        $result7=mysqli_query($conn,"SELECT fname,email From users
         WHERE users.id IN (SELECT userId FROM courseregistration WHERE CourseID='1005') ");
    ?>
    <?php
    if (mysqli_num_rows($result7) > 0) {
    ?>
    <table class='table'>
    <tr>
    <th>Name</th>
    <th>email id</th>
    </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($result7)) {
    ?>
    <tr>
    <td><?php echo $row["fname"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    </tr>
    <?php
    $i++;
    }
    ?>
    </table>
    <?php
    }
    else{
    echo "No result found";
    }
    ?>
 </div>
</body>
</html>