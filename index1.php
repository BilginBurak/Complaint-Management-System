<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
   <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
   <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/buttons/">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/headers.css">
   <link rel="stylesheet" href="css/carousel.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">



   <style>
      



      .bd-placeholder-img {
         font-size: 1.125rem;
         text-anchor: middle;
         -webkit-user-select: none;
         -moz-user-select: none;
         user-select: none;
      }

      @media (min-width: 768px) {
         .bd-placeholder-img-lg {
            font-size: 3.5rem;
         }
      }

      .b-example-divider {
         width: 100%;
         height: 3rem;
         background-color: rgba(0, 0, 0, .1);
         border: solid rgba(0, 0, 0, .15);
         border-width: 1px 0;
         box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
         flex-shrink: 0;
         width: 1.5rem;
         height: 100vh;
      }

      .bi {
         vertical-align: -.125em;
         fill: currentColor;
      }

      .nav-scroller {
         position: relative;
         z-index: 2;
         height: 2.75rem;
         overflow-y: hidden;
      }

      .nav-scroller .nav {
         display: flex;
         flex-wrap: nowrap;
         padding-bottom: 1rem;
         margin-top: -1px;
         overflow-x: auto;
         text-align: center;
         white-space: nowrap;
         -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
         --bd-violet-bg: #712cf9;
         --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

         --bs-btn-font-weight: 600;
         --bs-btn-color: var(--bs-white);
         --bs-btn-bg: var(--bd-violet-bg);
         --bs-btn-border-color: var(--bd-violet-bg);
         --bs-btn-hover-color: var(--bs-white);
         --bs-btn-hover-bg: #6528e0;
         --bs-btn-hover-border-color: #6528e0;
         --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
         --bs-btn-active-color: var(--bs-btn-hover-color);
         --bs-btn-active-bg: #5a23c8;
         --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
         z-index: 1500;
      }
   </style>

</head>

<body>
   <?php @include 'header_beta.php'; ?>



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

                     <input class=" form-control border-end-0 border border-success rounded-pill ps-4" type="search"
                        placeholder="Search Anything..." id="example-search-input">

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
            <img src="img/reading_woman.jpg" class="img-fluid" alt="">
         </div>
      </div>
   </div>
   <hr class="featurette-divider">


   <?php @include 'slider.php'; ?>














   <?php @include 'footer.php'; ?>


   <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>