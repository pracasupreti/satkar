<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SriYog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">

    <!-- slick slider -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/select2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">



</head>

<body>



    <!-- =======================================
     ========== Global header for Sriyog.com goes here 
    =========================== -->
    <?php include("header.php"); ?>



    <!-- ==================================
    ==============about main container starts
  ================= -->

    <!-- press page heading  -->
    <section class="container-fluid border-bottom bg-danger">
        <section class="container about-bar pt-5 pb-5">
            <h1>Press</h1>
        </section>
    </section>
    <!-- about page sublinks end -->


    <section class="container training-container pt-5 training-form">

        <h3 class="mb-5">Search for press content by company or author</h3>


        <div class="row p-3 bg-light">
            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="form-group">
                    <select class="selectpicker form-control" data-live-search="true" title="Select Company">
                  <option data-tokens="ketchup mustard">Kantipur Media</option>
                  <option data-tokens="mustard">Kantipur Media</option>
                  <option data-tokens="frosting">Kantipur Media</option>
                </select>
                </div>

            </div>


            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="form-group">
                    <select class="selectpicker form-control " multiple title="Select Author">
                  <option>Pracas Uprety</option>
                  <option>Pracas Uprety</option>
                  <option>Pracas Uprety</option>
                </select>
                </div>
            </div>


            <div class="col-lg-2 col-md-12 col-sm-12">
                <div class="form-group">
                    <button type="Submit" class="btn btn-info w-100">Search</button>

                </div>
            </div>
        </div>


    </section>


    <!-- press page body -->
    <section class="container press-container">
        <div class="row">
            <div class="col-lg-4 p-5">
                <img src="images/fast-company.png" class="img-fluid">
                <p class="press-quote mt-5 font-italic">“One of the most endearing and well-engineered startups in the nation.”</p>
                <p class="press-name font-weight-bold">- Fast Company</p>
                <a href="#" class="mt-3">Read More</a>
            </div>
            <div class="col-lg-4 p-5">
                <img src="images/fast-company.png" class="img-fluid">
                <p class="press-quote mt-5 font-italic">“One of the most endearing and well-engineered startups in the nation.”</p>
                <p class="press-name font-weight-bold">- Fast Company</p>
                <a href="#" class="mt-3">Read More</a>
            </div>
            <div class="col-lg-4 p-5">
                <img src="images/fast-company.png" class="img-fluid">
                <p class="press-quote mt-5 font-italic">“One of the most endearing and well-engineered startups in the nation.”</p>
                <p class="press-name font-weight-bold">- Fast Company</p>
                <a href="#" class="mt-3">Read More</a>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-4 p-5">
                <img src="images/fast-company.png" class="img-fluid">
                <p class="press-quote mt-5 font-italic">“One of the most endearing and well-engineered startups in the nation.”</p>
                <p class="press-name font-weight-bold">- Fast Company</p>
                <a href="#" class="mt-3">Read More</a>
            </div>
            <div class="col-lg-4 p-5">
                <img src="images/fast-company.png" class="img-fluid">
                <p class="press-quote mt-5 font-italic">“One of the most endearing and well-engineered startups in the nation.”</p>
                <p class="press-name font-weight-bold">- Fast Company</p>
                <a href="#" class="mt-3">Read More</a>
            </div>
            <div class="col-lg-4 p-5">
                <img src="images/fast-company.png" class="img-fluid">
                <p class="press-quote mt-5 font-italic">“One of the most endearing and well-engineered startups in the nation.”</p>
                <p class="press-name font-weight-bold">- Fast Company</p>
                <a href="#" class="mt-3">Read More</a>
            </div>
        </div>


    </section>










    <!-- press page body ends -->

    <?php include("footer.php"); ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>


</body>

</html>