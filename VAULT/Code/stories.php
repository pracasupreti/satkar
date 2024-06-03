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
    <section class="container-fluid bg-light border-bottom">
        <section class="container terms-bar">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12 pt-5 mt-5">
                    <h1>pahunaGhar Stories
                    </h1>
                    <h5 class="mt-5">
                        Check out latest stories from pahunaGhar as it happens. This section consists of all the news and updates from pahunaGhar team.
                    </h5>
                </div>

                <div class="col-lg-5 col-md-6 col-sm-12">
                    <img src="images/stories1.png" alt="" class="img-fluid">
                </div>
            </div>
        </section>
    </section>

    <!-- support page body -->

    <section class="container training-container pt-5 mb-5 training-form">

        <h3 class="mb-5">Search for stories by category or author</h3>


        <div class="row p-3 bg-light">
            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="form-group">
                    <select class="selectpicker form-control" data-live-search="true" title="Select Category">
                    <option data-tokens="ketchup mustard">Plumber</option>
                    <option data-tokens="mustard">Plumber</option>
                    <option data-tokens="frosting">Plumber</option>
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
    <!-- about page sublinks end -->

    <!-- press page body -->
    <section class="container-fluid bg-light pt-5 pb-5">



        <section class="container ">
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


    </section>


    <div class="container mt-5 pl-0 pr-0">
        <div class="row">
            <div class="col-md-3 col-lg-4 col-sm-12 mt-3">
                <div id="news-slider3">

                    <div class="post-slide3">
                        <div class="post-img">
                            <img src="http://bestjquery.com/tutorial/news-slider/demo32/images/img-1.jpg" alt="">
                            <span class="post-icon">
                              <i class="fa fa-book"></i>
                          </span>
                        </div>
                        <ul class="post-bar">
                            <li>may 2, 2016</li>
                            <li>
                                <a href="#">WebDesign</a>
                                <a href="#">php</a>
                            </li>
                        </ul>
                        <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                        <p class="post-description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec elementum mauris. Praesent vehicula gravida dolor, ac efficitur sem sagittis.
                        </p>
                        <a href="#" class="read-more">
                            <i class="fas fa-long-arrow-alt-right"></i>
                            <span>read more</span>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-md-3 col-lg-4 col-sm-12 mt-3">
                <div id="news-slider3">

                    <div class="post-slide3">
                        <div class="post-img">
                            <img src="http://bestjquery.com/tutorial/news-slider/demo32/images/img-1.jpg" alt="">
                            <span class="post-icon">
                              <i class="fa fa-book"></i>
                          </span>
                        </div>
                        <ul class="post-bar">
                            <li>may 2, 2016</li>
                            <li>
                                <a href="#">WebDesign</a>
                                <a href="#">php</a>
                            </li>
                        </ul>
                        <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                        <p class="post-description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec elementum mauris. Praesent vehicula gravida dolor, ac efficitur sem sagittis.
                        </p>
                        <a href="#" class="read-more">
                            <i class="fas fa-long-arrow-alt-right"></i>
                            <span>read more</span>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-md-3 col-lg-4 col-sm-12 mt-3">
                <div id="news-slider3">

                    <div class="post-slide3">
                        <div class="post-img">
                            <img src="http://bestjquery.com/tutorial/news-slider/demo32/images/img-1.jpg" alt="">
                            <span class="post-icon">
                              <i class="fa fa-book"></i>
                          </span>
                        </div>
                        <ul class="post-bar">
                            <li>may 2, 2016</li>
                            <li>
                                <a href="#">WebDesign</a>
                                <a href="#">php</a>
                            </li>
                        </ul>
                        <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                        <p class="post-description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec elementum mauris. Praesent vehicula gravida dolor, ac efficitur sem sagittis.
                        </p>
                        <a href="#" class="read-more">
                            <i class="fas fa-long-arrow-alt-right"></i>
                            <span>read more</span>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-md-3 col-lg-4 col-sm-12 mt-3">
                <div id="news-slider3">

                    <div class="post-slide3">
                        <div class="post-img">
                            <img src="http://bestjquery.com/tutorial/news-slider/demo32/images/img-1.jpg" alt="">
                            <span class="post-icon">
                              <i class="fa fa-book"></i>
                          </span>
                        </div>
                        <ul class="post-bar">
                            <li>may 2, 2016</li>
                            <li>
                                <a href="#">WebDesign</a>
                                <a href="#">php</a>
                            </li>
                        </ul>
                        <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                        <p class="post-description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec elementum mauris. Praesent vehicula gravida dolor, ac efficitur sem sagittis.
                        </p>
                        <a href="#" class="read-more">
                            <i class="fas fa-long-arrow-alt-right"></i>
                            <span>read more</span>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-md-3 col-lg-4 col-sm-12 mt-3">
                <div id="news-slider3">

                    <div class="post-slide3">
                        <div class="post-img">
                            <img src="http://bestjquery.com/tutorial/news-slider/demo32/images/img-1.jpg" alt="">
                            <span class="post-icon">
                              <i class="fa fa-book"></i>
                          </span>
                        </div>
                        <ul class="post-bar">
                            <li>may 2, 2016</li>
                            <li>
                                <a href="#">WebDesign</a>
                                <a href="#">php</a>
                            </li>
                        </ul>
                        <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                        <p class="post-description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec elementum mauris. Praesent vehicula gravida dolor, ac efficitur sem sagittis.
                        </p>
                        <a href="#" class="read-more">
                            <i class="fas fa-long-arrow-alt-right"></i>
                            <span>read more</span>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-md-3 col-lg-4 col-sm-12 mt-3">
                <div id="news-slider3">

                    <div class="post-slide3">
                        <div class="post-img">
                            <img src="http://bestjquery.com/tutorial/news-slider/demo32/images/img-1.jpg" alt="">
                            <span class="post-icon">
                              <i class="fa fa-book"></i>
                          </span>
                        </div>
                        <ul class="post-bar">
                            <li>may 2, 2016</li>
                            <li>
                                <a href="#">WebDesign</a>
                                <a href="#">php</a>
                            </li>
                        </ul>
                        <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                        <p class="post-description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec elementum mauris. Praesent vehicula gravida dolor, ac efficitur sem sagittis.
                        </p>
                        <a href="#" class="read-more">
                            <i class="fas fa-long-arrow-alt-right"></i>
                            <span>read more</span>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-md-3 col-lg-4 col-sm-12 mt-3">
                <div id="news-slider3">

                    <div class="post-slide3">
                        <div class="post-img">
                            <img src="http://bestjquery.com/tutorial/news-slider/demo32/images/img-1.jpg" alt="">
                            <span class="post-icon">
                              <i class="fa fa-book"></i>
                          </span>
                        </div>
                        <ul class="post-bar">
                            <li>may 2, 2016</li>
                            <li>
                                <a href="#">WebDesign</a>
                                <a href="#">php</a>
                            </li>
                        </ul>
                        <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                        <p class="post-description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec elementum mauris. Praesent vehicula gravida dolor, ac efficitur sem sagittis.
                        </p>
                        <a href="#" class="read-more">
                            <i class="fas fa-long-arrow-alt-right"></i>
                            <span>read more</span>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-md-3 col-lg-4 col-sm-12 mt-3">
                <div id="news-slider3">

                    <div class="post-slide3">
                        <div class="post-img">
                            <img src="http://bestjquery.com/tutorial/news-slider/demo32/images/img-1.jpg" alt="">
                            <span class="post-icon">
                              <i class="fa fa-book"></i>
                          </span>
                        </div>
                        <ul class="post-bar">
                            <li>may 2, 2016</li>
                            <li>
                                <a href="#">WebDesign</a>
                                <a href="#">php</a>
                            </li>
                        </ul>
                        <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                        <p class="post-description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec elementum mauris. Praesent vehicula gravida dolor, ac efficitur sem sagittis.
                        </p>
                        <a href="#" class="read-more">
                            <i class="fas fa-long-arrow-alt-right"></i>
                            <span>read more</span>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-md-3 col-lg-4 col-sm-12 mt-3">
                <div id="news-slider3">

                    <div class="post-slide3">
                        <div class="post-img">
                            <img src="http://bestjquery.com/tutorial/news-slider/demo32/images/img-1.jpg" alt="">
                            <span class="post-icon">
                              <i class="fa fa-book"></i>
                          </span>
                        </div>
                        <ul class="post-bar">
                            <li>may 2, 2016</li>
                            <li>
                                <a href="#">WebDesign</a>
                                <a href="#">php</a>
                            </li>
                        </ul>
                        <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                        <p class="post-description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec elementum mauris. Praesent vehicula gravida dolor, ac efficitur sem sagittis.
                        </p>
                        <a href="#" class="read-more">
                            <i class="fas fa-long-arrow-alt-right"></i>
                            <span>read more</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>



        <!-- pagination -->
        <nav aria-label="" class="mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                    <span class="page-link">
              2
              <span class="sr-only">(current)</span>
                    </span>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>










    <!-- press page body ends -->

    <?php include("footer.php"); ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>


</body>

</html>