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




    <div class="forny-container mb-5 pb-5">

        <div class="forny-inner">
            <div class="forny-two-pane">
                <div class="pl-5 pr-5">
                    <div class="forny-form ">
                        <div class="mb-8 forny-logo">
                            <img src="images/logo.svg" class="img-fluid">
                        </div>

                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active bg-transparent" href="#login" data-toggle="tab" role="tab">
                                    <span>Login</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bg-transparent" href="#register" data-toggle="tab" role="tab">
                                    <span>Register</span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" role="tabpanel" id="login">
                                <p class="mt-6 mb-6">
                                    Use your credentials to login into account.
                                </p>
                                <form>

                                    <div class="form-group">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                  <i class="fas fa-envelope-open"></i>
                      </span>
                                            </div>

                                            <input required class="form-control" name="email" type="email" placeholder="Email Address">

                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                <i class="fas fa-phone-alt"></i>                    </span>
                                            </div>

                                            <input required class="form-control" name="phone" type="phone" placeholder="Phone Number">

                                        </div>
                                    </div>


                                    <div class="form-group password-field">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                  <i class="fas fa-key"></i>
                      </span>
                                            </div>

                                            <input required class="form-control" name="password" type="password" placeholder="Password">

                                            <div class="input-group-append cursor-pointer">
                                                <span class="input-group-text">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16">
          <g transform="translate(0 0)">
              <g transform="translate(0 0)">
                  <path d="M23.609,117.568a15.656,15.656,0,0,0-5.045-4.859,12.823,12.823,0,0,0-6.38-1.811c-.062,0-.309,0-.371,0a12.823,12.823,0,0,0-6.38,1.811,15.656,15.656,0,0,0-5.045,4.859,2.464,2.464,0,0,0,0,2.658,15.656,15.656,0,0,0,5.045,4.859,12.822,12.822,0,0,0,6.38,1.811c.062,0,.309,0,.371,0a12.823,12.823,0,0,0,6.38-1.811,15.656,15.656,0,0,0,5.045-4.859A2.464,2.464,0,0,0,23.609,117.568Zm-17.74,6.489a14.622,14.622,0,0,1-4.712-4.538,1.155,1.155,0,0,1,0-1.245,14.621,14.621,0,0,1,4.712-4.538,12.747,12.747,0,0,1,1.586-.79,8.964,8.964,0,0,0,0,11.9A12.748,12.748,0,0,1,5.869,124.057ZM12,125.75c-3.213,0-5.827-3.074-5.827-6.853s2.614-6.853,5.827-6.853,5.827,3.074,5.827,6.853S15.211,125.75,12,125.75Zm10.841-6.23a14.621,14.621,0,0,1-4.712,4.538,12.737,12.737,0,0,1-1.585.788,8.964,8.964,0,0,0,0-11.9,12.74,12.74,0,0,1,1.587.791,14.622,14.622,0,0,1,4.712,4.538A1.155,1.155,0,0,1,22.839,119.52Z" transform="translate(0.002 -110.897)"/>
              </g>
              <g transform="translate(9.565 5.565)">
                  <path d="M205.24,202.8a2.435,2.435,0,1,0,2.435,2.435A2.438,2.438,0,0,0,205.24,202.8Zm0,3.917a1.482,1.482,0,1,1,1.482-1.482A1.483,1.483,0,0,1,205.24,206.721Z" transform="translate(-202.805 -202.804)"/>
              </g>
          </g>
      </svg>
                      </span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mt-10">
                                        <div class="col-6">
                                            <button class="btn btn-primary btn-block">Login</button>
                                        </div>
                                        <div class="col-6 d-flex align-items-center justify-content-end">
                                            <a href="reset-password.html" class="sy-link">Forgot password?</a>
                                        </div>
                                    </div>


                                </form>
                            </div>

                            <div class="tab-pane fade" role="tabpanel" id="register">
                                <p class="mt-6 mb-6">
                                    Enter your information to setup a new account.
                                </p>
                                <form>

                                    <div class="form-group">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                  <i class="fas fa-user"></i>
                      </span>
                                            </div>

                                            <input required class="form-control" name="username" type="username" placeholder="Username">

                                        </div>
                                    </div>


                                    <div class="form-group">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                  <i class="fas fa-envelope-open"></i>
                      </span>
                                            </div>

                                            <input required class="form-control" name="email" type="email" placeholder="Email Address">

                                        </div>
                                    </div>


                                    <div class="form-group password-field">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                  <i class="fas fa-key"></i>
                      </span>
                                            </div>

                                            <input required class="form-control" name="password" type="password" placeholder="Password">

                                            <div class="input-group-append cursor-pointer">
                                                <span class="input-group-text">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16">
          <g transform="translate(0 0)">
              <g transform="translate(0 0)">
                  <path d="M23.609,117.568a15.656,15.656,0,0,0-5.045-4.859,12.823,12.823,0,0,0-6.38-1.811c-.062,0-.309,0-.371,0a12.823,12.823,0,0,0-6.38,1.811,15.656,15.656,0,0,0-5.045,4.859,2.464,2.464,0,0,0,0,2.658,15.656,15.656,0,0,0,5.045,4.859,12.822,12.822,0,0,0,6.38,1.811c.062,0,.309,0,.371,0a12.823,12.823,0,0,0,6.38-1.811,15.656,15.656,0,0,0,5.045-4.859A2.464,2.464,0,0,0,23.609,117.568Zm-17.74,6.489a14.622,14.622,0,0,1-4.712-4.538,1.155,1.155,0,0,1,0-1.245,14.621,14.621,0,0,1,4.712-4.538,12.747,12.747,0,0,1,1.586-.79,8.964,8.964,0,0,0,0,11.9A12.748,12.748,0,0,1,5.869,124.057ZM12,125.75c-3.213,0-5.827-3.074-5.827-6.853s2.614-6.853,5.827-6.853,5.827,3.074,5.827,6.853S15.211,125.75,12,125.75Zm10.841-6.23a14.621,14.621,0,0,1-4.712,4.538,12.737,12.737,0,0,1-1.585.788,8.964,8.964,0,0,0,0-11.9,12.74,12.74,0,0,1,1.587.791,14.622,14.622,0,0,1,4.712,4.538A1.155,1.155,0,0,1,22.839,119.52Z" transform="translate(0.002 -110.897)"/>
              </g>
              <g transform="translate(9.565 5.565)">
                  <path d="M205.24,202.8a2.435,2.435,0,1,0,2.435,2.435A2.438,2.438,0,0,0,205.24,202.8Zm0,3.917a1.482,1.482,0,1,1,1.482-1.482A1.483,1.483,0,0,1,205.24,206.721Z" transform="translate(-202.805 -202.804)"/>
              </g>
          </g>
      </svg>
                      </span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-12">
                                            <button class="btn btn-primary btn-block">Register</button>
                                        </div>
                                    </div>


                                </form>
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