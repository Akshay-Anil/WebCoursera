<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Webcoursera  </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <link href="css/footer.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

 

</head>

<body>

    <div class="brand">Web Coursera </div>
    <div class="address-bar">Calicut Mukkam Road, Kattangal, Kerala 673601</div>
    <?php
        if(isset($_GET['logout'])){
            if($_GET['logout']==true){
                ?>
                <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert"  aria-label="close">&times;</a>
                <strong>You have been logged out of the system</strong>
                </div>
                <?php
            }
        }
    
    ?>



    <?php require_once 'nav.php';?>
   
   <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Web Coursera</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>NIT Calicut</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Start your career
                        <strong>as a web developer</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/intro-pic.jpg" alt="">
                    <hr class="visible-xs">
                    <p>Web developers work independently as freelancers or with company teams to create websites. Depending on the job, these professionals may focus on front-end development, which involves designing sites and producing content, or back-end development, which involves writing code to make website features work. Web developers may also become webmasters for a site, providing maintenance, updates, and troubleshooting when needed.</p>
                    <p>Entry-level jobs often require only a small amount of formal education and training. As the internet continues to expand, so does the demand for talented web developers, making this career an attractive option. The U.S. Bureau of Labor Statistics (BLS) projects that web development jobs will grow by 13% between 2018 and 2028 — much faster than the national average growth for all occupations.</p>
                 
                </div>
            </div>
        </div>
  
    </div>
    <!-- /.container -->

    

   <!-- FOOTER -->
   <footer class="w-100 py-4 flex-shrink-0">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="h1 text-white">Webcoursera</h5>
                    <p class="small text-muted">Calicut Mukkam Road, Kattangal, Kerala 673601</p>
                    <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. <a class="text-primary" href="#">webcoursera.com</a></p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-3">Quick links</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Categories</a></li>
                        <li><a href="#">Register</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-3">Quick links</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Help and support</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
