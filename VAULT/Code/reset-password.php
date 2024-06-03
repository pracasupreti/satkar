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
    <link rel="stylesheet" href="css/register.css">


</head>

<body>



    <!-- =======================================
     ========== Global header for Sriyog.com goes here 
    =========================== -->
    <?php include("header.php"); ?>


    <!-- ==================================
    ==============register main container starts
  ================= -->




    <div class="forny-container">

        <div class="forny-inner">
            <div class="forny-two-pane">
                <div class="pl-5 pr-5">
                    <div class="forny-form">
                        <div class="mb-6 forny-logo">
                            <img class="img-fluid" src="images/logo.svg">
                        </div>
                        <div class="reset-form d-block">
                            <form class="reset-password-form">
                                <h4 class="mb-5">Reset Your password</h4>
                                <p class="mb-10">
                                    Please enter your email address and we will send you a password password link.
                                </p>

                                <div class="form-group">

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                              <i class="fas fa-envelope-open"></i>
                      </span>
                                        </div>

                                        <input required="" class="form-control" name="email" type="email" placeholder="Email Address">

                                    </div>
                                </div>

                                <div class="text-center pb-3">OR</div>
                                <div class="form-group">

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                              <i class="fas fa-phone-alt"></i>                    </span>
                                        </div>

                                        <input required="" class="form-control" name="email" type="phone" placeholder="Phone Number">

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-primary btn-block">Send Reset Link</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="reset-confirmation d-none">
                            <h4 class="mb-5">Link was sent</h4>
                            <div>
                                Please, check your inbox for a password reset link.
                            </div>
                        </div>
                    </div>
                </div>
                <div></div>
            </div>
        </div>

    </div>







    <!-- press page body ends -->

    <!-- =======================================
      === global footer for SriYog.com goes here 
    =============== -->
    <?php include("footer.php"); ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

</body>

</html>