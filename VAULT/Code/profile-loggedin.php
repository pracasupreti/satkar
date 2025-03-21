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
    <link rel="stylesheet" href="css/select2.min.css">
    <link rel="stylesheet" href="css/style.css">


    <!-- admin calendar date picker -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.css'>
    <link rel="stylesheet" href="css/full-calendar-admin.css">







</head>

<body>



    <!-- =======================================
     ========== Global header for Sriyog.com goes here 
    =========================== -->

    <?php include("header.php"); ?>

    <!-- profile section starts -->

    <section class="container-fluid profile-page">

        <!-- cover photo block -->

        <section class="container  profile-cover-container rounded-bottom">


            <div class="sy-cover-photo rounded-bottom" style="background-image: url('images/pokhara.jpg');">


                <div class="sriyog-watermark">
                    <img src="images/sriyog-watermark.png" class="img-fluid" alt="">
                </div>

                <div class="sriyog-verified-icon">
                    <img src="images/verified-symbol-profile.png" class="img-fluid" alt="">
                </div>


                <div class="profile-caption-block">
                    <div class="cover-location d-block">
                        <p class="text-white"><i class="fas fa-map-marker-alt"></i> Surkhet, Nepal | Boats inside Fewa Lake</p>
                    </div>
                    <div class="cover-photographer">
                        <p class=" text-white"><i class="fas fa-camera"></i> Ajay Thapa | Itahari, Nepal</p>
                    </div>
                </div>


            </div>

        </section>



        <!-- below profile cover photo brief info -->

        <section class="container mt-3 mb-3 user-brief-info">
            <span class="flag-icon flag-icon-np float-right mt-3 clearfix"> </span>

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                <li class="nav-item">
                    <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact Info</a>
                </li>
            </ul>
        </section>



        <!-- profile two column container starts -->
        <section class="container profile-container  shadow-sm rounded bg-light mt-3">
            <div class="row profile-top-column">

                <!-- top-left column with profile photo and general info -->
                <div class="col-lg-4 col-md-4 col-sm-12 p-5">
                    <!-- profile photo -->
                    <div class="profile-picture text-center" id="profile-photo">
                        <img src="images/pracas.png" class="img-fluid rounded-circle" alt="">
                    </div>

                    <!-- username name -->
                    <div class="sy-username text-center mt-3">
                        <span class="h4 font-weight-bold"><i class="fas fa-at"></i> pracas</span>
                    </div>
                    <!-- member since -->
                    <div class="member-since text-center mt-3" id="member-since">
                        <span class="font-weight-bold">Member since: </span><span>29 Nov 2017</span>
                    </div>

                    <!-- verified badge -->
                    <div class="profile-verified text-center mt-3" id="profile-verified">
                        <span class="badge badge-pill badge-danger p-2"><i class="fas fa-check-circle"></i> Profile Verified</span>

                    </div>

                    <!-- date of birth, email, last served -->
                    <div class="dob-section text-center mt-3">
                        <span class="user-dob d-block mb-2 font-weight-bold"><i class="text-danger fas fa-birthday-cake"></i> 09 December 2019</span>
                        <span class="user-mail d-block mb-2 font-weight-bold "><i class="text-danger fas fa-envelope"></i> rajendra19867@gmail.com</span>
                        <span class="user-phone d-block mb-2 font-weight-bold"><i class="text-danger fas fa-phone-alt"></i> 01-555555</span>
                        <span class="user-mobile d-block mb-2 font-weight-bold"><i class="text-danger fas fa-mobile-alt"></i> +977-9876766587</span>
                        <span class="last-served d-block badge badge-pill bg-dark p-2 mt-3">Last served: <span class="font-weight-bold"> 23 December 2019</span></span>
                    </div>

                    <!-- social icons -->
                    <p class="h4 card-social text-center mt-3">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter-square"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </p>

                    <!-- language and flags -->

                    <p class="h4 text-center mt-3">
                        <img src="images/user-talk.png" alt="">
                        <span class="flag-icon flag-icon-gb"> </span>
                        <span class="flag-icon flag-icon-fr"> </span>
                        <span class="flag-icon flag-icon-in"> </span>
                        <span class="flag-icon flag-icon-au"> </span>
                    </p>

                </div>



                <!-- top right column -->

                <div class="col-lg-8 col-md-8 col-sm-12 p-5">
                    <!-- Large profile name  -->
                    <div class="user-profile-name" id="user-profile-name">
                        <h2 class="h1 font-weight-bold">Prakash Uprety </h2>
                    </div>

                    <!-- user location profession and id -->
                    <div class="user-location-id mt-3">
                        <ul class="d-inline-block h6">
                            <li class="d-inline-block mr-5"><i class="fas fa-map-marker-alt"></i> Pokhariya, Biratnagar, Nepal</li>
                            <li class="d-inline-block mr-5"><span class="font-weight-bold text-uppercase">cp4567brt</span></li>
                        </ul>
                    </div>

                    <!-- book call section -->

                    <!-- <div class="book-call-chat mt-3 bg-white p-3 rounded border-bottom">
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item font-weight-bold"><a href="#" class="sy-link"><i class="text-info fas fa-calendar-check"></i> Book</a></li>
                            <li class="list-group-item font-weight-bold"><a href="#" class="sy-link"><i class="text-success fas fa-phone-volume"></i> Call</a></li>
                            <li class="list-group-item font-weight-bold"><a href="#" class="sy-link"><i class="text-primary fab fa-facebook-messenger"></i></i> Chat</a></li>


                            <li class="list-group-item font-weight-bold">Badges <span class="user-badge"><img src="images/user-badge-red.png" alt=""></span>
                                <span class="user-belt"><img src="images/belt.png" alt=""></span></li>

                        </ul>
                    </div> -->





                    <!-- gender age section-->

                    <div class="gender-age mt-3 bg-white p-3 rounded  border-bottom">
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item ">Gender: <br> <span class="font-weight-bold"> Male</span></li>
                            <li class="list-group-item ">Age: <br><span class="font-weight-bold">35 Years</span></li>
                            <li class="list-group-item ">Blood Group: <br><span class="font-weight-bold">A +ve</span></li>

                            <li class="list-group-item ">Certifications: <br><a href="#" class="sy-link"><span class="font-weight-bold">Click Here</span></a></li>

                        </ul>
                    </div>

                    <section class="user-sy-calendar mt-5 border rounded">
                        <div id="calendar"></div>

                    </section>


                    <!-- bookings earnings info -->

                    <!-- <div class="row mt-3 p-3 bg-dark rounded no-gutters border-bottom">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-3">
                            <span class="font-weight-bold h6">1372 <br>Earnings</span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-3">
                            <span class="font-weight-bold h6">NRS 1,00,876 <br>Earned</span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-3">
                            <span class="font-weight-bold h6">1372 <br>Reviews</span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-3">
                            <span class="font-weight-bold h6">76 <br>Appreciations</span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-3">
                            <span class="font-weight-bold h6">Per Visit Charge: <br>NRs 300</span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-3">
                            <span class="font-weight-bold h6">Inspection Charge: <br>NRs 400</span>
                        </div>
                    </div> -->

                    <!-- main url -->
                    <!-- <div class="user-full-url mt-3 bg-white p-3 rounded text-center font-weight-bold">
                        <span class="text-white"><a href="#" class="sy-link"><i class="text-dark fas fa-link"></i> www.sriyog.com/biratnagar/plumber/username</a></span>
                    </div> -->


                    <!-- modes of payment-->

                    <div class="mode-pay mt-3 bg-white p-3 rounded">
                        <h5 class="pl-3">Modes of Payment</h5>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item my-auto "><img src="images/khalti.png" class="img-fluid" alt=""></li>
                            <li class="list-group-item my-auto "><img src="images/esewa.png" class="img-fluid" alt=""></li>
                            <li class="list-group-item my-auto "><img src="images/bank_transfer-512.png" class="img-fluid" alt=""></li>
                            <li class="list-group-item my-auto "><img src="images/paypal.png" class="img-fluid" alt=""></li>
                            <li class="list-group-item my-auto "><img src="images/ime_pay.png" class="img-fluid" alt=""></li>


                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <!-- profile two column second container starts -->
        <section class="container profile-container shadow-sm rounded bg-white border mt-3">
            <div class="row profile-top-column">

                <!-- top-left column with map and about info -->
                <div class="col-lg-4 col-md-4 col-sm-12 p-5">

                    <!-- map section -->
                    <div class="user-location-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3593958.0912229526!2d84.13014975!3d28.39738195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39be3da431a20f7d%3A0x700a162fc6962c63!2sAnnapurna%20Conservation%20Area!5e0!3m2!1sen!2snp!4v1575677734498!5m2!1sen!2snp"
                            width="100%" height="280" frameborder="0" style="border:0;" allowfullscreen="" class="rounded"></iframe>
                    </div>

                    <!-- location button goes here -->
                    <a class="btn btn-primary d-block mt-3" href="#" role="button"><i class="fas fa-map-marker-alt"></i> Location</a>

                </div>
                <!--  right column with about text -->

                <div class="col-lg-8 col-md-8 col-sm-12 p-5">
                    <!-- about text starts -->
                    <div class="user-about-text">
                        <h3>About <span class="font-weight-bold">Prakash Uprety</span></h3>
                        <p class="about-user-text">We’ve been keeping things super-simple so far. If you are going to use drop caps, however, it’s likely you will want to target the first letter of only the first paragraph. As it is, the above examples will target every paragraph.
                            We’ve been keeping things super-simple so far. If you are going to use drop caps, however, it’s likely you will want to target the first letter of only the first paragraph. As it is, the above examples will target every paragraph.</p>

                        <!-- avatar list below -->
                        <ul class="user-avatar-group list-group list-group-horizontal">
                            <li class="list-group-item"><img src="images/pracas.png" class="img-fluid rounded-circle" alt=""></li>
                            <li class="list-group-item"><img src="images/pracas.png" class="img-fluid rounded-circle" alt=""></li>
                            <li class="list-group-item"><img src="images/pracas.png" class="img-fluid rounded-circle" alt=""></li>
                            <li class="list-group-item"><img src="images/pracas.png" class="img-fluid rounded-circle" alt=""></li>
                            <li class="list-group-item"><img src="images/pracas.png" class="img-fluid rounded-circle" alt=""></li>
                            <li class="list-group-item"><img src="images/pracas.png" class="img-fluid rounded-circle" alt=""></li>

                        </ul>
                        <!-- avatar list below -->
                        <ul class="user-avatar-group list-group list-group-horizontal">
                            <li class="list-group-item"><img src="images/pracas.png" class="img-fluid rounded-circle" alt=""></li>
                            <li class="list-group-item"><img src="images/pracas.png" class="img-fluid rounded-circle" alt=""></li>
                            <li class="list-group-item"><img src="images/pracas.png" class="img-fluid rounded-circle" alt=""></li>
                            <li class="list-group-item"><img src="images/pracas.png" class="img-fluid rounded-circle" alt=""></li>
                            <li class="list-group-item"><img src="images/pracas.png" class="img-fluid rounded-circle" alt=""></li>
                            <li class="list-group-item"><img src="images/pracas.png" class="img-fluid rounded-circle" alt=""></li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- more skills section -->
        <section class="sriyog-services container shadow-sm border-bottom rounded bg-light mt-3">
            <div class="row align-items-center">
                <div class="col-md-2 p-0 pl-5">
                    <span><b>More Skills</b></span>
                </div>
                <!-- ////////////////// -->
                <div class="col-md-10 flex-wrap flex justify-content-around">
                    <div class="sriyog-top-service">
                        <a href="#">
                            <img alt="" src="./assets/icons/vacuum.svg">
                            <span class="font-size-12 mt-2 d-block">Home Cleaning</span>
                        </a>
                    </div>
                    <div class="sriyog-top-service">
                        <a href="#">
                            <img alt="" src="./assets/icons/electrician.svg">
                            <span class="font-size-12 mt-2 d-block ">Electrical</span>
                        </a>
                    </div>
                    <div class="sriyog-top-service">
                        <a href="#">
                            <img alt="" src="./assets/icons/painter.svg">
                            <span class="font-size-12 mt-2 d-block">Painting</span>
                        </a>
                    </div>
                    <div class="sriyog-top-service">
                        <a href="#">
                            <img alt="" src="./assets/icons/pipes.svg">
                            <span class="font-size-12 mt-2 d-block">Plumbing</span>
                        </a>
                    </div>
                    <div class="sriyog-top-service">
                        <a href="#">
                            <img alt="" src="./assets/icons/operator.svg">
                            <span class="font-size-12 mt-2 d-block">Operator</span>
                        </a>
                    </div>
                    <div class="sriyog-top-service">
                        <a href="#">
                            <img alt="" src="./assets/icons/carpenter.svg">
                            <span class="font-size-12 mt-2 d-block">Carpentry</span>
                        </a>
                    </div>
                    <a href="#">
                    </a>
                    <div class="sriyog-top-service">
                        <a href="#">
                        </a>
                        <a href="#">
                            <img alt="" src="./assets/icons/catering@2x.png">
                            <span class="font-size-12 mt-2 d-block">Catering</span>
                        </a>
                    </div>
                    <div class="sriyog-top-service">
                        <a href="#">
                            <img alt="" src="./assets/icons/make-up@2x.png">
                            <span class="font-size-12 mt-2 d-block">Make-up Artist</span>
                        </a>
                    </div>
                </div>
                <!-- ////////////////// -->
            </div>
        </section>











        <!-- send to friend section  and report column-->

        <section class="container mt-5">
            <div class="row">
                <div class="col-lg-6">
                    <ul>
                        <li class="d-inline-block">
                            <a href="#" class=" btn btn-outline-danger font-weight-bold"><i class="fas fa-user-times"></i> Report this profile</a>
                        </li>
                    </ul>
                </div>


                <!-- report section -->
                <div class="col-lg-6">

                    <ul>


                        <li class="d-inline-block float-right">
                            <a href="#" class=" btn btn-outline-dark font-weight-bold"><i class="fas fa-sort-numeric-up-alt"></i></i> Profile Visitors: 4009898</a>
                        </li>
                    </ul>

                </div>
            </div>
        </section>







    </section>













    <!-- =======================================
      === global footer for SriYog.com goes here 
    =============== -->
    <?php include("footer.php"); ?>

</body>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.en.js'></script>
<script src="js/fc-calendar.js"></script>



</html>