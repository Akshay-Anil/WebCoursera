<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Script -->
        <script>
            $(document).ready(function(){
              
                $("#register").click(function(){
                    var fname=$("#fname").val();
                    var lname=$("#lname").val();
                    var email=$("#email").val();
                    var password=$("#password").val();
                    
                    $.ajax({
                        type:"POST",
                        url:"adduser.php",
                        data:"fname="+fname+"&lname="+lname+"&email="+email+"&password="+password,
                        success:function(html){
                            alert(html);

                            if(html=='true'){
                                $("#add_err2").html('<div class="alert alert-success">\
                                                     <strong>Account</strong>processed\
                                                     </div>');
                                    window.location.href='index.php';

                                
                            }
                            else if(html=='false'){
                                $("#add_err2").html('<div class="alert alert-danger">\
                                                     <strong>Email address</strong>already exist\
                                                     </div>');
                                                     
                            }

                            else if(html=='fname'){
                                $("#add_err2").html('<div class="alert alert-danger">\
                                                     <strong>First name</strong> is required\
                                                     </div>');
                                                     
                            }
                            else if(html=='lname'){
                                $("#add_err2").html('<div class="alert alert-danger">\
                                                     <strong>Last name</strong> is required\
                                                     </div>');
                                                     
                            }
                            else if(html=='eshort'){
                                $("#add_err2").html('<div class="alert alert-danger">\
                                                     <strong>Email address</strong> is required\
                                                     </div>');
                                                     
                            }
                            else if(html=='eformat'){
                                $("#add_err2").html('<div class="alert alert-danger">\
                                                     <strong>Email address</strong> format is not valid\
                                                     </div>');
                                                     
                            }
                            else if(html=='pshort'){
                                $("#add_err2").html('<div class="alert alert-danger">\
                                                     <strong>Password</strong> must be atleast 4 characters\
                                                     </div>');
                                                     
                            }
                            else{
                                $("#add_err2").html('<div class="alert alert-danger">\
                                                     <strong>ERROR</strong> processing request.Please try again later.\
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

    <div class="brand">webcoursera</div>
    <div class="address-bar">Calicut Mukkam Road, Kattangal, Kerala 673601</div>

    <?php require_once 'nav.php' ;?>

    <div class="container" >



        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Register
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <div id="add_err2"></div>
                   
                    <form role="form">
                        <div class="row">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" id="fname" name="fname" maxlength=25 class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" id="lname" name="lname" maxlength=25 class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" maxlength=25 class="form-control">
                            </div>
                        
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" id="password" name="password" maxlength=25 class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                
                                <button type="submit"  id="register" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
    </footer>



    <script src="js/bootstrap.min.js"></script>

</body>

</html>
