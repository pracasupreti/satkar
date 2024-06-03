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
    <title>pahunaGhar</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">

    <!-- slick slider -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/select2.min.css">


</head>

<body>



    <!-- =======================================
     ========== Global header for pahunaGhar.com goes here 
    =========================== -->



    <?php include("header.php"); ?>

    <!-- ==================================
    ==============about main container starts
  ================= -->

    <!-- press page heading  -->
    <section class="container-fluid border-bottom bg-danger">
        <section class="container about-bar pt-5 pb-5">
            <h1>Suggest a Feature for pahunaGhar</h1>
        </section>
    </section>
    <!-- about page sublinks end -->

    <!-- press page body -->
    <section class="container contact-container">





        <div class="row pt-5 pb-5">
            <div class="col-lg-5 pr-5">
                <h3>Welcome to the Feature Request and Bug Report Submission Form.
                </h3>

                <img src="images/suggest.jpg" alt="" class="img-fluid">

                <p class="mt-3">
                    Use this form to request new features or suggest modifications to existing features. Your use of this form is conditioned upon your reading and agreeing to the terms and conditions below. You can also use this form to report suspected bugs in pahunaGhar.org.<p>
                    We normally do not send personal replies to feature requests or bug reports. We do, however, read each and every message. We use the information to improve our products and services. Your comments, suggestions, and ideas for improvements
                    are very important to us.
                </p>






            </div>

            <div class="col-lg-7 p-5 bg-light shadow">



                <h3 class="mb-3"><i class="far fa-comment-dots"></i> Suggestion/Feedback for a feature</h3>
                <p class="mb-5">Fill in the details below regarding any new feature you wish to to be implemented in pahunaGhars website. Your feedback and suggestions are highly appreciated.</p>

                <h5 class="mb-3">Please provide your details</h5>
                <!-- contact form -->

                <form>

                    <div class="form-group">
                        <label for="name">Full Name</label>

                        <input type="text" class="form-control" id="" aria-describedby="FullName" placeholder="Enter Full Name">
                    </div>

                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="" aria-describedby="FullName" placeholder="Enter your city name">
                    </div>

                    <div class="form-group">



                        <label for="phone-number">Phone Number</label>
                        <input id="phone" name="phone" type="tel" class="form-control" aria-describedby="Phone Number" placeholder="Enter your phone number" required>
                    </div>

                    <div class="form-group">



                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>


                    <div class="form-group">
                        <textarea class="form-control" type="text" placeholder="Details regarding the features..." data-wg-input="" data-uuid-input=""></textarea>
                    </div>





                    <div class="input-group form-group">

                        <div class="custom-file">

                            <input type="file" class="custom-file-input" id="inputGroupFile02">
                            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Attach / Upload Professional ID</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit Your Feedback</button>
                </form>
            </div>
        </div>




    </section>












    <!-- press page body ends -->

    <!-- =======================================
      === global footer for pahunaGhar.com goes here 
    =============== -->

    <?php include("footer.php"); ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

</body>

</html>