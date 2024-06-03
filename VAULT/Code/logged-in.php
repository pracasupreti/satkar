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
    <meta name="description" content="Sriyog.com">
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
</head>

<body>



    <!-- =======================================
     ========== Global header for Sriyog.com goes here 
    =========================== -->




    <?php include("header.php"); ?>

    <!-- ==================================
    ==============about main container starts
  ================= -->

    <section class="top-container">
        <div class="top-image-container position-relative">
            <img src="https://sriyog.com/wp-content/uploads/2019/09/ajay.jpg" alt="image" class="image-style opacity-7" />
            <div class="sriyogweb_photo_credit">
                <i class="fas fa-camera"></i> Photo Source: <span class="credit_name"><a target="_blank" href="https://www.facebook.com/photo.php?fbid=792732534105247&set=a.521354767909693&type=1&theater"> &copy; Ajay Thapa Magar</a></span>
            </div>
        </div>
        <div class="top-container-fields">
            <div class="row justify-content-center">
                <div class="col-10 col-sm-10 col-md-4 col-lg-3 margin-0-5 font-size-14">
                    <label class="filed-wrapper">
                        <img src="https://sriyog.com/wp-content/themes/themesriyog/assets/icons/location-brand-color.svg" />
                        <!--<input class="input-filed col-11 m-0 p-0 pl-5px" placeholder=" Enter your Location" />-->
                        <!-- <select name="select2_search_loc" class="select2_search_loc js-states col-11 m-0 p-0 pl-5px" id="id_label_single"></select> -->
                        <input class="form-control col-11 m-0 p-0 pl-5px" type="text" placeholder="Default input">

                        
                    </label>
                    <span class="font-size-14 hint-text justify-content-center text-white">Example : Biratnagar, Kathmandu, Sydney, etc.</span>
                </div>
                <div class="col-10 col-sm-8 col-md-4 col-lg-3 margin-0-5 font-size-14">
                    <label class="filed-wrapper">
                        <img src="https://sriyog.com/wp-content/themes/themesriyog/assets/icons/service.svg" class="service-icon">
                       <!-- <input class="input-filed col-11 m-0 p-0 pl-5px" placeholder=" What Service do you need?" />-->
                        <!-- <select name="select2_search_ser" class="select2_search_ser js-states col-11 m-0 p-0 pl-5px"></select> -->
                        <input class="form-control col-11 m-0 p-0 pl-5px" type="text" placeholder="Default input">

                    </label>
                    <span class="font-size-14 hint-text  justify-content-center text-white">Example : Cleaner, Carpenter, Painter, etc.</span>
                </div>
                <div class='front_page search-btn' onclick="SriyogSearch()">
                    Search
                </div>
            </div>
            <!-- col-sm-2 col-lg-1 -->
            <div class="row justify-content-center mt-3">
                <div class="col-5 col-sm-5 p-0 margin-0-5">
                    <div class="col-12 col-sm-7 col-md-6 col-lg-5 ml-auto">
                        <a href="https://sriyog.com/locations">
                            <div class="sriyogweb-btn font-size-14 ws-no-wrap">
                                Browse All Cities
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-5 p-0 col-sm-5 margin-0-5 ">
                    <div class="col-12 col-sm-7 col-md-6 col-lg-5 ">
                        <a href="https://sriyog.com/services">
                            <div class="sriyogweb-btn font-size-14 ws-no-wrap">
                                Browse All Services
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div id="content" class="site-content">



        <!-- services start -->
        <section class="sriyog-services container">
            <div class="row align-items-center">
                <div class="col-md-2 p-0 pl-4">
                    <span><b>Top Services</b></span>
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

        <!-- services end -->







        <!-- seasonal services start -->

        <section class="sriyog-seasonal-services container mb-4 ">
            <div class="row">
                <div class="col-md-2 p-0 pl-4">
                    <div class="mt-20px"><b>Seasonal Services</b></div>
                </div>
                <div class="col-md-10 flex flex-wrap justify-content-around mb-11px">
                    <div class="sriyog-seasonal-service box-shadow border-radius-3">
                        <a href="#">
                            <img class="image-style-contain" src="./assets/icons/camera@2x.png" alt="camping-tent">
                            <span class="ws-no-wrap icon-title">Camera</span>
                        </a>
                    </div>
                    <div class="sriyog-seasonal-service box-shadow border-radius-3">
                        <a href="#">
                            <img class="image-style-contain" src="./assets/icons/catering@2x.png" alt="camping-tent">
                            <span class="ws-no-wrap icon-title">Catering</span>
                        </a>
                    </div>
                    <div class="sriyog-seasonal-service box-shadow border-radius-3">
                        <a href="#">
                            <img class="image-style-contain" src="./assets/icons/video-camera@2x.png" alt="camping-tent">
                            <span class="ws-no-wrap icon-title">Videographer</span>
                        </a>
                    </div>
                    <div class="sriyog-seasonal-service box-shadow border-radius-3">
                        <a href="#">
                            <img class="image-style-contain" src="./assets/icons/make-up@2x.png" alt="camping-tent">
                            <span class="ws-no-wrap icon-title">Make-up Artist</span>
                        </a>
                    </div>
                    <div class="sriyog-seasonal-service box-shadow border-radius-3">
                        <a href="#">
                            <img class="image-style-contain" src="./assets/icons/camping-tent@2x.png" alt="camping-tent">
                            <span class="ws-no-wrap icon-title">Camping Tent</span>
                        </a>
                    </div>
                    <div class="sriyog-seasonal-service box-shadow border-radius-3">
                        <a href="#">
                            <img class="image-style-contain" src="./assets/icons/priest-at-wedding@2x.png" alt="camping-tent">
                            <span class="ws-no-wrap icon-title">Pandit</span>
                        </a>
                    </div>
                    <div class="sriyog-seasonal-service box-shadow border-radius-3">
                        <a href="#">
                            <img class="image-style-contain" src="./assets/icons/plugging@2x.png" alt="electrician">
                            <span class="ws-no-wrap icon-title">Electrician</span>
                        </a>
                    </div>
                    <div class="sriyog-seasonal-service box-shadow border-radius-3">
                        <a href="#">
                            <img class="image-style-contain" src="./assets/icons/delivery-truck@2x.png" alt="camping-tent">
                            <span class="ws-no-wrap icon-title">Packers &amp; Mover</span>
                        </a>
                    </div>
                </div>
            </div>


        </section>

        <!-- seasonal services end -->






        <!-- top professional start -->

        <section class="sriyog-top-professionals container pt-5pc pb-20px">
            <div class="row margin-bottom--32">
                <div class="sriyog-top-professional-title">
                    <div class="ml-4 "><b>Top Professionals</b></div>
                </div>
            </div>

            <div class="sriyogweb-professional-container flex justify-content-around flex-wrap m-0-0-0-15">


                <div class="card sriyogweb-info-card p-3 my-5">
                    <div class="sriyogweb-professional-avatar">
                        <img src="./assets/images/jonathan_low.jpg" class="image-style">
                    </div>
                    <div>
                        <div class="mt-3 position-relative">
                            <img class="sriyogweb-professional-medal" src="./assets/icons/medal.svg" alt="medal">
                            <div>
                                <div class="font-size-20">Prakash Thapa</div>
                                <span class="font-size-14">
                    <img src="./assets/icons/small_user.svg" alt="user">
                    <span class="font-size-14">Photographer</span>
                                <img src="./assets/icons/small_location.svg" alt="location">
                                <span class="font-size-14">Itahari</span>
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card sriyogweb-info-card p-3 my-5">
                    <div class="sriyogweb-professional-avatar">
                        <img src="./assets/images/thom_low.jpg" class="image-style">
                    </div>
                    <div class="mt-3 position-relative">
                        <img class="sriyogweb-professional-medal" src="./assets/icons/medal.svg" alt="medal">
                        <div>
                            <div class="font-size-20">Prakash Thapa</div>
                            <span class="font-size-14">
                    <img src="./assets/icons/small_user.svg" alt="user">
                    <span class="font-size-14">Photographer</span>
                            <img src="./assets/icons/small_location.svg" alt="location">
                            <span class="font-size-14">Itahari</span>
                            </span>
                        </div>

                    </div>
                </div>
                <div class="card sriyogweb-info-card p-3 my-5">
                    <div class="sriyogweb-professional-avatar">
                        <img src="./assets/images/paul_low.jpg" class="image-style">
                    </div>
                    <div class="mt-3 position-relative">
                        <img class="sriyogweb-professional-medal" src="./assets/icons/medal.svg" alt="medal">
                        <div>
                            <div class="font-size-20">Prakash Thapa</div>
                            <span class="font-size-14">
                    <img src="./assets/icons/small_user.svg" alt="user">
                    <span class="font-size-14">Photographer</span>
                            <img src="./assets/icons/small_location.svg" alt="location">
                            <span class="font-size-14">Itahari</span>
                            </span>
                        </div>

                    </div>
                </div>
                <div class="card sriyogweb-info-card p-3 my-5">
                    <div class="sriyogweb-professional-avatar">
                        <img src="./assets/images/daniel_low.jpg" class="image-style">
                    </div>
                    <div class="mt-3 position-relative">
                        <img class="sriyogweb-professional-medal" src="./assets/icons/medal.svg" alt="medal">
                        <div>
                            <div class="font-size-20">Prakash Thapa</div>
                            <span class="font-size-14">
                    <img src="./assets/icons/small_user.svg" alt="user">
                    <span class="font-size-14">Photographer</span>
                            <img src="./assets/icons/small_location.svg" alt="location">
                            <span class="font-size-14">Itahari</span>
                            </span>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- top professional end -->



        <!-- supported by start -->
        <section class="supported-by-container">
            <div class="supported-by container  flex align-items-center">
                <div class="row justify-content-between">
                    <div class="flex-1 news-site-img-container">
                        <img src="./assets/images/Google-logo-grey@2x.png" alt="esewa" class="image-style-contain">
                    </div>
                    <div class="flex-1 news-site-img-container">
                        <img src="./assets/images/Google-logo-grey@2x.png" alt="esewa" class="image-style-contain">
                    </div>
                    <div class="flex-1 news-site-img-container">
                        <img src="./assets/images/Google-logo-grey@2x.png" alt="esewa" class="image-style-contain">
                    </div>
                    <div class="flex-1 news-site-img-container">
                        <img src="./assets/images/Google-logo-grey@2x.png" alt="esewa" class="image-style-contain">
                    </div>
                    <div class="flex-1 news-site-img-container">
                        <img src="./assets/images/Google-logo-grey@2x.png" alt="esewa" class="image-style-contain">
                    </div>
                    <div class="flex-1 news-site-img-container">
                        <img src="./assets/images/Google-logo-grey@2x.png" alt="esewa" class="image-style-contain">
                    </div>
                    <div class="flex-1 news-site-img-container">
                        <img src="./assets/images/Google-logo-grey@2x.png" alt="esewa" class="image-style-contain">
                    </div>
                    <div class="flex-1 news-site-img-container">
                        <img src="./assets/images/Google-logo-grey@2x.png" alt="esewa" class="image-style-contain">
                    </div>
                    <!-- content here -->
                </div>
                <span class="supported-by-text"><b>Supported By:</b></span>
            </div>
        </section>

        <!-- supported by end -->






        <!-- success stories start -->

        <section class="success-stories container">
            <div class="row">
                <div class="success-stories-title">
                    <b class="bold">Success Stories</b>
                </div>
            </div>

            <div class="row">
                <div class="col-12 pb-5">
                    <!--SECTION START-->
                    <section class="row stories-container">
                        <!--Start slider news-->
                        <div class="col-12 col-md-6 pb-0 pb-md-3 pt-2 pr-md-1">
                            <div id="featured" class="carousel slide carousel" data-ride="carousel">
                                <!--dots navigate-->
                                <ol class="carousel-indicators top-indicator">
                                    <li data-target="#featured" data-slide-to="0" class="active"></li>
                                    <li data-target="#featured" data-slide-to="1"></li>
                                    <li data-target="#featured" data-slide-to="2"></li>
                                    <li data-target="#featured" data-slide-to="3"></li>
                                </ol>

                                <!--carousel inner-->
                                <div class="carousel-inner">
                                    <!--Item slider-->
                                    <div class="carousel-item active">
                                        <div class="card border-0 rounded-0 text-light overflow zoom">
                                            <div class="position-relative">
                                                <!--thumbnail img-->
                                                <div class="ratio_left-cover-1 image-wrapper">
                                                    <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                        <img class="img-fluid w-100" src="https://bootstrap.news/source/img1.jpg" alt="Bootstrap news template">
                                                    </a>
                                                </div>
                                                <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                    <!--title-->
                                                    <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                        <h2 class="h3 post-title text-white my-1">Bootstrap 4 template news portal magazine perfect for news site</h2>
                                                    </a>
                                                    <!-- meta title -->
                                                    <div class="news-meta">
                                                        <span class="news-author">by <a class="text-white font-weight-bold" href="../category/author.html">Jennifer</a></span>
                                                        <span class="news-date">Oct 22, 2019</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Item slider-->
                                    <div class="carousel-item">
                                        <div class="card border-0 rounded-0 text-light overflow zoom">
                                            <div class="position-relative">
                                                <!--thumbnail img-->
                                                <div class="ratio_left-cover-1 image-wrapper">
                                                    <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                        <img class="img-fluid w-100" src="https://bootstrap.news/source/img2.jpg" alt="Bootstrap news theme">
                                                    </a>
                                                </div>
                                                <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                    <!--title-->
                                                    <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                        <h2 class="h3 post-title text-white my-1">Walmart shares up 10% on online sales lift</h2>
                                                    </a>
                                                    <!-- meta title -->
                                                    <div class="news-meta">
                                                        <span class="news-author">by <a class="text-white font-weight-bold" href="../category/author.html">Jennifer</a></span>
                                                        <span class="news-date">Oct 22, 2019</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Item slider-->
                                    <div class="carousel-item">
                                        <div class="card border-0 rounded-0 text-light overflow zoom">
                                            <div class="position-relative">
                                                <!--thumbnail img-->
                                                <div class="ratio_left-cover-1 image-wrapper">
                                                    <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                        <img class="img-fluid w-100" src="https://bootstrap.news/source/img3.jpg" alt="Bootstrap blog template">
                                                    </a>
                                                </div>
                                                <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                    <!--title-->
                                                    <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                        <h2 class="h3 post-title text-white my-1">Bank chief warns on Brexit staff moves to other company</h2>
                                                    </a>
                                                    <!-- meta title -->
                                                    <div class="news-meta">
                                                        <span class="news-author">by <a class="text-white font-weight-bold" href="../category/author.html">Jennifer</a></span>
                                                        <span class="news-date">Oct 22, 2019</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Item slider-->
                                    <div class="carousel-item">
                                        <div class="card border-0 rounded-0 text-light overflow zoom">
                                            <div class="position-relative">
                                                <!--thumbnail img-->
                                                <div class="ratio_left-cover-1 image-wrapper">
                                                    <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                        <img class="img-fluid w-100" src="https://bootstrap.news/source/img4.jpg" alt="Bootstrap portal template">
                                                    </a>
                                                </div>
                                                <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                    <!--title-->
                                                    <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                        <h2 class="h3 post-title text-white my-1">The world's first floating farm making waves in Rotterdam</h2>
                                                    </a>
                                                    <!-- meta title -->
                                                    <div class="news-meta">
                                                        <span class="news-author">by <a class="text-white font-weight-bold" href="../category/author.html">Jennifer</a></span>
                                                        <span class="news-date">Oct 22, 2019</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end item slider-->
                                </div>
                                <!--end carousel inner-->
                            </div>

                            <!--navigation-->
                            <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--End slider news-->

                        <!--Start box news-->
                        <div class="col-12 col-md-6 pt-2 pl-md-1 mb-3 mb-lg-4">
                            <div class="row">
                                <!--news box-->
                                <div class="col-6 pb-1 pt-0 pr-1">
                                    <div class="card border-0 rounded-0 text-white overflow zoom">
                                        <div class="position-relative">
                                            <!--thumbnail img-->
                                            <div class="ratio_right-cover-2 image-wrapper">
                                                <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                    <img class="img-fluid" src="https://bootstrap.news/source/img5.jpg" alt="simple blog template bootstrap">
                                                </a>
                                            </div>
                                            <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                <!-- category -->
                                                <a class="p-1 badge badge-primary rounded-0" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Lifestyle</a>

                                                <!--title-->
                                                <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                    <h2 class="h5 text-white my-1">Should you see the Fantastic Beasts sequel?</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--news box-->
                                <div class="col-6 pb-1 pl-1 pt-0">
                                    <div class="card border-0 rounded-0 text-white overflow zoom">
                                        <div class="position-relative">
                                            <!--thumbnail img-->
                                            <div class="ratio_right-cover-2 image-wrapper">
                                                <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                    <img class="img-fluid" src="https://bootstrap.news/source/img6.jpg" alt="bootstrap templates for blog">
                                                </a>
                                            </div>
                                            <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                <!-- category -->
                                                <a class="p-1 badge badge-primary rounded-0" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Motocross</a>
                                                <!--title-->
                                                <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                    <h2 class="h5 text-white my-1">Three myths about Florida elections recount</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--news box-->
                                <div class="col-6 pb-1 pr-1 pt-1">
                                    <div class="card border-0 rounded-0 text-white overflow zoom">
                                        <div class="position-relative">
                                            <!--thumbnail img-->
                                            <div class="ratio_right-cover-2 image-wrapper">
                                                <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                    <img class="img-fluid" src="https://bootstrap.news/source/img7.jpg" alt="bootstrap blog wordpress theme">
                                                </a>
                                            </div>
                                            <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                <!-- category -->
                                                <a class="p-1 badge badge-primary rounded-0" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Fitness</a>
                                                <!--title-->
                                                <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                    <h2 class="h5 text-white my-1">Finding Empowerment in Two Wheels and a Helmet</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--news box-->
                                <div class="col-6 pb-1 pl-1 pt-1">
                                    <div class="card border-0 rounded-0 text-white overflow zoom">
                                        <div class="position-relative">
                                            <!--thumbnail img-->
                                            <div class="ratio_right-cover-2 image-wrapper">
                                                <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                    <img class="img-fluid" src="https://bootstrap.news/source/img8.jpg" alt="blog website templates bootstrap">
                                                </a>
                                            </div>
                                            <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                <!-- category -->
                                                <a class="p-1 badge badge-primary rounded-0" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Adventure</a>
                                                <!--title-->
                                                <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                    <h2 class="h5 text-white my-1">Ditch receipts and four other tips to be a shopper</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end news box-->
                            </div>
                        </div>
                        <!--End box news-->
                    </section>
                    <!--END SECTION-->
                </div>
            </div>
        </section>




        <!-- success stories end -->


        <!-- how-it-work start -->

        <div class="how-it-works">
            <div class="container">
                <div class="row ">
                    <div class="how-it-works-title">
                        <b class="">How it works</b>
                    </div>
                </div>
            </div>
            <!--  <div class="row">
              <img src='/assets/images/How-It-Works.png' alt='how-it-works' class="how-it-works-img-container image-style" />
          </div> -->
            <section class="our-pros-sec">
                <div class="our-pros">
                    <div class="our-pros-item">
                        <div class="our-pros-img">
                            <img src="images/search-handyman-biratnagar.png" alt="Search"> </div>
                        <h4>Search </h4>
                    </div>
                    <div class="our-pros-item">
                        <div class="our-pros-img">
                            <img src="images/call-handyman-kathmandu.png" alt="Call"> </div>
                        <h4>Call</h4>
                    </div>
                    <div class="our-pros-item item3pros">
                        <div class="our-pros-img">
                            <img src="images/hire-handyman-itahari.png" alt="Instruct"> </div>
                        <h4>Instruct</h4>
                    </div>
                    <div class="our-pros-item big-pros">
                        <div class="our-pros-img">
                            <img src="images/plumber-in-kathmandu.png" alt="Take-Rest"> </div>
                        <h4>Take Rest</h4>
                    </div>
                </div>
            </section>
        </div>
        <!-- how-it-work end -->


        <!-- data-details start -->
        <div class="data-details-container">
            <div class="container p-5">
                <div class="row justify-content-between">
                    <div class="flex flex-direction-column align-items-center text-center  count-block">
                        <span class="data-detail-number">18000<sup>+</sup></span>
                        <span class="data-detail-text font-size-14">Professionals</span>
                    </div>
                    <div class="flex flex-direction-column align-items-center text-center  count-block">
                        <span class="data-detail-number">18</span>
                        <span class="data-detail-text font-size-14">Categories</span>
                    </div>
                    <div class="flex flex-direction-column align-items-center text-center  count-block">
                        <span class="data-detail-number">168</span>
                        <span class="data-detail-text font-size-14">Sub-Categories</span>
                    </div>
                    <div class="flex flex-direction-column align-items-center text-center  count-block">
                        <span class="data-detail-number">7500<sup>+</sup></span>
                        <span class="data-detail-text font-size-14">Verified Pro</span>
                    </div>
                    <div class="flex flex-direction-column align-items-center text-center  count-block-2">
                        <span class="data-detail-number">25<sup>+</sup></span>
                        <span class="data-detail-text font-size-14">Success Stories</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- data-details end -->





        <!-- news-sites start -->
        <div class='container py-5 px-5 news-sites'>
            <div class="agency_slider sy-reponsive">
                <div class="single_agency_slider" data-toggle="tooltip" data-placement="top" title="Abhiyandaily">
                    <a href="https://sriyog.com/media-agency/abhiyandaily/">
                        <img src="images/abhiyan.png" alt="abhiyandaily" class="themesriyog_slider_img img-fluid">
                    </a>
                </div>
                <div class="single_agency_slider" data-toggle="tooltip" data-placement="top" title="AP1 HD">
                    <a href="https://sriyog.com/media-agency/ap1-hd/">
                        <img src="images/ap1hd-logo.jpg" alt="ap1-hd" class="themesriyog_slider_img img-fluid">
                    </a>
                </div>
                <div class="single_agency_slider" data-toggle="tooltip" data-placement="top" title="Artha Sarokar">
                    <a href="https://sriyog.com/media-agency/artha-sarokar/">
                        <img src="images/artahsarokar-logo.jpg" alt="artha-sarokar" class="themesriyog_slider_img img-fluid">
                    </a>
                </div>
                <div class="single_agency_slider" data-toggle="tooltip" data-placement="top" title="Baahrakhari">
                    <a href="https://sriyog.com/media-agency/baahrakhari/">
                        <img src="images/12khari.png" alt="baahrakhari" class="themesriyog_slider_img img-fluid">
                    </a>
                </div>





                <div class="single_agency_slider" data-toggle="tooltip" data-placement="top" title="Abhiyandaily">
                    <a href="https://sriyog.com/media-agency/abhiyandaily/">
                        <img src="images/abhiyan.png" alt="abhiyandaily" class="themesriyog_slider_img img-fluid">
                    </a>
                </div>
                <div class="single_agency_slider" data-toggle="tooltip" data-placement="top" title="AP1 HD">
                    <a href="https://sriyog.com/media-agency/ap1-hd/">
                        <img src="images/ap1hd-logo.jpg" alt="ap1-hd" class="themesriyog_slider_img img-fluid">
                    </a>
                </div>
                <div class="single_agency_slider" data-toggle="tooltip" data-placement="top" title="Artha Sarokar">
                    <a href="https://sriyog.com/media-agency/artha-sarokar/">
                        <img src="images/artahsarokar-logo.jpg" alt="artha-sarokar" class="themesriyog_slider_img img-fluid">
                    </a>
                </div>
                <div class="single_agency_slider" data-toggle="tooltip" data-placement="top" title="Baahrakhari">
                    <a href="https://sriyog.com/media-agency/baahrakhari/">
                        <img src="images/12khari.png" alt="baahrakhari" class="themesriyog_slider_img img-fluid">
                    </a>
                </div>

                <div class="single_agency_slider" data-toggle="tooltip" data-placement="top" title="Abhiyandaily">
                    <a href="https://sriyog.com/media-agency/abhiyandaily/">
                        <img src="images/abhiyan.png" alt="abhiyandaily" class="themesriyog_slider_img img-fluid">
                    </a>
                </div>
                <div class="single_agency_slider" data-toggle="tooltip" data-placement="top" title="AP1 HD">
                    <a href="https://sriyog.com/media-agency/ap1-hd/">
                        <img src="images/ap1hd-logo.jpg" alt="ap1-hd" class="themesriyog_slider_img img-fluid">
                    </a>
                </div>
                <div class="single_agency_slider" data-toggle="tooltip" data-placement="top" title="Artha Sarokar">
                    <a href="https://sriyog.com/media-agency/artha-sarokar/">
                        <img src="images/artahsarokar-logo.jpg" alt="artha-sarokar" class="themesriyog_slider_img img-fluid">
                    </a>
                </div>
                <div class="single_agency_slider" data-toggle="tooltip" data-placement="top" title="Baahrakhari">
                    <a href="https://sriyog.com/media-agency/baahrakhari/">
                        <img src="images/12khari.png" alt="baahrakhari" class="themesriyog_slider_img img-fluid">
                    </a>
                </div>

                <div class="single_agency_slider" data-toggle="tooltip" data-placement="top" title="Abhiyandaily">
                    <a href="https://sriyog.com/media-agency/abhiyandaily/">
                        <img src="images/abhiyan.png" alt="abhiyandaily" class="themesriyog_slider_img img-fluid">
                    </a>
                </div>
                <div class="single_agency_slider" data-toggle="tooltip" data-placement="top" title="AP1 HD">
                    <a href="https://sriyog.com/media-agency/ap1-hd/">
                        <img src="images/ap1hd-logo.jpg" alt="ap1-hd" class="themesriyog_slider_img img-fluid">
                    </a>
                </div>
                <div class="single_agency_slider" data-toggle="tooltip" data-placement="top" title="Artha Sarokar">
                    <a href="https://sriyog.com/media-agency/artha-sarokar/">
                        <img src="images/artahsarokar-logo.jpg" alt="artha-sarokar" class="themesriyog_slider_img img-fluid">
                    </a>
                </div>
                <div class="single_agency_slider" data-toggle="tooltip" data-placement="top" title="Baahrakhari">
                    <a href="https://sriyog.com/media-agency/baahrakhari/">
                        <img src="images/12khari.png" alt="baahrakhari" class="themesriyog_slider_img img-fluid">
                    </a>
                </div>








            </div>
        </div>
        <!-- news-sites end -->

        <!-- become-provider start -->









    </div>


    <!-- about page body ends -->

    <?php include("footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>


</body>

</html>