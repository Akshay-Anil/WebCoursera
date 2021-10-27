<?php
session_start();
if(isset($_SESSION['login'])){
    $fname=$_SESSION['fname'];
    $lname=$_SESSION['lname'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Courses </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">    

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <script src="js/jquery.js"></script>

    

</head>

<body>

    <div class="brand">Webcoursera</div>
    <div class="address-bar">Calicut Mukkam Road, Kattangal, Kerala 673601</div>

    <!-- Navigation -->
    <?php require_once 'nav.php';?>
    
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <h2 class='text-center' >WELCOME <?php echo $fname.' '.$lname; ?> - 
                    <a href="logout.php" style="font-size:0.5em;">Logout</a></h2>
                        <hr>
                        <h2 class="intro-text text-center">Your
                            <strong>Courses</strong>
                        </h2>
                        <hr>
                </div>
                
                <?php
                
                $conn=new mysqli('localhost','root','Dhannu@2000','webcoursera');
                if($conn->connect_error){
                    die('Error:'.$conn->connect_errno . ' '.$conn->connect_errno);
                }


                $userId = $_SESSION['login'];
                
                
                    $query="SELECT * from courses where CourseID IN (Select CourseID from courseregistration where userId=$userId)";
                    
                
                    $result=mysqli_query($conn,$query) or die(mysqli_error());    
                    $num_row=mysqli_num_rows($result);
                    
                    if($num_row>=1){
                        while($row = mysqli_fetch_array($result)) {
                            ?>

                    <div class="col-md-6 text-center">
                        <img  src="<?php echo $row["CourseImage"]?>" alt="">
                        <h3>
                            <?php
                            echo $row["CourseName"];
                            ?>
                            </h3>
                        <button type="submit"  id="open" class="btn btn-default" onclick="window.location.href='courses/<?php echo $row['CourseName']; ?> '">Open</button> 
                        <button type="submit"  id="complete" class="btn btn-default" onclick="completecourse(<?php echo $row['CourseID'] ?> )" >Completed</button> 
                    </div>
                        <?php
                        
                        }
                    }
                    else{
                        echo 'You have not registered for any courses.';
                    }

                ?>


                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; webcoursera.com</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script>
        function completecourse(cid){
            $.ajax({
                type:"POST",
                url:"deletecourse.php",
                data:"courseId="+cid, 
                success:function(html){
                  
                    if(html=='true'){
                        alert("course completed successfully");
                        location.reload();         
                    }
                    else if(html=='false'){
                        alert("failed to complete");
                    }

                },
                beforeSend:function(){
                        $("#add_err2").html="Loading..."; 
                }

            })
        }
    </script>
   

</body>

</html>
<?php
}
else{
    header("location:login.php");
}
?>