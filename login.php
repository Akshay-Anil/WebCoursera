<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

 
        <script src="js/jquery.js"></script>
        <!-- Script -->
        <script>
            $(document).ready(function(){
              
                $("#login").click(function(){
                    var email=$("#email").val();
                    var password=$("#password").val();
                    
                    $.ajax({
                        type:"POST",
                        url:"pcheck.php",
                        data:"email="+email+"&password="+password,
                        success:function(html){
                            

                            if(html=='true'){
                                $("#add_err2").html('<div class="alert alert-success">\
                                                     <strong>Login </strong>success\
                                                     </div>');
                                    window.location.href='courses.php';
                               
                            }
                            else if(html=='false'){
                                $("#add_err2").html('<div class="alert alert-danger">\
                                                     <strong>Login</strong>Failed\
                                                     </div>');
                                                     
                            }
                                                                          

                        },
                        beforeSend:function(){
                               $("#add_err2").html="Loading..."; 
                        }
                    
                    });
                return false;    

                });

            });
        </script>

</head>

<body>

    <div class="brand">Webcoursera</div>
    <div class="address-bar">Calicut Mukkam Road, Kattangal, Kerala 673601</div>

    <?php require_once 'nav.php' ;?>

    <div class="container" >



        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                <div class="alert alert-danger">
                   You have to <strong>Login </strong> to see the available courses.
                </div>
                    <hr>
                    <h2 class="intro-text text-center">Login
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <div id="add_err2"></div>
                   
                    <form role="form">
                        <div class="row">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" id="email" name="email" maxlength=25 class="form-control" >
                            </div>
                            
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" id="password" name="password" maxlength=25 class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                
                                <button type="submit"  id="login" class="btn btn-default">Login</button>
                            </div>
                        </div>
                    </form>
                    <button type="button" class="btn btn-default" onclick="window.location.href='register.php';">Not a student?click here to register.</button> 
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


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
