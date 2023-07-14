<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Complaint Management System</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/half-slider.css" rel="stylesheet">
    <link href="css/headers.css" rel="stylesheet">

</head>

<body>

    <?php @include 'header_beta.php'; ?>




    <!--
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">COMPLAINT MANAGEMENT </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="./users/">User Login</a>
                    </li>
                    <li>
                        <a href="./users/registration.php">User Registration</a>
                    </li>
                    <li>
                        <a href="./admin/">admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
-->






    <!-- Page Content -->
    <div class="container marketing mt-5">

        <div class="row featurette">
            <div class="col-md-7 my-auto ">
                <h2 class="w-75 featurette-heading fw-normal lh-2 text-success fw-semibold">From Complaints <br><span
                        class="text-success-emphasis"> to Compliments</span></h2>
                <p class="lead w-75">Welcome to a world of doors, not walls. Communication, <br> instead of frustration.
                    Xolvie is a bridge to better experiences for consumers and companies. We empower both parties by
                    providing an
                    effective way to air and resolve disputes</p>
                <hr class="featurette-divider w-75">
                <div class="my-auto">

                    <div class="" style="height: 50px;">
                        <div class=" input-group w-75 h-100">

                            <input class=" form-control border-end-0 border border-success rounded-pill ps-4"
                                type="search" placeholder="Search Anything..." id="example-search-input">

                            <button
                                class="btn btn-outline-secondary bg-primary-subtle border-bottom-0 border rounded-pill px-5"
                                type="button">
                                <i class="fa fa-search"></i>
                            </button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 user-select-none">
                <img src="img\reading_woman.jpg" class="img-fluid" alt="">
            </div>
        </div>

        <hr class="featurette-divider">


   

    
    </div>

    <!-- /.container -->

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





    <!-- Half Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">

            <div class="item active">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('/img/c2.jpg');"></div>
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('/img/c10.jpg');"></div>
                <div class="carousel-caption">

                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>



    <?php @include 'slider.php'; ?>
    <?php @include 'footer.php'; ?>


</body>

</html>