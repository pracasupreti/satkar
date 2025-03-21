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
    ==============testimonials main container starts
  ================= -->

    <!-- testimonials page heading  -->
    <section class="container-fluid border-bottom bg-danger">
        <section class="container about-bar pt-5 pb-5">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-6">
                    <h1>Client Testimonials</h1>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <button type="button" class="w-100 font-weight-bold btn btn-light" data-toggle="modal" data-target="#applyModalCenter">
                Submit Testimonial
              </button>

                    <!-- model that pops up when apply now button is clicked -->
                    <div class="modal fade shadow" id="applyModalCenter" tabindex="-1" role="dialog" aria-labelledby="applyModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <h5 class="modal-title" id="applyModalCenterTitle">Submit Testimonial</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                                </div>
                                <div class="modal-body text-left bg-light">
                                    <form>

                                        <div class="form-group">
                                            <label for="name">Full Name</label>

                                            <input type="text" class="form-control" id="" aria-describedby="FullName" placeholder="Enter Full Name">
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Company Name</label>

                                            <input type="text" class="form-control" id="" aria-describedby="CompanyName" placeholder="Enter Full Name">
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
                                            <textarea class="form-control" type="text" placeholder="Write/Paste your cover letter here" data-wg-input="" data-uuid-input=""></textarea>
                                        </div>








                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Submit Testimonial</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
    </section>

    <section class="container training-container pt-5 training-form">

        <h3 class="mb-5">Search Testimonials</h3>


        <div class="row p-3 bg-light">

            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="form-group">
                    <select class="selectpicker form-control" data-live-search="true" title="Choose City">
                    <option>Biratnagar</option>
                    <option>Birgunj</option>
                    <option>Kathmandu</option>
                  </select>
                </div>

            </div>

            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="form-group">
                    <select class="selectpicker form-control" data-live-search="true" title="Chose Country">
                        <option>Nepal</option>
                        <option>India</option>
                        <option>Australia</option>
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


    <div class="container white-bg mt-5">

        <div class="content cont_box">

            <div class="content-wrap">




                <div class="row">


                    <div class="col-md-6">

                        <div class="testimonial-1">

                            <div class="media">

                                <img src="https://pfs.com.np/wp-content/uploads/kishor-baskota-150x150.png" alt="150" class="img-fluid">

                            </div>

                            <div class="body text-justify">

                                <p>The level of professionalism was truly world class.<br> I especially appreciated the organized approach and detailed checklist used throughout the entire process. Most importantly the finished product of the website was
                                    exactly what I wanted it to be.</p>

                                <div class="title">Mr. Kishor Baskota</div>

                                <div class="company">


                                    Baskota Ventures

                                </div>

                            </div>

                        </div>

                    </div>



                    <div class="col-md-6">

                        <div class="testimonial-1">

                            <div class="media">

                                <img src="https://pfs.com.np/wp-content/uploads/ashish-rai-150x150.png" alt="150" class="img-fluid">

                            </div>

                            <div class="body text-justify">

                                <p>All thanks to Pracas Infosys and the team.<br> My new site is doing very well and is on page one for most of the Google search terms we want already. So far all the comments about site have been great and it has already
                                    starting to earn income for our business. </p>

                                <div class="title">Mr. Ashish Rai</div>

                                <div class="company">


                                    <a class="sy-link" href="https://www.hotelmajestic.com.np/" target="_blank" title="Hotel Majestic, Bhedetar ">

                                            
                                            Hotel Majestic, Bhedetar 
                                            
                                        </a>


                                </div>

                            </div>

                        </div>

                    </div>



                </div>

                <div class="row">


                    <div class="col-md-6">

                        <div class="testimonial-1">

                            <div class="media">

                                <img src="https://pfs.com.np/wp-content/uploads/pankaj-ghimire-150x150.jpg" alt="150" class="img-fluid">

                            </div>

                            <div class="body text-justify">

                                <p>One of the best software development companies.<br> Personally, I’m very satisfied with its work. It was very good experience to work with Pracas Infosys. They were totally convincing, cooperative and punctual with their
                                    work. I wish further growth of this company.</p>

                                <div class="title">Mr. Pankaj Ghimire</div>

                                <div class="company">


                                    <a class="sy-link" href="https://www.desireaccounting.com.au/" target="_blank" title="Desire Accounting Associates ">

                                            
                                            Desire Accounting Associates 
                                            
                                        </a>


                                </div>

                            </div>

                        </div>

                    </div>



                    <div class="col-md-6">

                        <div class="testimonial-1">

                            <div class="media">

                                <img src="https://pfs.com.np/wp-content/uploads/anuj-150x150.png" alt="150" class="img-fluid">

                            </div>

                            <div class="body text-justify">

                                <p>Dedicated &amp; reliable IT Consulting provider<br> We are very much impressed by their services of timely updates and they really listened effectively to what I was seeking with good communication skills. Staffs are very
                                    hard working, cooperative &amp; friendly.</p>

                                <div class="title">Mr. Anuj Podaar</div>

                                <div class="company">


                                    <a class="sy-link" href="http://magicfootwear.com.np/" target="_blank" title="Magic Footwear">

                                            
                                            Magic Footwear
                                            
                                        </a>


                                </div>

                            </div>

                        </div>

                    </div>



                </div>

                <div class="row">

                    <div class="col-sm-12">

                        <div class="center-message blockquote">

                            <!-- wp:html -->
                            Few of the precious words, which values and shows our expertise which we have been delivering since 2007. Hundreds of successful products, services and professional support.
                            <!-- /wp:html -->
                        </div>

                    </div>

                </div>

                <div class="row">


                    <div class="col-md-6">

                        <div class="testimonial-1">

                            <div class="media">

                                <img src="https://pfs.com.np/wp-content/uploads/mukesh-150x150.png" alt="150" class="img-fluid">

                            </div>

                            <div class="body text-justify">

                                <p>I am very happy working with Pracas Infosys.<br> It was my pleasure to work with such renowned developers. They never let me feel that I had bothered them with my questions rather they were very positive and helpful with
                                    all my questions.</p>

                                <div class="title">Mr. Mukesh Rathi</div>

                                <div class="company">


                                    <a class="sy-link" href="http://rathigroup.net/" target="_blank" title="Rathi Group">

                                            
                                            Rathi Group
                                            
                                        </a>


                                </div>

                            </div>

                        </div>

                    </div>



                    <div class="col-md-6">

                        <div class="testimonial-1">

                            <div class="media">

                                <img src="https://pfs.com.np/wp-content/uploads/sudesh-150x150.jpg" alt="150" class="img-fluid">

                            </div>

                            <div class="body text-justify">

                                <p>Definitely develops our business.<br> I’ve been very much satisfied with their service and look forward to continuing my business with them. Our appreciation and gratitude for supporting us and providing us an attractive
                                    site.
                                </p>

                                <div class="title">Mr. Sudesh Sharma</div>

                                <div class="company">


                                    <a class="sy-link" href="http://hotelpanchali.com.np/" target="_blank" title="Hotel Panchali">

                                            
                                            Hotel Panchali
                                            
                                        </a>


                                </div>

                            </div>

                        </div>

                    </div>



                </div>

            </div>

        </div>

        <nav aria-label="" class="container mt-5 ml-auto mr-auto">
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>


</body>

</html>