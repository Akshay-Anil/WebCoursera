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
                        <h2 class="intro-text text-center">Our
                            <strong>Courses</strong>
                        </h2>
                        <hr>
                </div>
                
                <div class="col-md-6 text-center">
                    <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTh3C6aNps-vOFpiwmFzJWDSXwQSto35pN3VA&usqp=CAU" alt="">
                    <h3>HTML 
                    </h3>
                    <button type="submit"  id="register" class="btn btn-default" onclick="addcourse(1001,'html')" >Register</button>         
                </div>

                <div class="col-md-6 text-center">
                    <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkx7XTQ7MTF9U8Hva4Q-9x_z4WRrthi4t91w&usqp=CAU" alt="" >
                    <h3>CSS                     
                    </h3>
                    <button type="submit"  id="register" class="btn btn-default" onclick="addcourse(1002,'css')" >Register</button>     
                </div>
                
                <div class="col-md-6 text-center">
                    <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNE0HLQ1I8Vg1GN-kHcZDV7bbJpVW3TlZa8A&usqp=CAU" alt="">
                    <h3>JavaScript
                    </h3>
                    <button type="submit"  id="register" class="btn btn-default" onclick="addcourse(1003,'javascript')">Register</button> 
                </div>
               
                <div class="col-md-6 text-center">
                    <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNcP46tK5sXX5h-sd94P20SZ0yHJybQzDgcg&usqp=CAU" alt="">
                    <h3>Ajax
                    </h3>
                    <button type="submit"  id="register" class="btn btn-default" onclick="addcourse(1004,'ajax')">Register</button> 
                </div>
                <div class="col-md-6 text-center">
                    <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlNsdRlCQXs6lmAdCbwJtKinEPL29rFqmHzQ&usqp=CAU" alt="">
                    <h3>PHP
                    </h3>
                    <button type="submit"  id="register" class="btn btn-default" onclick="addcourse(1005,'php')">Register</button> 
                </div>
                <div class="col-md-6 text-center">
                    <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHozHN1cRwOjZp-rkren2uaSa0XO-Ia2Q26w&usqp=CAU" alt="">
                    <h3>Python
                    </h3>
                    <button type="submit"  id="register" class="btn btn-default" onclick="addcourse(1006,'python')">Register</button> 
                </div>
                <div class="col-md-6 text-center">
                    <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5tDc_k7lXn5GGuWYoxbtHMfxdvBDYfSrw7w&usqp=CAU" alt="">
                    <h3>Java
                    </h3>
                    <button type="submit"  id="register" class="btn btn-default" onclick="addcourse(1007,'java')">Register</button> 
                </div>
                
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
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


    <script>
    function addcourse(cid,course){
            $.ajax({
                        type:"POST",
                        url:"courseregister.php",
                        data:"courseId="+cid,
                        success:function(html){
                          
                            if(html=='true'){
                            // window.location.href='courses/'+course+'.html';
                            window.location.href='registeredcourses.php'
                            }
                            else if(html=='false'){
                                alert("Already registered");
                            }
                        },
                        beforeSend:function(){
                            
                        }
                    });
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